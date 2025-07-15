@extends('frontend.layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="page-wrapper" id="about-page">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <article class="about">
                        <header class="about__header mb-4 text-center">
                            <h1 class="about__title">{{ $about->title }}</h1>
                        </header>

                        <figure class="about__image text-center mb-4">
                            <img
                                    src="{{ asset('uploads/about/' . $about->image) }}"
                                    alt="{{ $about->title }}"
                                    class="img-fluid rounded shadow-sm"
                                    width="500" height="504"
                            >
                        </figure>

                        <section class="about__content">
                            {!! $about->description !!}
                        </section>

                        <footer class="about__footer mt-5 text-center">
                            <p class="text-muted small">Last updated: {{ $about->updated_at->format('F d, Y') }}</p>
                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
