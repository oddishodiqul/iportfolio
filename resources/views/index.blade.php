<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="Shodiqul Amien adalah seorang profesional web and mobile developer dengan berbagai tech stack yang dikuasai dan memiliki pengalaman lebih dari 5 tahun" name="description">
  <meta content="Shodiqul Amien, Web Developer, Mobile Developer, IT Solutions, IT Consultant, Project Manager, Product Manager, DevOps, Artificial Intelligence, Machine Learning" name="keywords">

  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  @extends('layouts.header')

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{ $personal->name }}</h1>
      <p>I'm <span class="typed" data-typed-items="Web Developer, Freelancer, Mobile Developer, Digital Marketing"></span></p>
    </div>
  </section>
  
  <main id="main">
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>About</h2>
          <p>{{ $personal->descriptions }}</p>
        </div>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('assets/img/shodiqul.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{ $personal->job_title }}</h3>
            <p class="fst-italic">
              {{ $personal->motivation }}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ date('d F Y', strtotime($personal->birth_date)) }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a href="{{ $personal->website }}">{{ $personal->website }}</a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $personal->contact }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $personal->city }}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ \Carbon\Carbon::parse($personal->birth_date)->diff(\Carbon\Carbon::now())->format('%y years'); }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $personal->degree }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $personal->email }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>{{ $personal->biography }}</p>
          </div>
        </div>
      </div>
    </section>
    
    <section id="facts" class="facts">
      <div class="container">
        <div class="section-title">
          <h2>Facts</h2>
          <p></p>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $personal->happy_client }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $personal->project }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ date('Y') - 2018 }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Years Experience</strong></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="skills" class="skills section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Skills</h2>
          <p></p>
        </div>
        <div class="row skills-content">
          @foreach ($skills as $skill)
            <div class="col-lg-6" data-aos="fade-up">
                <div class="progress">
                  <span class="skill">{{ $skill->title }} <i class="val">{{ $skill->percentage }}%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    
    <section id="resume" class="resume">
      <div class="container">
        <div class="section-title">
          <h2>Resume</h2>
          <p></p>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>{{ $personal->name }}</h4>
              <p><em>{{ $personal->motivation }}</em></p>
              <ul>
                <li>{{ $personal->city }}</li>
                <li>{{ $personal->contact }}</li>
                <li>{{ $personal->email }}</li>
              </ul>
            </div>
            <h3 class="resume-title">Education</h3>
            @foreach ($educations as $education)
              <div class="resume-item">
                <h4>{{ $education->title }}</h4>
                <h5>{{ $education->period }}</h5>
                <p><em>{{ $education->place }}</em></p>
                <p>{{ $education->descriptions }}</p>
              </div>
            @endforeach
            <h3 class="resume-title">Certification</h3>
            @foreach ($certificates as $certificate)
              <div class="resume-item">
                <h4>{{ $certificate->title }}</h4>
                <h5>{{ $certificate->period }}</h5>
                <p><em>{{ $certificate->place }}</em></p>
              </div>
            @endforeach
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            @foreach ($works as $work)
              <div class="resume-item">
                <h4>{{ $work->title }}</h4>
                <h5>{{ date('F Y', strtotime($work->join_date)) }} - {{ $work->end_date == '1900-01-01' ? 'Present' : date('F Y', strtotime($work->end_date)) }}</h5>
                <p><em>{{ $work->location }}</em></p>
                <ul>{!! $work->descriptions !!}</ul>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Portfolio</h2>
          <p></p>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          @foreach ($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->categories == 'Web Apps' ? 'filter-app' : 'filter-web' }} border">
              <div class="portfolio-wrap">
                <img src="{{ asset('assets/img/portfolio/'.$portfolio->photos) }}" class="img-fluid" alt="" style="height:200px">
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/'.$portfolio->photos) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $portfolio->title .' - '. $portfolio->ownership }}"><i class="bx bx-zoom-in"></i></a>
                  <a href="{{ route('portfolio', $portfolio->slug)}}" title="More Details"><i class="bx bx-windows"></i></a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Services</h2>
          <p></p>
        </div>
        <div class="row">
          @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-{{ $service->icon }}"></i></div>
              <h4 class="title"><a href="">{{ $service->title }}</a></h4>
              <p class="description">{{ $service->descriptions }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    
    <section id="testimonials" class="testimonials section-bg d-none">
      <div class="container">
        <div class="section-title">
          <h2>Testimonials</h2>
          <p></p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>
        <div class="row" data-aos="fade-in">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $personal->city }}</p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $personal->email }}</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $personal->contact }}</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8931427171697!2d106.79044105839!3d-6.277777471497836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1bfb1aa51e1%3A0x1fa63b52f81998c!2sJl.%20Poncol%20No.56%205%2C%20RT.5%2FRW.7%2C%20Gandaria%20Sel.%2C%20Kec.%20Cilandak%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012420!5e0!3m2!1sid!2sid!4v1718122039419!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  
 @extends('layouts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>