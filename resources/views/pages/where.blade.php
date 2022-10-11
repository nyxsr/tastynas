@extends('index')
@section('main')
    <section class="our-banner">
        <div class="mid-title">
            <p class="title-our" style="font-size:4rem">Where to Buy ?</p>
            <hr class="underline-divider" style="margin-top:-1rem; margin-bottom: 1rem">
            <p class="subtitle-our">Delipel - Tastynas</p>
        </div>
    </section>
    <section class="maps-section">
        <h1 style="text-align: center; margin-top: 5rem; margin-bottom: -5rem">Anda Bisa Menemukan Kami Di</h1>
        <div id="map"></div>
        <p style="font-size: 3rem; text-align: center">Anda juga bisa mengunjungi gerai-gerai online kami di Marketplace
            populer</p>
        <div class="marketplace-icons">
            {{-- Tokopedia --}}
            <a href="https://www.tokopedia.com/delipelsubang" target="_blank">
                <img src="{{ asset('assets/images/tokopedia-logo.png') }}" alt="shopee-logo" class="tokopedia">
            </a>
            {{-- End Of Tokopedia --}}
            {{-- Shopee --}}
            <a href="https://shopee.co.id/delipel.subang"target="_blank">
                <img src="{{ asset('assets/images/shopee-logo.png') }}" alt="" class="shopee">
            </a>
            {{-- End of Shopee --}}
            <a href="https://gofood.link/u/r2AlN"target="_blank">
                <img src="{{ asset('assets/images/gofood-logo.png') }}" alt="" class="gofood">
            </a>
            <a href="https://grab.onelink.me/2695613898?pid=inappsharing&c=6-CZNCRXLDTXAFGA&is_retargeting=true&af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABMART%26sourceID%3DA4pcqCZkS4%26merchantIDs%3D6-CZNCRXLDTXAFGA&af_force_deeplink=true&af_web_dp=https%3A%2F%2Fwww.grab.com%2Fdownload"target="_blank">
                <img src="{{ asset('assets/images/grabfood-logo.png') }}" alt="" class="grabfood">
            </a>
        </div>
    </section>
@endsection
