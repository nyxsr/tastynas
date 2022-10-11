@extends('index')
@section('main')
<section class="our-banner">
    <div class="mid-title">
        <p class="title-our">{{ ucfirst(trans($news_category)) }} News</p>
        <hr class="underline-divider" style="margin-top:-1rem; margin-bottom: 1rem">
        <p class="subtitle-our">Delipel - Tastynas</p>
    </div>
</section>
    <nav class="breadcrumb-nav has-border">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="demo1.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>{{ Str::ucfirst($news_category) }}</li>
            </ul>
        </div>
    </nav>
    @if ($news_category == 'tastynas')
    <div class="page-content">
        <div class="container mt-8">
            <div class="row posts cols-md-2">
                <article class="post post-border post-classic post-classic-sm overlay-zoom mb-8">
                    <figure class="post-media">
                        <a href="blog-single.html">
                            <img src="https://source.unsplash.com/905x500?news" alt="post" style="max-width: none;">
                        </a>
                    </figure>
                    <div class="post-details text-center">
                        <div class="post-calendar">
                            18 February 2021
                        </div>
                        <h4 class="post-title"><a href="blog-single.html">Liputan Tastynas</a></h4>
                        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, odit voluptates amet distinctio sunt obcaecati.
                        </p>
                        <a href="blog-single.html" class="btn btn-outline btn-dark">Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div>
            <ul class="pagination justify-content-center pt-10 mt-4 mb-10 pb-7">
                <li class="page-item disabled">
                    <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                        aria-disabled="true">
                        <i class="p-icon-angle-left"></i>
                    </a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item page-item-dots"></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link page-link-next" href="#" aria-label="Next">
                        <i class="p-icon-angle-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @else
    <div class="page-content">
        <div class="container mt-8">
            <div class="row posts cols-md-2">
                <article class="post post-border post-classic post-classic-sm overlay-zoom mb-8">
                    <figure class="post-media">
                        <a href="blog-single.html">
                            <img src="https://source.unsplash.com/905x500?indonesia" alt="post" style="max-width: none;">
                        </a>
                    </figure>
                    <div class="post-details text-center">
                        <div class="post-calendar">
                            18 February 2021
                        </div>
                        <h4 class="post-title"><a href="blog-single.html">Tentang Kabupaten Subang</a></h4>
                        <p class="post-content">{{ Str::limit('Subang merupakan sebuah Kabupaten yang terletak di Provinsi Jawa Barat. Kabupaten Subang berbatasan langsung dengan Laut Jawa di sebelah Utara, Kabupaten Indramayu di sebelah Timur, Kabupaten Sumedang di sebelah Tenggara, Kabupaten Bandung Barat di Selatan, serta Kabupaten Purwakarta dan Karawang di sebelah barat. Menurut sejarah, Subang didirikan pada tanggal 5 April 1948, yang sekaligus diperingati sebagai "Hari Jadi" kota tersebut.', 100, '...') }}
                        </p>
                        <a href="blog-single.html" class="btn btn-outline btn-dark">Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div>
            <ul class="pagination justify-content-center pt-10 mt-4 mb-10 pb-7">
                <li class="page-item disabled">
                    <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                        aria-disabled="true">
                        <i class="p-icon-angle-left"></i>
                    </a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item page-item-dots"></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link page-link-next" href="#" aria-label="Next">
                        <i class="p-icon-angle-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @endif
@endsection
