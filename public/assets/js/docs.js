/**
 * Panda Documentation Javascript File
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
    Panda.status = ''; // Panda Status
    Panda.minDesktopWidth = 992; // Detect desktop screen
    Panda.isIE = navigator.userAgent.indexOf( "Trident" ) >= 0; // Detect Internet Explorer
    Panda.isEdge = navigator.userAgent.indexOf( "Edge" ) >= 0; // Detect Edge
    Panda.isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test( navigator.userAgent ); // Detect Mobile
    Panda.defaults = {
        animation: {
            name: 'fadeIn',
            duration: '1.2s',
            delay: '.2s'
        },
        slider: {
            responsiveClass: true,
            navText: [ '<i class="p-icon-angle-left">', '<i class="p-icon-angle-right">' ],
            checkVisible: false,
            items: 1,
            smartSpeed: Panda.isEdge ? 200 : 500,
            autoplaySpeed: Panda.isEdge ? 200 : 1000,
            autoplayTimeout: 10000

        },
        sliderPresets: {
            'intro-slider': {
                animateIn: 'fadeIn',
                animateOut: 'fadeOut'
            },
            'product-single-carousel': {
                dots: false,
                nav: true,
            },
            'product-gallery-carousel': {
                dots: false,
                nav: true,
                margin: 20,
                items: 1,
                responsive: {
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    }
                },
            },
            'rotate-slider': {
                dots: false,
                nav: true,
                margin: 0,
                items: 1,
                animateIn: '',
                animateOut: ''
            }
        },
        sliderThumbs: {
            margin: 0,
            items: 4,
            dots: false,
            nav: true,
            navText: [ '<i class="fas fa-chevron-left">', '<i class="fas fa-chevron-right">' ]
        },
        stickySidebar: {
            autoInit: true,
            minWidth: 991,
            containerSelector: '.sticky-sidebar-wrapper',
            autoFit: true,
            activeClass: 'sticky-sidebar-fixed',
            paddingOffsetTop: 67,
            paddingOffsetBottom: 0,
        }
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
     * Set cookie
     * @param {string} name Cookie name
     * @param {string} value Cookie value
     * @param {number} exdays Expire period
     */
    Panda.setCookie = function ( name, value, exdays ) {
        var date = new Date();
        date.setTime( date.getTime() + ( exdays * 24 * 60 * 60 * 1000 ) );
        document.cookie = name + "=" + value + ";expires=" + date.toUTCString() + ";path=/";
    }

    /**
     * Get cookie
     * @param {string} name Cookie name
     */
    Panda.getCookie = function ( name ) {
        var n = name + "=";
        var ca = document.cookie.split( ';' );
        for ( var i = 0; i < ca.length; ++i ) {
            var c = ca[ i ];
            while ( c.charAt( 0 ) == ' ' ) {
                c = c.substring( 1 );
            }
            if ( c.indexOf( n ) == 0 ) {
                return c.substring( n.length, c.length );
            }
        }
        return "";
    }

    /**
     * Parse options string to object
     * @param {string} options
     */
    Panda.parseOptions = function ( options ) {
        return 'string' == typeof options ?

            JSON.parse( options.replace( /'/g, '"' ).replace( ';', '' ) ) : {};
    }

    /**
     * Parse html template with variables.
     * @param {string} template
     * @param {object} vars
     */
    Panda.parseTemplate = function ( template, vars ) {
        return template.replace( /\{\{(\w+)\}\}/g, function () {
            return vars[ arguments[ 1 ] ];
        } );
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
     * @function stickySidebar
     *
     * @requires themeSticky
     * @param {string} selector
     */
    Panda.stickySidebar = function ( selector ) {
        if ( $.fn.themeSticky ) {
            Panda.$( selector ).each( function () {
                var $this = $( this );
                $this.themeSticky( $.extend( Panda.defaults.stickySidebar, Panda.parseOptions( $this.attr( 'data-sticky-options' ) ) ) );
                $this.trigger( 'recalc.pin' );
            } );
        }
    }
    /**
     * @function refreshSidebar
     *
     * @param {string} selector
     */
    Panda.refreshSidebar = function ( selector ) {
        if ( $.fn.themeSticky ) {
            Panda.$( selector ).each( function () {
                $( this ).trigger( 'recalc.pin' );
            } );
        }
    }

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
     * Scroll To
     * 
     * @param {string} arg 
     * @param {number} duration 
     */
    Panda.scrollTo = function ( arg, duration ) {
        var offset = 0;
        var _duration = typeof duration == 'undefined' ? 600 : duration;
        if ( typeof arg == 'number' ) {
            offset = arg;
        } else {
            offset = Panda.$( arg ).offset().top;
        }
        $( 'html,body' ).stop().animate( { scrollTop: offset }, _duration );
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
     * @function requestInterval
     * @param {function} fn
     * @param {number} step
     * @param {number} timeOut
     */
    Panda.requestInterval = function ( fn, step, timeOut ) {
        var handler = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame;
        if ( !handler ) {
            if ( !timeOut )
                return setTimeout( fn, timeOut );
            else
                return setInterval( fn, step );
        }
        var start, last, rt = new Object();

        function loop( timestamp ) {
            if ( !start ) {
                start = last = timestamp;
            }
            var progress = timestamp - start;
            var delta = timestamp - last;
            if ( !timeOut || progress < timeOut ) {
                if ( delta > step ) {
                    rt.val = handler( loop );
                    fn();
                    last = timestamp;
                } else {
                    rt.val = handler( loop );
                }
            } else {
                fn();
            }
        };
        rt.val = handler( loop );
        return rt;
    }

    /**
     * @function deleteTimeout
     * @param {number} timerID
     */
    Panda.deleteTimeout = function ( timerID ) {
        if ( !timerID ) {
            return;
        }
        var handler = window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame;
        if ( !handler ) {
            return clearTimeout( timerID );
        }
        if ( timerID.val ) {
            return handler( timerID.val );
        }
    }

    Panda.hashScroll = {
        init: function () {

            this.build()
                .events();

            return this;
        },

        build: function () {
            var self = this;

            try {
                var hash = window.location.hash;
                var target = $( hash );
                if ( target.length && !( hash == '#review_form' || hash == '#reviews' || hash.indexOf( '#comment-' ) != -1 ) ) {
                    $( 'html, body' ).delay( 600 ).stop().animate( {
                        scrollTop: target.offset().top
                    }, 600, 'easeOutQuad' );
                }

                return self;
            } catch ( err ) {
                return self;
            }
        },

        getTarget: function ( href ) {
            if ( '#' == href || href.endsWith( '#' ) ) {
                return false;
            }
            var target;

            if ( href.indexOf( '#' ) == 0 ) {
                target = $( href );
            } else {
                var url = window.location.href;
                url = url.substring( url.indexOf( '://' ) + 3 );
                if ( url.indexOf( '#' ) != -1 )
                    url = url.substring( 0, url.indexOf( '#' ) );
                href = href.substring( href.indexOf( '://' ) + 3 );
                href = href.substring( href.indexOf( url ) + url.length );
                if ( href.indexOf( '#' ) == 0 ) {
                    target = $( href );
                }
            }
            return target;
        },

        events: function () {
            var self = this;
            if ( window.location.hash != '' ) {
                var $body = $( 'body' ),
                    target = $( window.location.hash );

                if ( target && target.get( 0 ) ) {

                    var scroll_to = target.offset().top;
                    $( 'html, body' ).stop().animate( {
                        scrollTop: scroll_to
                    }, 600, 'easeOutQuad', function () { } );
                }
            }
            $( 'body' ).on( 'click', 'a[href*="#"].hash-scroll', function ( e ) {
                e.preventDefault();

                var $this = $( this ),
                    href = $this.attr( 'href' ),
                    target = self.getTarget( href );

                if ( target && target.get( 0 ) ) {
                    var $parent = $this.parent();

                    var scroll_to = target.offset().top;
                    $( 'html, body' ).stop().animate( {
                        scrollTop: scroll_to
                    }, 600, 'easeOutQuad', function () {
                        $parent.siblings().removeClass( 'active' );
                        $parent.addClass( 'active' );
                    } );
                } else if ( '#' != href ) {
                    window.location.href = $this.attr( 'href' );
                }
            } );
            return self;
        }
    }
    /**
     * @function sidebar
     */
    Panda.sidebar = ( function () {
        var is_mobile = window.innerWidth < Panda.minDesktopWidth;
        var onResizeNavigationStyle = function () {
            if ( window.innerWidth < Panda.minDesktopWidth && !is_mobile ) {
                this.$sidebar.find( '.sidebar-content, .filter-clean' ).removeAttr( 'style' );
                this.$sidebar.find( '.sidebar-content' ).attr( 'style', '' );
                this.$sidebar.siblings( '.toolbox' ).children( ':not(:first-child)' ).removeAttr( 'style' );
            } else if ( window.innerWidth >= Panda.minDesktopWidth ) {
                if ( !this.$sidebar.hasClass( 'closed' ) && is_mobile ) {
                    this.$sidebar.addClass( 'closed' )
                    this.$sidebar.find( '.sidebar-content' ).css( 'display', 'none' );
                }
            }
            is_mobile = window.innerWidth < Panda.minDesktopWidth;
        }

        /**
         * @class Sidebar
         * Sidebar active class will be added to body tag : "sidebar class" + "-active"
         */
        function Sidebar( name ) {
            return this.init( name );
        }

        Sidebar.prototype.init = function ( name ) {
            var self = this;

            self.name = name;
            self.$sidebar = $( '.' + name );
            self.isNavigation = false;

            // If sidebar exists
            if ( self.$sidebar.length ) {

                // check if navigation style
                self.isNavigation = self.$sidebar.hasClass( 'sidebar-fixed' ) &&
                    self.$sidebar.parent().hasClass( 'toolbox-wrap' );

                if ( self.isNavigation ) {
                    onResizeNavigationStyle = onResizeNavigationStyle.bind( this );
                    Panda.$window.on( 'resize', onResizeNavigationStyle );
                }

                if ( Panda.$body.find( '.header' ).hasClass( 'header-transparent' ) ) {
                    Panda.$body.find( '.main' ).css( 'z-index', '19' );
                }

                Panda.$window.on( 'resize', function () {
                    Panda.$body.removeClass( name + '-active' );
                    if ( Panda.$body.find( '.header' ).hasClass( 'header-transparent' ) ) {
                        setTimeout( function () {
                            Panda.$body.find( '.main' ).css( 'z-index', '19' );
                        }, 400 );
                    }
                } );

                // Register toggle event
                self.$sidebar.find( '.sidebar-toggle' )
                    .add( name === 'sidebar' ? '.left-sidebar-toggle' : ( '.' + name + '-toggle' ) )
                    .on( 'click', function ( e ) {
                        self.toggle();
                        $( this ).blur();
                        $( '.sticky-sidebar' ).trigger( 'recalc.pin.left', [ 400 ] );
                        if ( Panda.$body.find( '.header' ).hasClass( 'header-transparent' ) && $( window ).innerWidth() < 992 ) {
                            Panda.$body.find( '.main' ).css( 'z-index', 'unset' );
                        }
                        e.preventDefault();
                    } );

                // Register close event
                self.$sidebar.find( '.sidebar-overlay, .sidebar-close' )
                    .on( 'click', function ( e ) {
                        Panda.$body.removeClass( name + '-active' );
                        if ( Panda.$body.find( '.header' ).hasClass( 'header-transparent' ) ) {
                            setTimeout( function () {
                                Panda.$body.find( '.main' ).css( 'z-index', '19' );
                            }, 400 );
                        }
                        $( '.sticky-sidebar' ).trigger( 'recalc.pin.left', [ 400 ] );
                        e.preventDefault();
                    } );

                setTimeout( function () {
                    $( '.sticky-sidebar' ).trigger( 'recalc.pin', [ 400 ] );
                } )
            }
            return false;
        }

        Sidebar.prototype.toggle = function () {
            var self = this;

            // if fixed sidebar
            if ( window.innerWidth >= Panda.minDesktopWidth && self.$sidebar.hasClass( 'sidebar-fixed' ) ) {

                // is closed ?
                var isClosed = self.$sidebar.hasClass( 'closed' );

                // if navigation style's sidebar
                if ( self.isNavigation ) {

                    isClosed || self.$sidebar.find( '.filter-clean' ).hide();

                    self.$sidebar.siblings( '.toolbox' ).children( ':not(:first-child)' ).fadeToggle( 'fast' );

                    self.$sidebar
                        .find( '.sidebar-content' )
                        .stop()
                        .animate( {
                            'height': 'toggle',
                            'margin-bottom': isClosed ? 'toggle' : -6
                        }, function () {
                            $( this ).css( 'margin-bottom', '' );
                            isClosed && self.$sidebar.find( '.filter-clean' ).fadeIn( 'fast' );
                        } );
                }
                // finally, toggle fixed sidebar
                self.$sidebar.toggleClass( 'closed' );

            } else {

                self.$sidebar.find( '.sidebar-overlay .sidebar-close' ).css( 'margin-left', -( window.innerWidth - document.body.clientWidth ) );

                // activate sidebar
                Panda.$body
                    .toggleClass( self.name + '-active' )
                    .removeClass( 'closed' );

                // issue
                if ( window.innerWidth >= 1200 && Panda.$body.hasClass( 'with-flex-container' ) ) {
                    $( '.owl-carousel' ).trigger( 'refresh.owl.carousel' );
                }
            }
        }

        return function ( name ) {
            return new Sidebar( name );
        }
    } )();

    /**
     * @class Menu
     */

    /**
     * @class Menu
     */
    Panda.Menu = {
        init: function () {
            this.initMenu();
            this.initMobileMenu();
            this.initFilterMenu();
            this.initCategoryMenu();
            this.initCollapsibleWidget();
            this.offcanvasCartShow();
        },
        initMenu: function () {
            // setup menu
            $( '.menu li' ).each( function () {
                if ( this.lastElementChild && (
                    this.lastElementChild.tagName === 'UL' ||
                    this.lastElementChild.classList.contains( 'megamenu' ) ) ) {
                    this.classList.add( 'submenu' );
                }
            } );

            $( '.menu > li > a' ).each( function () {
                var $this = $( this );
                if ( $this.text() == "Elements" ) {
                    var $parent = $this.closest( 'li' );
                    $parent.addClass( 'submenu-container' );
                }
            } );

            $( '.main-nav .megamenu, .main-nav .submenu > ul' ).each( function () {
                var $this = $( this ),
                    left = $this.offset().left,
                    outerWidth = $this.outerWidth(),
                    offset = ( left + outerWidth ) - ( window.innerWidth - 20 );
                if ( $this.closest( 'li' ).hasClass( 'submenu-container' ) ) {
                    var winWidth = $( window ).innerWidth();
                    if ( winWidth <= 1300 ) {
                        $this.css( 'width', winWidth - 40 );
                    }
                    outerWidth = $this.innerWidth();
                    offset = ( winWidth - outerWidth ) / 2 - left;
                    if ( offset < 0 ) {
                        $this.css( 'margin-left', offset );
                    }
                } else {
                    if ( offset >= 0 && left > 20 ) {
                        $this.css( 'margin-left', '-=' + offset );
                    }
                }
            } );


            // calc megamenu position
            Panda.$window.on( 'resize', function () {
                $( '.main-nav .megamenu, .main-nav .submenu > ul' ).each( function () {
                    var $this = $( this ),
                        left = $this.offset().left,
                        outerWidth = $this.outerWidth(),
                        offset = ( left + outerWidth ) - ( window.innerWidth - 20 );
                    if ( $this.closest( 'li' ).hasClass( 'submenu-container' ) ) {
                        var winWidth = $( window ).innerWidth();
                        if ( winWidth <= 1300 ) {
                            $this.css( 'width', winWidth - 40 );
                        } else {
                            $this.css( 'width', 1280 );
                        }
                        outerWidth = $this.innerWidth();
                        $this.css( 'margin-left', 0 );
                        left = $this.offset().left;
                        offset = ( winWidth - outerWidth ) / 2 - left;
                        if ( offset < 0 ) {
                            $this.css( 'margin-left', offset );
                        }
                    } else {
                        if ( offset >= 0 && left > 20 ) {
                            $this.css( 'margin-left', '-=' + offset );
                        }
                    }
                } );
            } );


        },
        initMobileMenu: function () {
            function showMobileMenu() {
                Panda.$body.addClass( 'mmenu-active' );
            };

            function hideMobileMenu() {
                Panda.$body.removeClass( 'mmenu-active' );
            };

            $( '.mobile-menu li, .toggle-menu li' ).each( function () {
                if ( this.lastElementChild && (
                    this.lastElementChild.tagName === 'UL' ||
                    this.lastElementChild.classList.contains( 'megamenu' ) ) ) {
                    var span = document.createElement( 'span' );
                    span.className = "toggle-btn";
                    this.firstElementChild.appendChild( span );
                }
            } );
            $( '.mobile-menu-toggle' ).on( 'click', showMobileMenu );
            $( '.mobile-menu-overlay' ).on( 'click', hideMobileMenu );
            $( '.mobile-menu-close' ).on( 'click', hideMobileMenu );
            Panda.$window.on( 'resize', hideMobileMenu );
        },
        initFilterMenu: function () {
            $( '.search-ul li' ).each( function () {
                if ( this.lastElementChild && this.lastElementChild.tagName === 'UL' ) {
                    var i = document.createElement( 'i' );
                    i.className = "fas fa-chevron-down";
                    this.classList.add( 'with-ul' );
                    this.firstElementChild.appendChild( i );
                }
            } );
            $( '.with-ul > a i, .toggle-btn' ).on( 'click', function ( e ) {
                $( this ).parent().next().slideToggle( 300 ).parent().toggleClass( "show" );
                setTimeout( function () {
                    $( '.sticky-sidebar' ).trigger( 'recalc.pin' );
                }, 320 );
                e.preventDefault();
            } );
        },
        initCategoryMenu: function () {
            // cat dropdown
            var $menu = $( '.category-dropdown' );
            if ( $menu.length ) {
                var $box = $menu.find( '.dropdown-box' );
                if ( $box.length ) {
                    var top = $( '.main' ).offset().top + $box[ 0 ].offsetHeight;
                    if ( window.pageYOffset > top || window.innerWidth < Panda.minDesktopWidth ) {
                        $menu.removeClass( 'show' );
                    }
                    window.addEventListener( 'scroll', function () {
                        if ( window.pageYOffset <= top && window.innerWidth >= Panda.minDesktopWidth ) {
                            $menu.removeClass( 'show' );
                        }
                    }, { passive: true } );
                    $( '.category-toggle' ).on( "click", function ( e ) {
                        e.preventDefault();
                    } )
                    $menu.on( "mouseover", function ( e ) {
                        if ( window.pageYOffset > top && window.innerWidth >= Panda.minDesktopWidth ) {
                            $menu.addClass( 'show' );
                        }
                    } )
                    $menu.on( "mouseleave", function ( e ) {
                        if ( window.pageYOffset > top && window.innerWidth >= Panda.minDesktopWidth ) {
                            $menu.removeClass( 'show' );
                        }
                    } )
                }
                if ( $menu.hasClass( 'with-sidebar' ) ) {
                    var sidebar = Panda.byClass( 'sidebar' );
                    if ( sidebar.length ) {
                        $menu.find( '.dropdown-box' ).css( 'width', sidebar[ 0 ].offsetWidth - 20 );

                        // set category menu's width same as sidebar.
                        Panda.$window.on( 'resize', function () {
                            $menu.find( '.dropdown-box' ).css( 'width', ( sidebar[ 0 ].offsetWidth - 20 ) );
                        } );
                    }
                }
            }
        },
        initCollapsibleWidget: function () {
            // generate toggle icon
            $( '.widget-collapsible .widget-title' ).each( function () {
                var span = document.createElement( 'span' );
                span.className = 'toggle-btn';
                this.appendChild( span );
            } );
            // slideToggle
            $( '.widget-collapsible .widget-title' ).on( 'click', function ( e ) {
                var $this = $( this );
                if ( !$this.hasClass( 'sliding' ) ) {
                    var $body = $this.siblings( '.widget-body' );

                    $this.hasClass( "collapsed" ) || $body.css( 'display', 'block' );

                    $this.addClass( "sliding" );
                    $body.slideToggle( 300, function () {
                        $this.removeClass( "sliding" );
                    } );

                    $this.toggleClass( "collapsed" );
                    setTimeout( function () {
                        $( '.sticky-sidebar' ).trigger( 'recalc.pin' );
                    }, 320 );
                }
            } );

        },
        offcanvasCartShow: function () {
            Panda.$body
                // Cart dropdown is offcanvas type
                .on( 'click', '.off-canvas .cart-toggle', function ( e ) {
                    e.preventDefault();
                    $( '.cart-dropdown' ).addClass( 'opened' );
                    Panda.$body.addClass( 'offcanvas-active' );
                } )
                .on( 'click', '.off-canvas .canvas-header .btn-close', function ( e ) {
                    $( '.cart-dropdown' ).removeClass( 'opened' );
                    Panda.$body.removeClass( 'offcanvas-active' );
                    e.preventDefault();
                } )
                .on( 'click', '.off-canvas .canvas-overlay', function ( e ) {
                    $( '.cart-dropdown' ).removeClass( 'opened' );
                    Panda.$body.removeClass( 'offcanvas-active' );
                    e.preventDefault();
                } )
        }
    };

    /**
     * Panda Initializer
     */

    // Initialize Method while document is being loaded.
    Panda.prepare = function () {
        if ( Panda.$body.hasClass( 'with-flex-container' ) && window.innerWidth >= 1200 ) {
            Panda.$body.addClass( 'sidebar-active' );
        }
        $( document ).ready( function () {
            if ( window.location.hash != '' ) {
                window.scrollTo( {
                    top: 0,
                    left: 0,
                } );
            }
        } );
    };

    // Initialize Method while document is interactive
    Panda.initLayout = function () {
        Panda.stickySidebar( '.sticky-sidebar' );
    }

    // Initialize Method after document has been loaded
    Panda.init = function () {
        Panda.appearAnimate( '.appear-animate' ); // Runs appear animations
        Panda.sidebar( 'sidebar' ); // Initialize left sidebar
        Panda.Menu.init(); // Initialize menus
        Panda.initScrollTopButton(); // Initialize scroll top button.
        Panda.hashScroll.init();
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
        Panda.refreshSidebar();
    }

    var Docs = {
        init: function () {
            var self = this;
            $( '.btn-search' ).click( function () {
                self.search( this.previousElementSibling.value );
            } );

            $( '.input-search' ).keydown( function ( e ) {
                e.keyCode === 13 && self.search( this.value );
            } );

            Docs.scroll();
        },
        scroll: function () {
            $( '.document-link' ).on( 'click', function ( e ) {
                e.preventDefault();
                var $this = $( this ),
                    $targetId = $this.attr( 'href' );
                $this.parents( '.sidebar-content' ).find( '.show' ).removeClass( 'show' );
                $this.parents( 'li' ).addClass( 'show' );
                $( 'html' ).animate( { scrollTop: $( $targetId ).offset().top - 30 }, 1000 );
                $( '.search-area' ).html( '' );
            } );
        },
        search: function ( query ) {
            var searchText = query.trim();
            $( '.search-area' ).html( '' );
            if ( searchText == '' ) {
                return;
            }
            if ( searchText.length < 3 ) {
                // do nothing
                return;
            }
            var results = [],
                finalResult = '',
                $templates,
                _templates = [],
                templateHtml = '<h2 class="title title-line pt-4 mb-0">Search Result</h2>',
                len;

            $templates = $( 'div[id*="template-"]' );
            len = $templates.length;

            for ( var i = 0; i < len; i++ ) {
                _templates[ i ] = {
                    text: $templates.eq( i ).html()
                }
            }
            // Perform search
            for ( var id in _templates ) {
                var count = 0,
                    result;
                result = _templates[ id ].text.replace( new RegExp( searchText, 'gi' ), function ( match, offset, string ) {
                    var i = 0;
                    for ( i = offset; i >= 0; --i ) {
                        if ( string[ i ] === '<' ) {
                            return match;
                        }
                        if ( string[ i ] === '>' ) {
                            break;
                        }
                    }
                    for ( i = offset; offset[ i ]; ++i ) {
                        if ( string[ i ] === '>' ) {
                            return match;
                        }
                        if ( string[ i ] === '<' ) {
                            break;
                        }
                    }

                    ++count;
                    return '<mark>' + match + '</mark>';
                } );

                if ( count > 0 ) {
                    results.push( {
                        id: id,
                        count: count,
                        text: '<div class="search-pane"><sup class="search-count">' + count + '</sup>' + result + '</div>'
                    } );
                }
            }

            // Process result
            results.sort( function ( a, b ) {
                return b.count - a.count;
            } );
            for ( var id in results ) {
                finalResult += results[ id ].text;
            }

            templateHtml += finalResult ? finalResult : '<h4 class="text-center search-pane">Nothing Found</h4>';

            $( '.search-area' ).html( templateHtml );
        }

    }

    Panda.docs = Docs;
    $( window ).on( 'panda_complete', function () {
        Panda.docs && Panda.docs.init();
    } );
} )();