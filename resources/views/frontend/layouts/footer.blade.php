{{-- footer --}}
<div class="wrapper" id="wrapper-footer">
   <div class="container">
      <div class="row">
         <div class="widget-area col-md-4 col-sm-6">
            <div id="custom_html-6" class="widget_text widget-container widget_custom_html">
               <h3 class="widget-title">Mailing Address</h3>
               <div class="textwidget custom-html-widget">
                  <div class="media home">
                     {{-- <img src="" data-src="https://www.isrt.ac.bd/wp-content/uploads/2017/06/du-inverse.png"
                     class="d-flex align-self-start mr-3 lazy" alt="du"> --}}
                     <div class="media-body">
                        <p>Director, <br> Institute of Statistical Research<br> and Training (ISRT)<br> University of Dhaka<br> Dhaka 1000, Bangladesh
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- .first .widget-area -->
         <div class="widget-area col-md-3 col-sm-6">
            <div id="custom_html-3" class="widget_text widget-container widget_custom_html">
               <h3 class="widget-title">Contact</h3>
               <div class="textwidget custom-html-widget">p: (88) 02-9662950-1234<br> f: (88) 02-9662950-1234<br>
                  <a href="#">Contact Us</a><br>
                  <a href="#" data-toggle="modal" data-target=".map">View Map</a>
               </div>
            </div>
         </div>
         <!-- .second .widget-area -->
         <div class="widget-area col-md-2 col-sm-6">
            <div id="nav_menu-3" class="widget-container widget_nav_menu">
               <h3 class="widget-title">Links</h3>
               <div class="menu-footer-container">
                  <ul id="menu-footer" class="menu">
                     <li id="menu-item-223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-223"><a href="#">Terms</a></li>
                     <li id="menu-item-224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-224"><a href="#">Contact</a></li>
                     {{-- <li id="menu-item-225" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-225"><a href="#">Webmail</a></li> --}}
                  </ul>
               </div>
            </div>
         </div>
         <!-- .third .widget-area -->
         <div class="widget-area col-md-3 col-sm-6">
            <div id="text-3" class="widget-container widget_text">
               <h3 class="widget-title">Follow us</h3>
               <div class="textwidget">
                  <p><a href="#">
                    <img class="lazy" decoding="async" src="#"
                    data-src="https://www.isrt.ac.bd/wp-content/uploads/2019/04/fb-150x150.png" alt="" width="32" height="32" /></a></p>
               </div>
            </div>
         </div>
         <!-- .fourth .widget-area -->
      </div>
   </div>
   <!-- #footer -->
   <div class="copyright-info">
      <div class="container">
         <div class="row">
            <div class="col-sm-10">Copyright © 2025 | Rafiun</div>
            <!-- <div class="col-sm-2" align="center"><a href="https://nurulamin.github.io/" class="developer-info float-md-right"  data-toggle="tooltip"  data-placement="left" title="Design and Developed by: nurul amin russel" target="_blank"><img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/themes/isrt/img/nar.svg" alt="design and developed by nurul amin russel"/></a></div> -->
         </div>
      </div>
   </div>
</div>
@stack("scripts")
<script>
   jQuery(document).ready(function($) {
       $('[data-toggle="tooltip"]').tooltip();
   });
</script>
<!-- map modal -->
<div class="modal fade map" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.522181036614!2d90.39706030086037!3d23.728751494555347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e8cb2992fb%3A0x30b526f730adb7aa!2sInstitute+of+Statistical+Research+%26+Training!5e0!3m2!1sen!2s!4v1496950296948"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
   </div>
</div>


<link rel="stylesheet" href="{{asset('assets/css/f110f.css')}}" media="all" />

<script src="{{asset('assets/js/8e515.js')}}"></script>
<script type="text/javascript" id="metaslider-responsive-slider-js-after">
   /* <![CDATA[ */
   var metaslider_227 = function($) {
       $('#metaslider_227').responsiveSlides({
           timeout: 3000,
           pager: false,
           nav: true,
           pause: true,
           speed: 600,
           prevText: "&lt;",
           nextText: "&gt;",
           auto: true
       });
       $(document).trigger('metaslider/initialized', '#metaslider_227');
   };
   var timer_metaslider_227 = function() {
       var slider = !window.jQuery ? window.setTimeout(timer_metaslider_227, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_227, 1) : metaslider_227(window.jQuery);
   };
   timer_metaslider_227();
   /* ]]> */
</script>
<script type="text/javascript" id="metaslider-script-js-extra">
   /* <![CDATA[ */
   var wpData = {
       "baseUrl": "https:\/\/isrt.ac.bd"
   };
   /* ]]> */
</script>
<script defer src="{{asset('assets/js/dd0ff.js')}}"></script>
<script src="{{asset('assets/js/456a0.js')}}"></script>
<script>
   window.w3tc_lazyload = 1, window.lazyLoadOptions = {
       elements_selector: ".lazy",
       callback_loaded: function(t) {
           var e;
           try {
               e = new CustomEvent("w3tc_lazyload_loaded", {
                   detail: {
                       e: t
                   }
               })
           } catch (a) {
               (e = document.createEvent("CustomEvent")).initCustomEvent("w3tc_lazyload_loaded", !1, !1, {
                   e: t
               })
           }
           window.dispatchEvent(e)
       }
   }
</script>
<script async src="{{asset('assets/js/1615d.js')}}"></script>
