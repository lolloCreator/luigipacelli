<!doctype html>
<html>
<head>

<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Vendor CSS -->
    <link href="{{ asset('bootstrap/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    
</head>
<body>
<div class="bg"></div>
<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">

      <h1><a class="palla" href="{{ url('/') }}">Luigi Pacelli</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>Appassionato del<span class="codice" data-period="2000"
     data-rotate='[ "lo sviluppo", "la programmazione", "la tecnologia", " mondo mobile"]'></span></h2>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <!--<li><a href="#resume">Resume</a></li>-->
          <li><a href="#services">Servizi</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
          @if (Route::has('login'))
          <div class="separatore">|</div>
                    @auth
                    @if (Auth::user()->role_id == 1)
                    <li><a href="{{ url('/admin') }}">Admin</a></li>
                    @endif
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Accedi</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Registrati</a></li>
                        @endif
                    @endauth
            @endif
        </ul>
      </nav><!-- .nav-menu -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

   <!-- ======= About Section ======= -->
   <section id="about" class="about">

<!-- ======= About Me ======= -->
<div class="about-me container">

  <div class="section-title">
    <h2>About</h2>
    <p>Scopri di più su di me</p>
  </div>

  <div class="row">
    <div class="col-lg-4" data-aos="fade-right">
      <img src="images/img.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
      <h3>Developer &amp; Graphic Designer</h3>
      <p class="font-italic">
        Nel grande oceano dell'ordinario, assicurati che il tuo business online faccia la differenza.
      </p>
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><i class="icofont-rounded-right"></i> <strong>Compleanno:</strong> 19 Gennaio</li>
            <li><i class="icofont-rounded-right"></i> <strong>Sito web:</strong> www.luigipacelli.it</li>
            <li><i class="icofont-rounded-right"></i> <strong>Cellulare:</strong> +39 3664736205</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul>
            <li><i class="icofont-rounded-right"></i> <strong>Età:</strong> <?php echo date("Y") - 1998; ?></li>
            <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> luigi@luigipacelli.it</li>
            <li><i class="icofont-rounded-right"></i> <strong>Città:</strong> Capodrise, CE, Italy</li>
          </ul>
        </div>
      </div>
      <p>
        Mi chiamo Luigi, ho iniziato ad appassionarmi alla tecnologia e allo sviluppo quando ho comprato il mio primo computer (2015). Ho iniziato a creare giochi online, poi ho volto
        il mio interesse verso forme di sviluppo più complesse. Ad oggi la mia voglia di apprendere, di creare e di sviluppare è ancora più forte di prima.
      </p>
    </div>
  </div>

</div><!-- End About Me -->

 <!-- ======= Counts ======= -->
 <div class="counts container">

<div class="row">

  <div class="col-lg-3 col-md-6">
    <div class="count-box">
      <i class="icofont-simple-smile"></i>
      <span data-toggle="counter-up">37</span>
      <p>Clienti felici</p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
    <div class="count-box">
      <i class="icofont-document-folder"></i>
      <span data-toggle="counter-up">43</span>
      <p>Progetti</p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
    <div class="count-box">
      <i class="icofont-pause"></i>
      <span data-toggle="counter-up">0</span>
      <p>Giorni di pausa</p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
    <div class="count-box">
      <i class="icofont-coffee-cup"></i>
      <span data-toggle="counter-up">99</span>
      <p>Caffè</p>
    </div>
  </div>

</div>

</div><!-- End Counts -->

<!-- ======= Skills  ======= -->
<div class="skills container">

<div class="section-title">
  <h2>Skills</h2>
</div>

<div class="row skills-content">

  <div class="col-lg-6">

    <div class="progress">
      <span class="skill">HTML <i class="val">100%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

    <div class="progress">
      <span class="skill">JAVA <i class="val">93%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

    <div class="progress">
      <span class="skill">JavaScript <i class="val">68%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

  </div>

  <div class="col-lg-6">

    <div class="progress">
      <span class="skill">PHP <i class="val">77%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

    <div class="progress">
      <span class="skill">WordPress/CMS <i class="val">81%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

    <div class="progress">
      <span class="skill">Photoshop <i class="val">98%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

  </div>

</div>

</div><!-- End Skills -->

<!-- ======= Interests ======= -->
<div class="interests container">

<div class="section-title">
  <h2>Interessi</h2>
</div>

