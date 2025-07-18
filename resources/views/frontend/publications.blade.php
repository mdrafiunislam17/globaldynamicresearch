@extends('frontend.layouts.app')
@section('title', 'Publications')
@section('content')
<div class="wrapper" id="page-wrapper">
   <div class="container" id="content" tabindex="-1">
      <div class="row">
         <!-- Do the left sidebar check -->
         <div class="col-md-12 content-area" id="primary">
            <main class="site-main" id="main">
                @foreach($publications as $publication) @endforeach
               <article class="post-174 page type-page status-publish hentry" id="post-174">
                  <header class="entry-header">
                     <h3 class="entry-title">{{$publication->title}}</h3>
                  </header>
                  <!-- .entry-header -->
                  <div class="entry-content">
                     <p>
                         {!! $publication->description !!}
                     </p>


                      <div class="text-center mt-4">

                          @if (!empty($publication->image) && file_exists(public_path('uploads/publication/' . $publication->image)))
                              <img
                                  src="{{ asset('uploads/publication/' . $publication->image) }}"
                                  alt="Workshop Flyer"
                                  class="img-fluid"
                                  width="400"
                              >
                          @endif


                      </div>

                  </div>
                  <!-- .entry-content -->
                  <footer class="entry-footer">
                  </footer>
                  <!-- .entry-footer -->
               </article>
               <!-- #post-## -->
            </main>
            <!-- #main -->
         </div>
         <!-- #primary -->
         <!-- Do the right sidebar check -->
         {{-- <div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
            <div class="sticky-top">
               <aside id="search-2" class="widget widget_search">
                  <form method="get" id="searchform" action="https://isrt.ac.bd/" role="search">
                     <label class="assistive-text" for="s">Search</label>
                     <div class="input-group">
                        <input class="field form-control" id="s" name="s" type="text" placeholder="Search …">
                        <span class="input-group-btn">
                        <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit" value="Search">
                        </span>
                     </div>
                  </form>
               </aside>
            </div>
         </div> --}}
         <!-- #secondary -->
      </div>
      <!-- .row -->
   </div>
   <!-- Container end -->
</div>
@endsection
