<!doctype html>
<html>
<head>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Vendor CSS -->
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    
    
</head>
<body>

<div class="container">

<header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
      </div>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Blog
          <small>Archivio</small>
        </h1>
       
    @if($posts->isNotEmpty())
        @foreach($posts as $post)
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{ Voyager::image( $post->image ) }}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}" class="btn btn-primary">Continua a leggere →</a>
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

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
    
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
       <h5 class="card-header">Categories</h5>
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