<div class="row">
  <div class="col-lg-3 col-md-4">
    <div class="icon-box">
      <i class="ri-shield-keyhole-line" style="color: #ffbb2c;"></i>
      <h3>Sicurezza</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
    <div class="icon-box">
      <i class="ri-brush-line" style="color: #5578ff;"></i>
      <h3>Design</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
    <div class="icon-box">
      <i class="ri-pantone-fill" style="color: #e80368;"></i>
      <h3>Minimalismo</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
    <div class="icon-box">
      <i class="ri-bug-line" style="color: #e361ff;"></i>
      <h3>Problem solving</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4">
    <div class="icon-box">
      <i class="ri-database-2-line" style="color: #47aeff;"></i>
      <h3>Database</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4">
    <div class="icon-box">
      <i class="icofont-washing-machine" style="color: #ffa76e;"></i>
      <h3>Pulizia codice</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4">
    <div class="icon-box">
      <i class="ri-question-answer-fill" style="color: #11dbcf;"></i>
      <h3>Supporto</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4">
    <div class="icon-box">
      <i class="ri-message-2-line" style="color: #4233ff;"></i>
      <h3>Commenti nel codice</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4">
    <div class="icon-box">
      <i class="ri-book-line" style="color: #b2904f;"></i>
      <h3>Studio</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4">
    <div class="icon-box">
      <i class="ri-github-line" style="color: #b20969;"></i>
      <h3>Github</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4">
    <div class="icon-box">
      <i class="ri-stack-overflow-line" style="color: #ff5828;"></i>
      <h3>Stack Overflow</h3>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 mt-4">
    <div class="icon-box">
      <i class="ri-window-line" style="color: #29cc61;"></i>
      <h3>Internet</h3>
    </div>
  </div>
</div>

</div><!-- End Interests -->

<!--
<-- ======= Testimonials ======= ->
<div class="testimonials container">

<div class="section-title">
  <h2>Testimonials</h2>
</div>

<div class="owl-carousel testimonials-carousel">

  <div class="testimonial-item">
    <p>
      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
    </p>
    <img src="images/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
    <h3>Saul Goodman</h3>
    <h4>Ceo &amp; Founder</h4>
  </div>

  <div class="testimonial-item">
    <p>
      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
    </p>
    <img src="images/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
    <h3>Sara Wilsson</h3>
    <h4>Designer</h4>
  </div>

  <div class="testimonial-item">
    <p>
      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
    </p>
    <img src="images/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
    <h3>Jena Karlis</h3>
    <h4>Store Owner</h4>
  </div>

  <div class="testimonial-item">
    <p>
      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
    </p>
    <img src="images/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
    <h3>Matt Brandon</h3>
    <h4>Freelancer</h4>
  </div>

  <div class="testimonial-item">
    <p>
      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
    </p>
    <img src="images/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
    <h3>John Larson</h3>
    <h4>Entrepreneur</h4>
  </div>

</div>

</div>< End Testimonials  -->

</section><!-- End About Section -->

<!-- ======= Resume Section ======= -->
<!--
<section id="resume" class="resume">
<div class="container">

<div class="section-title">
  <h2>Resume</h2>
  <p>Check My Resume</p>
</div>

<div class="row">
  <div class="col-lg-6">
    <h3 class="resume-title">Sumary</h3>
    <div class="resume-item pb-0">
      <h4>Alice Barkley</h4>
      <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
      <p>
      <ul>
        <li>Portland par 127,Orlando, FL</li>
        <li>(123) 456-7891</li>
        <li>alice.barkley@example.com</li>
      </ul>
      </p>
    </div>

    <h3 class="resume-title">Education</h3>
    <div class="resume-item">
      <h4>Master of Fine Arts &amp; Graphic Design</h4>
      <h5>2015 - 2016</h5>
      <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
      <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
    </div>
    <div class="resume-item">
      <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
      <h5>2010 - 2014</h5>
      <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
      <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
    </div>
  </div>
  <div class="col-lg-6">
    <h3 class="resume-title">Professional Experience</h3>
    <div class="resume-item">
      <h4>Senior graphic design specialist</h4>
      <h5>2019 - Present</h5>
      <p><em>Experion, New York, NY </em></p>
      <p>
      <ul>
        <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
        <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
        <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
        <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
      </ul>
      </p>
    </div>
    <div class="resume-item">
      <h4>Graphic design specialist</h4>
      <h5>2017 - 2018</h5>
      <p><em>Stepping Stone Advertising, New York, NY</em></p>
      <p>
      <ul>
        <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
        <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
        <li>Recommended and consulted with clients on the most appropriate graphic design</li>
        <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
      </ul>
      </p>
    </div>
  </div>
</div>

</div>
</section> -->
<!-- End Resume Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
<div class="container">

<div class="section-title">
  <h2>Servizi</h2>
  <p>I miei servizi</p>
</div>

