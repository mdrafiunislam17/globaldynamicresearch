@extends('frontend.layouts.app')

@section('title', 'Seminar')

@section('content')
<div id="content" class="site-content">

   {{-- 📣 Top Notification --}}
   {{-- <section class="py-4 bg-primary text-white text-center">
      <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
         <div class="mb-2 mb-md-0">
            <strong>JSR Vol 58 No.2 (2024)</strong> has been published. Submit your next article now!
         </div>
         <a href="https://jsr.isrt.ac.bd/submit-articles/" class="btn btn-light text-primary fw-bold">
            Submit Article
         </a>
      </div>
   </section> --}}

   {{-- 📰 Main Content --}}
   <div class="container py-5">
      <div class="row g-5">

         {{-- 📄 Left Column: Articles --}}
         <div class="col-lg-8">

            {{-- 🔹 About JSR --}}
            <article class="p-4 border rounded bg-white shadow-sm mb-4">
               <header class="mb-3">
                  <h2 class="h4">
                     <a href="#" class="text-dark text-decoration-none">
                        📘 Journal of Statistical Research (JSR)
                     </a>
                  </h2>
                  <div class="text-muted small">
                     <i class="fa fa-calendar-alt me-1"></i>
                     <time datetime="2016-09-05">Sep 5, 2016</time> |
                     <i class="fa fa-user me-1"></i>
                     <a href="#" class="text-muted">Co-Editor</a>
                  </div>
               </header>
               <p>
                  JSR is the official journal of ISRT, publishing since 1970. It aims to disseminate statistical knowledge globally. Each paper is rigorously reviewed, and the journal is published biannually (June & December).
               </p>
               <p>
                  <strong>Indexed In:</strong>
                  <a href="#" target="_blank">Scopus</a>,
                  <a href="#" target="_blank">SJR</a>,
                  <a href="#" target="_blank">Crossref</a>,
                  <a href="#" target="_blank">BanglaJol</a>
               </p>
            </article>

            {{-- 🔹 Latest Issue --}}
            <article class="p-4 border rounded bg-white shadow-sm">
               <header class="mb-3">
                  <h2 class="h4">
                     <a href="#" class="text-dark text-decoration-none">
                        📰 JSR Vol 58 Number 2 (2024)
                     </a>
                  </h2>
                  <div class="text-muted small">
                     <i class="fa fa-calendar-alt me-1"></i>
                     <time datetime="2025-03-25">Mar 25, 2025</time> |
                     <i class="fa fa-user me-1"></i>
                     <a href="#" class="text-muted">Publisher</a>
                  </div>
               </header>
               <p>
                  Browse the full list of articles
                  <a href="#" target="_blank">here</a>.
               </p>
            </article>

            {{-- 🔽 Pagination --}}
            <nav class="mt-5 d-flex justify-content-between align-items-center">
               <div>
                  <span class="btn btn-outline-secondary disabled">1</span>
                  <a class="btn btn-outline-primary" href="#">2</a>
                  <span class="px-2">…</span>
                  <a class="btn btn-outline-primary" href="#">36</a>
               </div>
               <a class="btn btn-primary" href="#">
                  Older Posts <i class="fa fa-chevron-right ms-1"></i>
               </a>
            </nav>

         </div>

         {{-- 📌 Right Column: Sidebar --}}
         <aside class="col-lg-4">

            <div class="p-4 bg-white border rounded shadow-sm">

               {{-- 🔍 Search --}}
               {{-- <div class="mb-4">
                  <form method="get" action="https://jsr.isrt.ac.bd/" class="input-group">
                     <input type="text" name="s" class="form-control" placeholder="Search…">
                     <button class="btn btn-outline-secondary" type="submit">
                        <i class="fa fa-search"></i>
                     </button>
                  </form>
               </div> --}}

               {{-- 🆕 Latest Issue --}}
               <div class="mb-4 text-center">
                  <h5 class="fw-bold mb-2">Latest Issue</h5>
                  <a href="#" class="d-block mb-2 text-primary">
                     Vol 58 No 2 (2024)
                  </a>
                  <img src="#" class="img-fluid" alt="JSR Logo" style="max-height: 100px;">
               </div>

               {{-- ⚡ Quick Links --}}
               <div>
                  <h5 class="fw-bold mb-3">Quick Links</h5>
                  <ul class="list-unstyled">
                     <li><a href="#" class="text-decoration-none">📝 Author Info</a></li>
                     <li><a href="#" class="text-decoration-none">💳 Subscription</a></li>
                     <li><a href="#" class="text-decoration-none">👥 Editorial Board</a></li>
                  </ul>
               </div>

            </div>
         </aside>

      </div>
   </div>
</div>
@endsection
