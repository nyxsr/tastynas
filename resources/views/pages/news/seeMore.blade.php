@extends('index')
@section('main')
    <section class="our-banner">
        <div class="mid-title">
            <p class="title-our" style="padding: 3rem 4rem 3rem 4rem;">{{ ucfirst(trans($news->judul)) }}</p>
            <hr class="underline-divider" style="margin-top:-1rem; margin-bottom: 1rem">
            <p class="subtitle-our">Delipel - Tastynas</p>
        </div>
    </section>
    <nav class="breadcrumb-nav has-border">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="demo1.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>{{ Str::ucfirst($news->kategori) }}</li>
                <li>{{ Str::ucfirst($news->judul) }}</li>
            </ul>
        </div>
    </nav>
    <div class="page-content">
        <div class="container mb-10 pb-6">
            <div class="row">
                <div class="col-lg-9 pr-lg-6">
                    <div class="posts">
                        <article class="post post-single">
                            <figure class="post-media-more">
                                <a href="#">
                                    <img src="{{ asset('storage/'.$news->gambar) }}" alt="post" />
                                </a>
                            </figure>
                            <div class="post-details mt-6">
                                <div class="post-meta">
                                    Ditulis oleh
                                    <a href="#" class="ml-1 mr-1"
                                        rel="author">{{ $news->user->name }}</a>
                                    pada
                                    <span class="post-date ml-1"><a href="#">{{ $news->created_at }}</a></span>
                                    <span class="divider mr-2 ml-2"></span>
                                </div>
                                <h4 class="post-title" style="font-size:5rem !important; font-weight: 700">{{ $news->judul }}</h4>
                                <p>{!! $news->isi !!}</p>
                            </div>
                        </article>
                    </div>
                    <hr>
                    <!-- End Posts -->

                </div>
                <div class="related-posts pb-md-4 mt-10">
                    <h4 class="mb-6"><span>Related Posts</span></h4>
                    <div class="owl-carousel owl-theme owl-nav-top row cols-md-2 cols-1"
                        data-owl-options="{
                                    'nav': true,
                                    'dots': false,
                                    'margin': 30,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '768': {
                                            'items': 2
                                        }
                                    }
                                }">
                                @forelse ($related as $item)
                                <article class="post post-border post-classic post-classic-sm overlay-zoom">
                                    <figure class="post-media">
                                        <a href="#">
                                            <img src="{{ asset('storage/'.$item->gambar) }}" width="438" height="274"
                                                alt="post" />
                                        </a>
                                    </figure>
                                    <div class="post-details text-center">
                                        <div class="post-calendar">
                                            {{ $item->created_at }}
                                        </div>
                                        <h4 class="post-title"><a href="#">{{ $item->judul }}</a></h4>
                                        @php
                                            $string = strip_tags(html_entity_decode($item->isi));
                                        @endphp
                                        <p class="post-content">{{ Str::limit($string, 30, '...') }}
                                        </p>
                                        @php
                                            $kategori = Str::lower($item->kategori)
                                        @endphp
                                        <a href="{{ url('news/'.$kategori.'/' .$item->slug) }}" class="btn btn-outline btn-dark">Read more
                                        </a>
                                    </div>
                                </article>
                                @empty

                                @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