<div class="row">
  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
    <div class="icon-box">
      <div class="icon"><i class='bx bx-pencil'></i></div>
      <h4><a href="servizi-blog">Blog</a></h4>
      <p>Piattaforma per la pubblicazione di articoli con WordPress.</p>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
    <div class="icon-box">
      <div class="icon"><i class="ri-slideshow-line"></i></div>
      <h4><a href="">Portfolio</a></h4>
      <p>Una raccolta mirata di informazioni che dimostrano le tue abilità & competenze.</p>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
    <div class="icon-box">
      <div class="icon"><i class="ri-android-line"></i></div>
      <h4><a href="">Android App</a></h4>
      <p>Porta il tuo business nelle mani dei clienti, con l'app per dispositivi mobili.</p>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
    <div class="icon-box">
      <div class="icon"><i class="ri-image-edit-line"></i></div>
      <h4><a href="">Grafica</a></h4>
      <p>Personalizzazioni per siti web, immagini, inviti ed altro..</p>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
    <div class="icon-box">
      <div class="icon"><i class='bx bx-vector'></i></div>
      <h4><a href="">Loghi</a></h4>
      <p>Creazioni di loghi in stile vettoriale</p>
    </div>
  </div>
 
  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
    <div class="icon-box">
      <div class="icon"><i class="ri-question-line"></i></div>
      <h4><a href="">Assistenza</a></h4>
      <p>Risoluzione BUG e modifiche su siti e app già realizzati, tra cui: Wordpress, PHP, Java, Html, CSS, SQL e API.<br></p>
    </div>
  </div>

</div>

</div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
<div class="container">

<div class="section-title">
  <h2>Portfolio</h2>
  <p>I miei lavori</p>
</div>








<div class="row">
  <div class="col-lg-12 d-flex justify-content-center">
    <ul id="portfolio-flters">
      <li data-filter="*" class="filter-active">All</li>

      @foreach($passed as $categoria)
      <li data-filter=".filter-{{$categoria->titolo }}">{{ $categoria->titolo }}</li>
      @endforeach
    </ul>
  </div>
</div>

<div class="row portfolio-container">
@foreach($passed as $categoria)
  @foreach($categoria->portfolios as $portfolis)
    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $categoria->titolo }}">
    <div class="portfolio-wrap">
      <img src="img/portfolio-1.jpg" class="img-fluid" alt="">
      <div class="portfolio-info">
        <h4> {{ $portfolis->titolo }}</h4>
        <p>{{ $categoria->titolo }}</p>
        <div class="portfolio-links">
          <a href="img/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="{{ $categoria->titolo }}"><i class="bx bx-plus"></i></a>
          <a href="auth" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endforeach  

</div>

</div>
</section><!-- End Portfolio Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
<div class="container">

<div class="section-title">
  <h2>Contact</h2>
  <p>Contact Me</p>
</div>

<div class="row mt-2">

  <div class="col-md-6 d-flex align-items-stretch">
    <div class="info-box">
      <i class="bx bx-map"></i>
      <h3>Indirizzo</h3>
      <p>Via F. Rao, Capodrise, Italy</p>
    </div>
  </div>

  <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
    <div class="info-box">
      <i class="bx bx-share-alt"></i>
      <h3>Profili social</h3>
      <div class="social-links">
        <a href="https://twitter.com/lolloCreator" class="twitter"><i class="ri-twitter-line"></i></a>
        <a href="https://www.facebook.com/lolloCreator/" class="facebook"><i class="ri-facebook-box-line"></i></a>
        <a href="https://www.instagram.com/louis_pacelli/" class="instagram"><i class="ri-instagram-line"></i></a>
        <a href="https://www.linkedin.com/in/luigi-pacelli-380197121/" class="linkedin"><i class="ri-linkedin-box-line"></i></a>
        <a href="https://github.com/lolloCreator" class="github"><i class="ri-github-line"></i></a>
      </div>
    </div>
  </div>

  <div class="col-md-6 mt-4 d-flex align-items-stretch">
    <div class="info-box">
      <i class="bx bx-envelope"></i>
      <h3>Email</h3>
      <p>luigi@luigipacelli.it</p>
    </div>
  </div>
  <div class="col-md-6 mt-4 d-flex align-items-stretch">
    <div class="info-box">
      <i class="bx bx-phone-call"></i>
      <h3>Chiamami</h3>
      <p>+39 3664736205</p>
    </div>
  </div>
</div>

<form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
  <div class="form-row">
    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
      <div class="validate"></div>
    </div>
    <div class="col-md-6 form-group">
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
      <div class="validate"></div>
    </div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
    <div class="validate"></div>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
    <div class="validate"></div>
  </div>
  <div class="mb-3">
    <div class="loading">Loading</div>
    <div class="error-message"></div>
    <div class="sent-message">Your message has been sent. Thank you!</div>
  </div>
  <div class="text-center"><button type="submit">Send Message</button></div>
</form>

</div>
</section><!-- End Contact Section -->

<div class="credits">
<!-- All the links in the footer should remain intact. -->
<!-- You can delete the links only if you purchased the pro version. -->
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->

Designed by <a href="https://bootstrapmade.com/">lolloCreator</a>



</div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}../vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('js/portfolio.js') }}"></script>
  <script src="{{ asset('vendor/typing/custom_typing.js') }}"></script>



</body>
</html>