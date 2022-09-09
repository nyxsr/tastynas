/**
 * Panda Landing Javascript File
 */
"use strict";

var $ = jQuery.noConflict();

/* jQuery easing */
$.extend( $.easing, {
    def: 'easeOutQuad',
    swing: function ( x, t, b, c, d ) {
        return $.easing[ $.easing.def ]( x, t, b, c, d );
    },
    easeOutQuad: function ( x, t, b, c, d ) {
        return -c * ( t /= d ) * ( t - 2 ) + b;
    },
    easeOutQuint: function ( x, t, b, c, d ) {
        return c * ( ( t = t / d - 1 ) * t * t * t * t + 1 ) + b;
    }
} );

/**
 * Panda Object
 */
window.Panda = {};

( function () {

    // Panda Properties
    Panda.$window = $( window );
    Panda.$body = $( document.body );
    Panda.status = '';                                           // Panda Status
    Panda.defaults = {
        animation: {
            name: 'fadeIn',
            duration: '1.2s',
            delay: '.2s'
        },
        slider: {
            responsiveClass: true,
            navText: [ '<span class="nav-left" />', '<span class="nav-right" />' ],
            checkVisible: false,
            items: 1,
            smartSpeed: Panda.isEdge ? 200 : 500,
            autoplaySpeed: Panda.isEdge ? 200 : 1000,
            autoplayTimeout: 10000

        },
    }

    /**
     * Get jQuery object
     * @param {string|jQuery} selector
     */
    Panda.$ = function ( selector ) {
        return selector instanceof jQuery ? selector : $( selector );
    }

    /**
     * Make a macro task
     * @param {function} fn
     * @param {number} delay
     */
    Panda.call = function ( fn, delay ) {
        setTimeout( fn, delay );
    }

    /**
     * Get dom element by id
     * @param {string} id
     */
    Panda.byId = function ( id ) {
        return document.getElementById( id );
    }

    /**
     * Get dom elements by tagName
     * @param {string} tagName
     * @param {HTMLElement} element this can be omitted.
     */
    Panda.byTag = function ( tagName, element ) {
        return element ?
            element.getElementsByTagName( tagName ) :
            document.getElementsByTagName( tagName );
    }

    /**
     * Get dom elements by className
     * @param {string} className
     * @param {HTMLElement} element this can be omitted.
     */
    Panda.byClass = function ( className, element ) {
        return element ?
            element.getElementsByClassName( className ) :
            document.getElementsByClassName( className );
    }


    /**
     * Parse options string to object
     * @param {string} options
     */
    Panda.parseOptions = function ( options ) {
        return 'string' == typeof options ?

            JSON.parse( options.replace( /'/g, '"' ).replace( ';', '' ) ) :
            {};
    }

    /**
     * @function isOnScreen
     * @param {HTMLElement} el
     * @param {number} dx
     * @param {number} dy
     */
    Panda.isOnScreen = function ( el, dx, dy ) {
        var a = window.pageXOffset,
            b = window.pageYOffset,
            o = el.getBoundingClientRect(),
            x = o.left + a,
            y = o.top + b,
            ax = typeof dx == 'undefined' ? 0 : dx,
            ay = typeof dy == 'undefined' ? 0 : dy;

        return y + o.height + ay >= b &&
            y <= b + window.innerHeight + ay &&
            x + o.width + ax >= a &&
            x <= a + window.innerWidth + ax;
    }

    /**
     * @function requestTimeout
     * @param {function} fn
     * @param {number} delay
     */
    Panda.requestTimeout = function ( fn, delay ) {
        var handler = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame;
        if ( !handler ) {
            return setTimeout( fn, delay );
        }
        var start, rt = new Object();

        function loop( timestamp ) {
            if ( !start ) {
                start = timestamp;
            }
            var progress = timestamp - start;
            progress >= delay ? fn() : rt.val = handler( loop );
        };

        rt.val = handler( loop );
        return rt;
    }

    /**
     * @function appear
     * 
     * @param {HTMLElement} el
     * @param {function} fn
     * @param {object} options
     */
    Panda.appear = ( function () {
        var checks = [],
            timerId = false,
            one;

        var checkAll = function () {
            for ( var i = checks.length; i--; ) {
                one = checks[ i ];

                if ( Panda.isOnScreen( one.el, one.options.accX, one.options.accY ) ) {
                    typeof $( one.el ).data( 'appear-callback' ) == 'function' && $( one.el ).data( 'appear-callback' ).call( one.el, one.data );
                    one.fn && one.fn.call( one.el, one.data );
                    checks.splice( i, 1 );
                }
            }
        };

        window.addEventListener( 'scroll', checkAll, { passive: true } );
        window.addEventListener( 'resize', checkAll, { passive: true } );
        $( window ).on( 'appear.check', checkAll );

        return function ( el, fn, options ) {
            var settings = {
                data: undefined,
                accX: 0,
                accY: 0
            };

            if ( options ) {
                options.data && ( settings.data = options.data );
                options.accX && ( settings.accX = options.accX );
                options.accY && ( settings.accY = options.accY );
            }

            checks.push( { el: el, fn: fn, options: settings } );
            if ( !timerId ) {
                timerId = Panda.requestTimeout( checkAll, 100 );
            }
        }
    } )();

    Panda.lazyload = function ( selector, force ) {
        function load() {
            this.setAttribute( 'src', this.getAttribute( 'data-src' ) );
            this.addEventListener( 'load', function () {
                this.style[ 'padding-top' ] = '';
                this.classList.remove( 'lazy-img' );
            } );
        }

        // Lazyload images
        Panda.$( selector ).find( '.lazy-img' ).each( function () {
            if ( 'undefined' != typeof force && force ) {
                load.call( this );
            } else {
                Panda.appear( this, load );
            }
        } )
    }

    /**
     * @function appearAnimate
     *
     * @param {string} selector
     */
    Panda.appearAnimate = function ( selector ) {
        Panda.$( selector ).each( function () {
            var el = this;
            Panda.appear( el, function () {
                if ( el.classList.contains( 'appear-animate' ) ) {
                    var settings = $.extend( {}, Panda.defaults.animation, Panda.parseOptions( el.getAttribute( 'data-animation-options' ) ) );

                    Panda.call( function () {
                        setTimeout(
                            function () {
                                el.style[ 'animation-duration' ] = settings.duration;
                                el.classList.add( settings.name );
                                el.classList.add( 'appear-animation-visible' );
                            },
                            settings.delay ? Number( settings.delay.slice( 0, -1 ) ) * 1000 : 0
                        );
                    } );
                }
            } );
        } );
    }

    /**
     * @function slider
     *
     * @requires OwlCarousel
     */
    Panda.slider = ( function () {
        /**
         * @class Slider
         */
        function Slider( $el, options ) {
            return this.init( $el, options );
        }

        var onInitialize = function ( e ) {
            var i, j, breaks = [ '', '-xs', '-sm', '-md', '-lg', '-xl', '-xxl' ];
            this.classList.remove( 'row' );
            for ( i = 0; i < 7; ++i ) {
                for ( j = 1; j <= 12; ++j ) {
                    this.classList.remove( 'cols' + breaks[ i ] + '-' + j );
                }
            }
        }
        Slider.prototype.init = function ( $el, options ) {
            this.timers = [];
            this.translateFlag = 0;
            this.prev = 1;
            this.next = 1;

            Panda.lazyload( $el, true );

            var classes = $el.attr( 'class' ).split( ' ' ),
                settings = $.extend( true, {}, Panda.defaults.slider );

            // extend user options
            $.extend( true, settings, Panda.parseOptions( $el.attr( 'data-owl-options' ) ), options );

            $el.owlCarousel( settings );

        }

        return function ( selector, options ) {
            Panda.$( selector ).each( function () {
                var $this = $( this );

                Panda.call( function () {
                    new Slider( $this, options );
                } );
            } );
        }
    } )();

    /**
     * @function initScrollTopButton
     */
    Panda.initScrollTopButton = function () {
        // register scroll top button

        var domScrollTop = Panda.byId( 'scroll-top' );

        if ( domScrollTop ) {
            domScrollTop.addEventListener( 'click', function ( e ) {
                $( 'html, body' ).animate( { scrollTop: 0 }, 600 );
                e.preventDefault();
            } );

            var refreshScrollTop = function () {
                if ( window.pageYOffset > 400 ) {
                    domScrollTop.classList.add( 'show' );

                    // Show scroll position percent in scroll top button
                    var d_height = $( document ).height(),
                        w_height = $( window ).height(),
                        c_scroll_pos = $( window ).scrollTop();

                    var perc = c_scroll_pos / ( d_height - w_height ) * 214;

                    if ( $( '#progress-indicator' ).length > 0 ) {
                        $( '#progress-indicator' ).css( 'stroke-dasharray', perc + ', 400' );
                    }
                } else {
                    domScrollTop.classList.remove( 'show' );
                }
            }

            Panda.call( refreshScrollTop, 500 );
            window.addEventListener( 'scroll', refreshScrollTop, { passive: true } );
        }
    }

    /**
     * Initialize floating elements
     * @since 1.1
     * @param {string|jQuery} selector
     * @return {void}
     */
    Panda.initFloatingElements = function ( selector ) {
        if ( $.fn.parallax ) {
            var $selectors = Panda.$( selector );

            $selectors.each( function () {
                var $this = $( this );

                if ( $this.attr( 'data-floating-depth' ) )
                    $this.children( '.layer' ).attr( 'data-depth', $this.attr( 'data-floating-depth' ) );
                else
                    $this.children( '.layer' ).attr( 'data-depth', '.3' );

                $this.parallax( $this.data( 'options' ) );
            } );
        }
    }

    /**
     * Panda Initializer
     */

    // Initialize Method while document is being loaded.
    Panda.prepare = function () {
        $( document ).ready( function () {
            if ( window.location.hash != '' ) {
                window.scrollTo( {
                    top: 0,
                    left: 0,
                } );
            }
        } );
    };


    // Initialize Method after document has been loaded
    Panda.init = function () {
        Panda.appearAnimate( '.appear-animate' );                               // Runs appear animations
        Panda.slider( '.owl-carousel' );                                        // Initialize slider
        Panda.initScrollTopButton();                                            // Initialize scroll top button.
        Panda.initFloatingElements( '.floating' );                              // Initialize floating widgets

        Panda.status = 'complete';
    }

    /**
     * Setup Panda
     */

    // Prepare Panda Theme
    Panda.prepare();
    // Initialize Panda Theme
    window.onload = function () {
        Panda.status = 'loaded';
        Panda.$body.addClass( 'loaded' );
        Panda.$window.trigger( 'Panda_load' );

        Panda.call( Panda.initLayout );
        Panda.call( Panda.init );
        Panda.$window.trigger( 'panda_complete' );

        Panda.lazyload( document.body );
    }
} )();
