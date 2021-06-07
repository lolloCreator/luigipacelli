<!doctype html>
<html>
<head>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="keywords">
  <title>LP - {{ $post->title }}</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">


    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>
<body>

<div class="head" id="head">
  <div class="blog_social">
      <div class="social_bar">
        <a href="https://www.tiktok.com/@lumenlabdev" target="_blank"><img src="{{ asset('fonts/icon/tiktok.svg') }}"></img></a>
        <a href="https://www.instagram.com/lumenlabdev/" target="_blank"><img src="{{ asset('fonts/icon/instagram.svg') }}"></img></a>
        <a href="https://www.facebook.com/lolloCreator/" target="_blank"><img src="{{ asset('fonts/icon/facebook.svg') }}"></img></a>
        <a href="https://www.linkedin.com/in/luigi-pacelli-380197121/" target="_blank"><img src="{{ asset('fonts/icon/linkedin.svg') }}"></img></a>
        <a href="https://github.com/lolloCreator" target="_blank"><img src="{{ asset('fonts/icon/github.svg') }}"></img></a>
        <a href="mailto:luigi@luigipacelli.it" target="_blank"><img src="{{ asset('fonts/icon/email.svg') }}"></img></a>
      </div>
    </div>
    <div class="container_head">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="/">
      LP
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
          <div class="navbar-nav">
            <a class="nav-link" href="../blog">Home</a>
          </div>
        </ul>
      </div>
      </div>
      </div>
    
    </nav>
    <!-- NAVBAR -->
  </div>

<div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col">

        <!-- Title -->
        <h1 class="mt-4">{{ $post->title }}</h1>

        <?php $datetime = new DateTime($post->updated_at);
                $date = $datetime->format('Y-m-d');
                $time = $datetime->format('H:i');
                ?>
        <!-- Date/Time -->
        <p>Aggiornato il {{$date}} alle {{$time}}</p>

        <hr>

        <!-- Post Content -->
        <div class="body">
        {!! $post->body !!}
        </div>
        <hr>

      </div>
    


    </div>
    <!-- /.row -->

  </div>

  <footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">A proposito di</h2>
      <ul class="ft_list">
        <li><a href="#">Servizi</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Informazioni</a></li>
        <li><a href="#">Lavori</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Risorse</h2>
      <ul class="ft_list">
        <li><a href="#">Documenti</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Guide</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Contatti</h2>
      <ul class="ft_list">
        <li><a href="#">Aiuto</a></li>
        <li><a href="#">Messaggio</a></li>
        <li><a href="#">Contattami</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Resta Aggiornato</h2>
      <p>Iscriviti alla newsletter per ricevere le nuove news.</p>
      <form class="ft_form">
        <input type="email" name="email" placeholder="Inserisci una email">
        <input type="submit" value="Iscriviti">
      </form>
    </div>
  </section>

  <!-- Footer social -->
  <section class="ft-social">
    <ul class="ft-social-list">
      <li><a href="https://www.tiktok.com/@lumenlabdev" target="_blank"><img src="{{ asset('fonts/icon/tiktok.svg') }}"></img></a></li>
      <li><a href="https://www.instagram.com/lumenlabdev/" target="_blank"><img src="{{ asset('fonts/icon/instagram.svg') }}"></img></a></li>
      <li><a href="https://www.facebook.com/lolloCreator/"><img src="{{ asset('fonts/icon/facebook.svg') }}"></img></a></li>
      <li><a href="https://www.linkedin.com/in/luigi-pacelli-380197121/" target="_blank"><img src="{{ asset('fonts/icon/linkedin.svg') }}"></img></a></li>
      <li><a href="https://github.com/lolloCreator" target="_blank"><img src="{{ asset('fonts/icon/github.svg') }}"></img></a></li>
      <li><a href="mailto:luigi@luigipacelli.it" target="_blank"><img src="{{ asset('fonts/icon/email.svg') }}"></img></a></li>
    </ul>
  </section>

  <!-- Footer legal -->
  <section class="ft-legal">
    <ul class="ft-legal-list">
      <li><a href="#">Termini &amp; Condizioni</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li>&copy; {{ now()->year }} Copyright <a href="https://luigipacelli.it/">lolloCreator</a></li>
    </ul>
  </section>
</footer>
          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
</body>
</html>