<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!-- NAVBAR -->
<header class="site-navbar mt-3">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="site-logo col-6"><a href="/index">Politeknik Nest</a></div>

        <nav class="mx-auto site-navigation">
          <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
            <li><a href="/dashboard">Home</a></li>
            <li><a href="/about">About</a></li>
            <li class="has-children">
              <a href="/job-listings">Job Listings</a>
              <ul class="dropdown">
                <li><a href="/job-single">Job Single</a></li>
                <li><a href="/post-job">Post a Job</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a href="/services">Pages</a>
              <ul class="dropdown">
                <li><a href="/services">Services</a></li>
                <li><a href="/service-single">Service Single</a></li>
                <li><a href="/testimonials">Testimonials</a></li>
                <li><a href="/faq">Frequently Ask Questions</a></li>
                <li><a href="/gallery">Gallery</a></li>
              </ul>
            </li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact">Contact</a></li>
            <li class="d-lg-none"><a href="/listkerja/create"><span class="mr-2">+</span> Post a Job</a></li>
            <li class="d-lg-none"><a href="/logout">Log out</a></li>
          </ul>
        </nav>
        
        <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
          <div class="ml-auto">
            <a href="/post-job" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
            <a href="/logout" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log out</a>
          </div>
          <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
        </div>

      </div>
    </div>
  </header>

</body>
</html>