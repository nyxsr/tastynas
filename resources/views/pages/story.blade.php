@extends('index')
@section('main')
    <section class="our-banner">
        <div class="mid-title">
            <p class="title-our">Our Story</p>
            <hr class="underline-divider" style="margin-top:-1rem; margin-bottom: 1rem">
            <p class="subtitle-our">Delipel - Tastynas</p>
        </div>
    </section>
    <section class="banner-section">
        <div class="container">
            <div class="row gutter-no justify-content-between">
                <div class="col-md-7">
                    <h4 class="text-uppercase">Our Introduction</h4>
                    <h2>Delipel - Tastynas Story</h2>
                    <img class="faded" src="{{ asset('assets/images/all_karyawan.jpg') }}" width="735" height="413"
                        alt="farm image" style="background: #4A451B; margin-top: 5rem; margin-bottom: 5rem" / id="karyawan_image">
                    <span id="more" class="more">
                        <p class="mb-6 mt-2">Delipel - Tastynas merupakan pelopor kuliner olahan buah nanas khas kota Subang
                            di bidang bakery yang diproduksi setiap hari secara homemade. Berdiri tahun 2013 lalu, yang
                            dilatarbelakangi oleh kebingungan kami ketika memulai studi di kota Bogor sampai pernah menetap
                            di Batam dalam beberapa waktu. Kala itu oleh-oleh apa yang akan kami hendak bawa untuk
                            teman-teman & para tetangga. Karena pada tahun-tahun tersebut, produk yang hadir sebagai
                            oleh-oleh khas Subang masih bercita rasa tradisional & sangat klasik, sehingga kurang diterima
                            oleh mereka yang masih diumur belia. Kami merasa sepertinya perlu ada produk yang modern dengan
                            mengangkat potensi pangan yang ada di Subang, yaitu salah satunya buah nanas. Dari sinilah kami
                            mulai mencoba membuat cake nanas dengan konsep yang berbeda dengan cake nanas pada umumnya,
                            yaitu dengan mencampurkan nanas ke dalam adonan dan dipercantik dengan aneka topping alami dan
                            sehat. Dari sinilah kami mendapat respon yang sangat baik dari para konsumen. Dan kami tergerak
                            untuk terus berinovasi menghadirkan produk-produk baru yang lezat, sehat dengan harga yang
                            terjangkau.
                        </p>
                        <p class="mb-6 mt-2">Seiring waktu yang bertepatan dengan masuknya era pandemic, pada triwulan
                            pertama 2020 Delipel bertransisi berubah nama menjadi Tastynas. Awalnya kami membuat nastar
                            taiwan yang berbentuk tugu nanas ciri khas kota Subang. Filosofi nama Tastynas ini kami ambil
                            dari 2 kata Tasty dan Ananas, untuk Tasty kami adopsi dari bahasa Inggris yang berarti lezat dan
                            untuk Nas merupakan adaptasi dari bahasa Latin Ananas yang berarti buah nanas.
                        </p>
                        <p class="mb-6 mt-2">Dengan berjalannya waktu tujuan kami pun semakin mantap dalam menjalankan usaha
                            kuliner ini. Berkarya semampu kami sebagai putra daerah menjadi sesuatu yang sangat menyenangkan
                            bagi kami. Ternyata usaha kami ini selain turut mewarnai dunia kuliner Subang & nusantara dengan
                            memanfaatkan potensi lokal Subang. Kian waktu kami pun berharap dapat bermanfaat dengan membuka
                            lapangan kerja, membantu para petani nanas, serta turut mempopulerkan kota Subang melalui karya
                            kuliner kami yang bisa dijadikan camilan sehat bagi keluarga serta menjadi oleh-oleh khas dan
                            ter-favorite dari kota Subang.
                        </p>
                        <p class="mb-6 mt-2">Sesuai tujuannya untuk menjadikan produk Tastynas sebagai oleh-oleh khas
                            Subang. Konsep packaging produk pun kami design sekreatif & semenarik mungkin, memiliki kesan
                            elegan, serta sarat akan filosofi olahan nanas Subang yang modern. Tastynas juga saat ini telah
                            bekerjasama dengan salah satu pusat oleh-oleh ternama dan Supermarket yang ada di kota Subang.
                        </p>
                        <p class="mb-6 mt-2">Kami berharap agar kota Subang bisa terkenal tidak hanya dengan buah nanasnya
                            saja. Tetapi juga bisa terkenal dengan ciri khas kuliner dari olahan nanasnya yang inovatif &
                            berkonsep modern.
                        </p>
                    </span>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary btn-lg" onclick="seemore()" id="seemore">Baca Ceritanya!</button>
                    </div>
                </div>
                <div class="col-md-4 second-desc mt-2">
                    <img src="{{ asset('assets/images/OPEN DAILY.png') }}" width="420" height="421" alt="farm image"
                        class="w-100" style="background: #D7D8DC;" />
                    <p class="mt-4">Demi memberikan pelayanan yang terbaik kami buka pukul<div class="mb-7 font-weight-semi-bold" style="font-size: 2rem">07.00 sampai dengan pukul 17.00 WIB</div></p>
                    <a href="{{ url('where') }}" class="btn btn-underline btn-link">Lihat Selengkapnya<i
                            class="p-icon-arrow-long-right pl-1"></i></a>
                </div>
            </div>
        </div>
    </section>
    <script>
        function seemore() {
            var buttonMore = document.getElementById('seemore')
            var itemMore = document.getElementById('more')
            var karyawan_image = document.getElementById('karyawan_image')

            buttonMore.style.display ="none"
            itemMore.classList.remove('more')
            karyawan_image.classList.remove('faded')
        }
    </script>
@endsection
