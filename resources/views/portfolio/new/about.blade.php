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

    <main class="about">
        <div class="services">
                <div class="columns">
                    <div class="column">
                        <h1>Processo e filosofia</h1>
                        <ul class="process_list">
                            <li class="process_item"><i class="fas fa-check"></i>Qualcosa di buono</li>
                            <li class="process_item"><i class="fas fa-check"></i>Qualcosa di buono</li>
                            <li class="process_item"><i class="fas fa-check"></i>Qualcosa di buono</li>
                            <li class="process_item"><i class="fas fa-check"></i>Qualcosa di buono</li>
                            <li class="process_item"><i class="fas fa-check"></i>Qualcosa di buono</li>
                        </ul>
                    </div>
                    <div class="column">
                        <h2>Titolo più lungo per descrivere qualcosa</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quas fugit itaque reiciendis qui neque assumenda animi eum accusamus nisi labore, eaque nobis adipisci praesentium quisquam molestiae dicta voluptatibus unde. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit soluta explicabo voluptatibus hic reprehenderit eligendi ipsa, aliquam cumque voluptates magnam quis amet minima animi nesciunt nostrum placeat officia labore deleniti.</p>
                        <a href="#" role="button">BOTTONE</a>
                    </div>
                </div>
        </div>
        <div class="info">
            <div class="titles">
                <h2>Quick</h2>
                <h2>Support</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
            <div class="contacts">
                <div class="contact_row">
                    <i class="fas fa-envelope-open fa-lg"></i>
                    <h2>Contacts</h2>
                    <p>info@luigipacelli.it</p>
                    <p>lumenlabdev@gmail.com</p>
                </div>
                <div class="contact_row">
                    <i class="fas fa-heart fa-lg"></i>
                    <h2>Connect</h2>
                    <a href="#">Go to social page</a>
                </div>
                <div class="contact_row">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                    <h2>Country</h2>
                    <p>Italy</p>
                    <p>Caserta (CE)</p>
                </div>
            </div>
        </div>
    </main>

</section>

    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/9b95a72150.js" crossorigin="anonymous"></script>
</body>
</html>