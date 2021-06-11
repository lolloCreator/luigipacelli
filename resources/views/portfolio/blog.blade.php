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
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    
    
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
            <a class="nav-link active" href="blog">Home <span class="sr-only">(current)</span></a>
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

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">@lang('blog.titolo')</h1>
       
    @if($posts->isNotEmpty())
        @foreach($posts as $post)
        <!-- Blog Post -->
        <div class="card mb-4">
          <a href="/post/{{ $post->slug }}"><img class="card-img-top" src="{{ Voyager::image( $post->image ) }}" alt="Card image cap"></a>
          <div class="card-body">
            <a href="/post/{{ $post->slug }}"><h2 class="card-title">{{ $post->title }}</h2></a>
            <p class="card-text">{{ $post->excerpt }}</p>
            <div class="btn_read">
            <a href="/post/{{ $post->slug }}" class="btn btn-info animated"><span class="read_more">@lang('blog.leggi') </span></a>
          </div>
        </div>

          <div class="card-footer text-muted">
          @lang('blog.inserito')
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
    <h2>@lang('blog.nessun_articolo')</h2>
    </div>
    </div>
    <a role="button" href="/blog" class="btn btn-secondary">@lang('blog.indietro')</a>
    @endif

        <!-- Pagination -->
        {!! $posts->links('portfolio.pagination_custom') !!}


      </div>
      <!-- start sidebar -->
      <div class="col-md-4" id="sb-r">
    
        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">@lang('blog.r_qualcosa')</h5>
          <div class="card-body">
          <form action="{{ route('search') }}" method="GET">
            <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="@lang('blog.ricerca')">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="submit">@lang('blog.vai')</button>
              </span>
            </div>
            </form>
          </div>
        </div>
        @if($cat->isNotEmpty())
     

     <!-- Categories Widget -->
     <div class="card my-4">
       <h5 class="card-header">@lang('blog.categorie')</h5>
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
        <!--
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>
        -->
        <!-- end sidebar -->

      </div>

    </div>
    <!-- /.row -->

  </div>

<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">@lang('blog.a_proposito')</h2>
      <ul class="ft_list">
        <li><a href="/">@lang('messages.servizi')</a></li>
        <li><a href="/">@lang('messages.portfolio')</a></li>
        <li><a href="/">@lang('messages.about')</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">@lang('blog.risorse')</h2>
      <ul class="ft_list">
        <li><a href="/blog">@lang('blog.titolo')</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">@lang('blog.contatti')</h2>
      <ul class="ft_list">
        <li><a href="/">@lang('messages.contatti')</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">@lang('blog.aggiornato')</h2>
      <p>@lang('blog.iscriviti')</p>
      <form class="ft_form">
        <input type="email" name="email" placeholder="@lang('blog.ins_email')">
        <input type="submit" value="@lang('blog.isc_btn')">
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
      <li><a href="#">@lang('blog.termini')</a></li>
      <li><a href="#">@lang('blog.privacy')</a></li>
      <li>&copy; {{ now()->year }} Copyright <a href="https://luigipacelli.it/">lolloCreator</a></li>
    </ul>
  </section>
</footer>

  

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

</body>
</html>