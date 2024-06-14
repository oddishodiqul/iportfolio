 <!-- ======= Header ======= -->
 <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('assets/img/shodiqul.png') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{ $personal->name }}</a></h1>
        <div class="social-links mt-3 text-center">
          @foreach ($social_media as $data)
            <a href="{{ $data->url }}" class="{{ $data->name}}"><i class="bx bxl-{{ $data->name }}"></i></a>
          @endforeach
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{ Request::path() === '/' ? '#hero' : "/#hero" }}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{ Request::path() === '/' ? '#about' : "/#about" }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{ Request::path() === '/' ? '#resume' : "/#resume" }}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="{{ Request::path() === '/' ? '#portfolio' : "/#portfolio" }}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="{{ Request::path() === '/' ? '#services' : "/#services" }}" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="{{ Request::path() === '/' ? '#contact' : "/#contact" }}" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->