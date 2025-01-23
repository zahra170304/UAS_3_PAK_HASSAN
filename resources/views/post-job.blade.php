<!doctype html>
<html lang="en">
  <head>
    <link href="images/polnest.png" rel="icon">
    <title>CDC &mdash; Post A Job</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

<div class="site-wrap">

    <!-- NAVBAR -->
    <x-navbar></x-navbar>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            <div class="custom-breadcrumbs">
              <a href="/dashboard">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Post a Job</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <form class="p-4 p-md-5 border rounded" method="POST" action="{{ route('post-job.store') }}" enctype="multipart/form-data">
      @csrf
      <!-- Form fields -->
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="you@yourdomain.com" required>
      </div>
    
      <div class="form-group">
        <label for="job-title">Job Title</label>
        <input type="text" class="form-control" id="job-title" name="job_title" placeholder="Product Designer" required>
      </div>
    
      <div class="form-group">
  <label for="job-type">Job Type</label>
  <select class="form-control" id="job-type" name="job_type" required>
    <option value="Full Time">Full Time</option>
    <option value="Part Time">Part Time</option>
    <option value="Contract">Contract</option>
  </select>
</div>

      <div class="form-group">
        <label for="job-location">Location</label>
        <input type="text" class="form-control" id="job-location" name="location" placeholder="e.g. New York" required>
      </div>
    
      <div class="form-group">
        <label for="job-region">Job Region</label>
        <select class="form-control" id="job-region" name="region" required>
          <option value="Anywhere">Anywhere</option>
          <option value="San Francisco">San Francisco</option>
          <option value="New York">New York</option>
          <!-- Tambahkan opsi lainnya -->
        </select>
      </div>
    
      <div class="form-group">
        <label for="job-type">Job Type</label>
        <select class="form-control" id="job-type" name="job_type" required>
          <option value="Full Time">Full Time</option>
          <option value="Part Time">Part Time</option>
          <option value="Contract">Contract</option>
        </select>
      </div>
      
    
      <div class="form-group">
        <label for="job-description">Job Description</label>
        <textarea class="form-control" id="job-description" name="description" rows="5" required></textarea>
      </div>
    
      <div class="form-group">
        <label for="company-name">Company Name</label>
        <input type="text" class="form-control" id="company-name" name="company_name" required>
      </div>
    
      <div class="form-group">
        <label for="company-tagline">Tagline</label>
        <input type="text" class="form-control" id="company-tagline" name="company_tagline">
      </div>
    
      <!-- Tambahkan semua field lainnya seperti di HTML awal -->
      
      <div class="form-group">
        <label for="featured_image">Upload Featured Image</label>
        <input type="file" class="form-control-file" id="featured_image" name="featured_image">
      </div>
    
      <div class="form-group">
        <label for="logo">Upload Logo</label>
        <input type="file" class="form-control-file" id="logo" name="logo">
      </div>
    
      <button type="submit" class="btn btn-primary">Post Job</button>
    </form>
    

   <x-footer></x-footer>

</div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
