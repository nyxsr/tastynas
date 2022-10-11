<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oops!!</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap');
    body{
        background-color: #fefdff;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Lato';
    }
    section{
        height: 80vh;
        display: grid;
        place-items: center;
        align-items: center;
    }
    .notfound{
        display: grid;
        place-items: center;
        align-items: center;
        width: 50vw;
        height: 60vh;
        grid-template-rows: 3fr 1fr;
    }
    .notfound > img{
        margin-top: 10rem
    }
    .notfound > p{
        font-size: 2rem;
        text-align: center;
    }
    .notfound > p > a{
        color: #fabf01;
    }
    footer > p{
        text-align: center;
    }
    @media screen and (max-width:767px){
        .notfound{
            width: 100vw;
            grid-template-rows: 1fr 1fr;
        }
        .notfound > img{
            margin-top: 0;
        }
        .notfound > p{
            font-size: 1.5rem;
            padding: 0 3rem 0 3rem;
        }
    }
</style>
<body>
    <section>
        <div class="notfound">
            <img src="{{ asset('assets/images/404.png') }}" alt="notfound-picture" style="width: 20rem">
            <p>Halaman yang anda maksud tidak ditemukan, silahkan ambil nanas ini dan pulang ke <a href="{{ url('/') }}">Home</a></p>
        </div>
    </section>
    <footer>
        <p>Delipel - Tastynas © 2022. All Rights Reserved</p>
    </footer>
</body>
</html>
