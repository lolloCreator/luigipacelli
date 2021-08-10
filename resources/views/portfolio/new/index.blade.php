<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luigi Pacelli</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section>
        <header class="header">
        <nav class="navbar">
        <a class="nav_logo" href="/"><img src="{{ asset('img/svg/logo.svg') }}" alt="logo"></a>
            <ul class="nav_menu">
                <li class="nav_item"><a class="nav_link" href="{{ url('about') }}">Chi siamo</a></li>
                <li class="nav_item"><a class="nav_link" href="{{ url('contact') }}">Contatti</a></li>
                <li class="nav_item"><a class="nav_link" href="">Tutorial</a></li>
                <li class="nav_item"><a class="nav_link" href="">Blog</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
        </header>
        <main class="index">
            <div class="content">
                <div class="main_button">
                <p class="top">FOLLOW</p>
                <p class="bottom">your dream</p>
                <a class="scopri" role="button">Scopri i nostri tutorial</a>
            </div>
                
            </div>
        </main>
        <footer>
            <ul class="collegamenti">
                <li class="foo_item"><a href="">Termini e Condizioni</a></li>
                <li class="foo_item"><a href="">Privacy Policy</a></li>
                <li class="foo_item"><a href="">Contatti</a></li>
            </ul>
            <ul class="social">
                <li class="foo_item text"><a href="">Seguici su</a></li>
                <li class="foo_item"><a href="https://www.tiktok.com/@lumenlabdev" target="_blank"><img src="{{ asset('fonts/icon/tiktok.svg') }}"></img></a></li>
                <li class="foo_item"><a href="https://www.instagram.com/lumenlabdev/" target="_blank"><img src="{{ asset('fonts/icon/instagram.svg') }}"></img></a></li>
                <li class="foo_item"><a href="https://www.facebook.com/lolloCreator/" target="_blank"><img src="{{ asset('fonts/icon/facebook.svg') }}"></img></a></li>
                <li class="foo_item"><a href="https://www.linkedin.com/in/luigi-pacelli-380197121/" target="_blank"><img src="{{ asset('fonts/icon/linkedin.svg') }}"></img></a></li>
            </ul>
        </footer>
    </section> 

    <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>