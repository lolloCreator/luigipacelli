<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
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

    <main class="contatti">
        <div class="form_wrapper">
            <div class="row">
                <div class="column single">
                    <div class="form_left">
                        <h1>Write us</h1>
                        <div class="form_row"> 
                            <label for="name">Name</label>
                            <input id="name" type="text" value="" name="name">
                        </div>
                        <div class="form_row"> 
                            <label for="name">E-mail</label>
                            <input id="email" type="email" value="" name="email">
                        </div>
                        <div class="form_row"> 
                            <p for="name">Verification</p>
                            <div class="robot_cb">
                            <input type="checkbox" id="scales" name="scales" checked>
                            <label for="scales">I am not a robot</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column double">
                    <div class="form_right">
                    <label for="name">Message</label>
                        <textarea class="message" id="message" type="text" name="name">Write message here...</textarea>
                    </div>
                    <button type="submit" class="contact_btn_submit" form="nameform" value="Submit">SEND MESSAGE</button>
                </div>
            </div>
        </div>
    </main>

    </section>

    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>