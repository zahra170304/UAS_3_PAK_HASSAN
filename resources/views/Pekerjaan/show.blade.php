
<!doctype html>
<html lang="en">
  <head>
    <link href="images/polnest.png" rel="icon">
        <title>CDC &mdash; Politeknik Nest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">
    {{-- 
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> --}}
    

<div class="site-wrap">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div> <!-- .site-mobile-menu -->
  

  <!-- NAVBAR -->
 <x-navbar></x-navbar>

  <!-- HOME -->
  <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">{{ $kerja['job_title'] }}</h1>
          <div class="custom-breadcrumbs">
            <a href="#">Home</a> <span class="mx-2 slash">/</span>
            <a href="#">Job</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>{{ $kerja['job_title'] }}</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="site-section">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <div class="border p-2 d-inline-block mr-3 rounded">
              <img src="images/job_logo_5.jpg" alt="Image">
            </div>
            <div>
              <h2>Product Designer</h2>
              <div>
                <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{ $kerja->perusahaan->company_name }}</span>
                <span class="m-2"><span class="icon-room mr-2"></span>{{ $kerja['location'] }}</span>
                <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{ $kerja['job_type'] }}</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-6">
              <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
            </div>
            <div class="col-6">
              <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="mb-5">
            <figure class="mb-5"><img src="images/job_single_img_1.jpg" alt="Image" class="img-fluid rounded"></figure>
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
            <p>{{ $kerja['description'] }}</p>
          </div>
          <div class="mb-5">
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
            <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
            </ul>
          </div>

          <div class="mb-5">
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
            <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
            </ul>
          </div>

          <div class="mb-5">
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
            <ul class="list-unstyled m-0 p-0">
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
            </ul>
          </div>

          <div class="row mb-5">
            <div class="col-6">
              <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
            </div>
            <div class="col-6">
              <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
            </div>
          </div>

        </div>
        <div class="col-lg-4">
          <div class="bg-light p-3 border rounded mb-4">
            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
            <ul class="list-unstyled pl-3 mb-0">
              <li class="mb-2"><strong class="text-black">Published on:</strong> April 14, 2019</li>
              <li class="mb-2"><strong class="text-black">Vacancy:</strong> 20</li>
              <li class="mb-2"><strong class="text-black">Employment Status:</strong> Full-time</li>
              <li class="mb-2"><strong class="text-black">Experience:</strong> 2 to 3 year(s)</li>
              <li class="mb-2"><strong class="text-black">Job Location:</strong> New ork City</li>
              <li class="mb-2"><strong class="text-black">Salary:</strong> $60k - $100k</li>
              <li class="mb-2"><strong class="text-black">Gender:</strong> Any</li>
              <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28, 2019</li>
            </ul>
          </div>

          <div class="bg-light p-3 border rounded">
            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
            <div class="px-3">
              <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
              <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  

  </body>

    
    <x-footer></x-footer>
  </div>
  <body>
  

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>

     
  </body>
</html>
