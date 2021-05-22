<!doctype html>
<html>
<head>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Vendor CSS -->
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    
    
</head>
<body>

<div class="container">
<!-- Add font awesome icons -->
<div class="head">
<div class="blog_social">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
</div>
<nav class="navbar navbar-expand-lg navbar-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#">Features</a>
      <a class="nav-link" href="#">Pricing</a>
      <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>
</div>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col">

        <!-- Title -->
        <h1 class="mt-4">{{ $post->title }}</h1>

        <hr>
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
          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>