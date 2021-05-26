<!doctype html>
<html>
<head>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="keywords">
  <title>Luigi Pacelli - Blog</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>
<body>

<div class="head" id="head">

    <div class="blog_social">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
    </div>
    <div class="container_head">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">
      LP
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav ml-auto">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="blog">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
      </div>
      </div>
      </div>
    
    </nav>
    <!-- NAVBAR -->
  </div>

<div class="container">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Blog</h1>
       
    @if($posts->isNotEmpty())
        @foreach($posts as $post)
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{ Voyager::image( $post->image ) }}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}" class="btn btn-primary animated"><span>Continua a leggere </span></a>
          </div>
          <div class="card-footer text-muted">
          Inserito il
          <?php 
                $datetime = new DateTime($post->created_at);
                $date = $datetime->format('d-m-Y');
                echo $date;
              ?>
          </div>
        </div>
        @endforeach
    @else
    <div class="card mb-4">
    <div class="card-body">
    <h2>Nessun articolo trovato</h2>
    </div>
    </div>
    <a role="button" href="{{  Request::path() }}" class="btn btn-secondary">Indietro</a>
    @endif

        <!-- Pagination -->
        {!! $posts->links('portfolio.pagination_custom') !!}


      </div>
      <!-- start sidebar -->
      <div class="col-md-4" id="sb-r">
    
        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
          <form action="{{ route('search') }}" method="GET">
            <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="Ricerca...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="submit">Vai!</button>
              </span>
            </div>
            </form>
          </div>
        </div>
        @if($cat->isNotEmpty())
     

     <!-- Categories Widget -->
     <div class="card my-4">
       <h5 class="card-header">Categorie</h5>
       <div class="card-body">
             <ul class="list-group list-group-flush">
               @foreach($cat as $c)
                 <?php echo "<li class='list-group-item'><a href=''>$c->name</a></li>" ?>
               @endforeach
             </ul>
       </div>
     </div>
   @endif

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>
        <!-- end sidebar -->

      </div>

    </div>
    <!-- /.row -->

  </div>

  

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

</body>
</html>