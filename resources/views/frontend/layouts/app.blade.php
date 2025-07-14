<!DOCTYPE html>
<html lang="en-US">
   <head>
      @include('frontend.layouts.head')
   </head>
   <body class="home wp-singular page-template page-template-page-templates page-template-homepage page-template-page-templateshomepage-php page page-id-22 wp-theme-isrt tribe-no-js metaslider-plugin group-blog ">
      <div class="hfeed site" id="page">
      <!-- ******************* The Navbar Area ******************* -->
      @include('frontend.layouts.header')
      <!-- .wrapper-navbar end -->
      @yield("content")
      <div class="footer-top">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
               </div>
            </div>
         </div>
      </div>
      <!-- ******************* The Footer Area ******************* -->
      @include('frontend.layouts.footer')
   </body>
</html>
<!--
   Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/

   Page Caching using Disk: Enhanced
   Content Delivery Network via N/A
   Lazy Loading
   Minified using Disk
   Database Caching 15/347 queries in 0.366 seconds using Disk

   Served from: isrt.ac.bd @ 2025-07-09 10:07:14 by W3 Total Cache
   -->
