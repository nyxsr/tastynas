@extends('index')
@section('main')
    <section class="our-banner">
        <div class="mid-title">
            <p class="title-our">{{ ucfirst(trans($category)) }} News</p>
            <hr class="underline-divider" style="margin-top:-1rem; margin-bottom: 1rem">
            <p class="subtitle-our">Delipel - Tastynas</p>
        </div>
    </section>
    <nav class="breadcrumb-nav has-border">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="demo1.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>{{ Str::ucfirst($category) }}</li>
            </ul>
        </div>
    </nav>
    @if ($category == 'tastynas')
        <div class="page-content">
            <div class="container mt-8">
                <div class="row posts cols-md-2">
                    @forelse ($news as $new)
                        <article class="post post-border post-classic post-classic-sm overlay-zoom mb-8">
                            <figure class="post-media">
                                <a href="blog-single.html">
                                    <img src="{{ asset('storage/' . $new->gambar) }}" alt="post"
                                        style="max-width: none;">
                                </a>
                            </figure>
                            <div class="post-details text-center">
                                <div class="post-calendar">
                                    {{ $new->created_at }}
                                </div>
                                <h4 class="post-title"><a href="blog-single.html">{{ $new->judul }}</a></h4>
                                @php
                                    $string = strip_tags(html_entity_decode($new->isi));
                                @endphp
                                <p class="post-content">{{ Str::limit($string, 50, '...') }}
                                </p>
                                <a href="{{ url('news/tastynas/' . $new->slug) }}" class="btn btn-outline btn-dark">Read More
                                </a>
                            </div>
                        </article>
                    @empty
                        <h1 class="mb-5">Tidak ada Data</h1>
                    @endforelse
                </div>
                <div style="margin-bottom: 5rem">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    @else
        <div class="page-content">
            <div class="container mt-8">
                <div class="row posts cols-md-2">
                    @forelse ($news as $new)
                        <article class="post post-border post-classic post-classic-sm overlay-zoom mb-8">
                            <figure class="post-media">
                                <a href="blog-single.html">
                                    <img src="{{ asset('storage/' . $new->gambar) }}" alt="post"
                                        style="max-width: none;">
                                </a>
                            </figure>
                            <div class="post-details text-center">
                                <div class="post-calendar">
                                    {{ $new->created_at }}
                                </div>
                                <h4 class="post-title"><a href="blog-single.html">{{ $new->judul }}</a></h4>
                                @php
                                    $string = strip_tags(html_entity_decode($new->isi));
                                @endphp
                                <p class="post-content">{{ Str::limit($string, 50, '...') }}
                                </p>
                                <a href="{{ url('news/tastynas/' . $new->slug) }}" class="btn btn-outline btn-dark">Baca
                                    Selengkapnya
                                </a>
                            </div>
                        </article>
                    @empty
                        <div class="mb-5">
                            <h1>Tidak ada data</h1>
                        </div>
                    @endforelse
                </div>
                <div style="margin-bottom: 5rem">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    @endif
@endsection
