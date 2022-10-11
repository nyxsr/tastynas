@extends('index')
@section('main')
<section class="our-banner">
    <div class="mid-title">
        <p class="title-our" style="font-size:4rem">Contact Us</p>
        <hr class="underline-divider" style="margin-top:-1rem; margin-bottom: 1rem">
        <p class="subtitle-our">Delipel - Tastynas</p>
    </div>
</section>
<section class="contact-section">
    <div class="form-contact container">
        <p class="title-contact">Kirimi Kami Pesan</p>
        <form action="{{ url('contact') }}" method="post">
            @csrf
            <input type="text" name="nama" id="nama" class="input-nama" placeholder="Silahkan isi nama anda">
            <div class="wrapper-checkbox">
                <input type="checkbox" name="checkbox" id="checkbox"><span>Biarkan saya Anonim</span>
            </div>
            <div class="button">
                <button type="submit" style="cursor: pointer;"><i class="fa-brands fa-whatsapp" aria-hidden="true" style="margin-right: 1rem"></i>Kirim Pesan</button>
            </div>
        </form>
    </div>
</section>
@endsection
