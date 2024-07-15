<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
   <meta charset="utf-8">
   <title>Logbook - @yield('page-title')</title>

   <!-- mobile responsive meta -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
   <meta name="description" content="This is meta description">
   <meta name="author" content="Themefisher">
 
   <!-- theme meta -->
   <meta name="theme-name" content="logbook" />

   <!-- plugins -->
   <link rel="preload" href="assets/https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2" style="font-display: optional;">
   <link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="assets/https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen&#43;Sans&amp;display=swap" media="screen">

   <link rel="stylesheet" href="assets/plugins/themify-icons/themify-icons.css">
   <link rel="stylesheet" href="assets/plugins/slick/slick.css">

   <!-- Main Stylesheet -->
   <link rel="stylesheet" href="assets/css/style.css">
   {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

   <!--Favicon-->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
</head>

<body>
<!-- navigation -->
<header class="sticky-top bg-white border-bottom border-default">
   <div class="container">

      <nav class="navbar navbar-expand-lg navbar-white">
         <a class="navbar-brand" href="{{ route('home') }}">
            <img class="img-fluid" width="150px" src="assets/images/logo.png" alt="LogBook">
         </a>
         <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
         </button>

         <div class="collapse navbar-collapse text-center" id="navigation">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">
                     homepage <i class="ti-angle-down ml-1"></i>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="{{ route('index.full') }}">Homepage Full Width</a>
                     <a class="dropdown-item" href="{{ route('index.leftsidebar') }}">Homepage Full Width Left Sidebar</a>
                     <a class="dropdown-item" href="{{ route('index.rightsidebar') }}">Homepage Full Width Right Sidebar</a>
                     <a class="dropdown-item" href="{{ route('index.listStyle') }}">Homepage List Style</a>
                     <a class="dropdown-item" href="{{ route('index.listLeft') }}">Homepage List Width Left Sidebar</a>
                     <a class="dropdown-item" href="{{ route('index.listRight') }}">Homepage List Width Right Sidebar</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="{{ route('author') }}">Author</a>
                     <a class="dropdown-item" href="{{ route('postDetails1') }}">Post Details 1</a>
                     <a class="dropdown-item" href="{{ route('postDetails2') }}">Post Details 2</a>
                     <a class="dropdown-item" href="{{ route('postElement') }}">Post Elements</a>
                     <a class="dropdown-item" href="{{ route('policy') }}">Privacy Policy</a>
                     <a class="dropdown-item" href="{{ route('termsCondition') }}">Terms Conditions</a>
                  </div>
               </li>
            </ul>
            
            <select class="m-2 border-0" id="select-language">
               <option id="en" value="about/" selected>En</option>
               <option id="fr" value="fr/about/">Fr</option>
            </select>

            <!-- search -->
            <div class="search px-4">
               <button id="searchOpen" class="search-btn"><i class="ti-search"></i></button>
               <div class="search-wrapper">
                  <form action="javascript:void(0)" class="h-100">
                     <input class="search-box pl-4" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                  </form>
                  <button id="searchClose" class="search-close"><i class="ti-close text-dark"></i></button>
               </div>
            </div>

         </div>
      </nav>
   </div>
</header>
<!-- /navigation -->

  {{-- start main content --}}
    @yield('main-content')
  {{-- end main content --}}

   <footer class="section-sm pb-0 border-top border-default">
      <div class="container">
         <div class="row justify-content-between">
            <div class="col-md-3 mb-4">
               <a class="mb-4 d-block" href="{{ route('home') }}">
                  <img class="img-fluid" width="150px" src="assets/images/logo.png" alt="LogBook">
               </a>
               <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mb-4">
               <h6 class="mb-4">Quick Links</h6>
               <ul class="list-unstyled footer-list">
                  <li><a href="{{ route('about') }}">About</a></li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                  <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                  <li><a href="{{ route('termsCondition') }}">Terms Conditions</a></li>
               </ul>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mb-4">
               <h6 class="mb-4">Social Links</h6>
               <ul class="list-unstyled footer-list">
                  <li><a target = "_blank" href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F">facebook</a></li>
                  <li><a target = "_blank" href="https://x.com/login">twitter</a></li>
                  <li><a target = "_blank" href="https://www.linkedin.com/login">linkedin</a></li>
                  <li><a target = "_blank" href="https://github.com/">Github</a></li>
               </ul>
            </div>

            <div class="col-md-3 mb-4">
               <h6 class="mb-4">Subscribe Newsletter</h6>
               <form class="subscription" action="javascript:void(0)" method="post">
                  <div class="position-relative">
                     <i class="ti-email email-icon"></i>
                     <input type="email" class="form-control" placeholder="Your Email Address">
                  </div>
                  <button class="btn btn-primary btn-block rounded" type="submit">Subscribe now</button>
               </form>
            </div>
         </div>
         <div class="scroll-top">
            <a href="javascript:void(0);" id="scrollTop"><i class="ti-angle-up"></i></a>
         </div>
         <div class="text-center">
            <p class="content">&copy; 2024 - Design &amp; Develop By <a href="https://themefisher.com/" target="_blank">Abid Hussain</a></p>
         </div>
      </div>
   </footer>


   <!-- JS Plugins -->
   <script src="assets/plugins/jQuery/jquery.min.js"></script>
   <script src="assets/plugins/bootstrap/bootstrap.min.js" async></script>
   <script src="assets/plugins/slick/slick.min.js"></script>

   <!-- Main Script -->
   <script src="assets/js/script.js"></script>
</body>
</html>
