@extends('frontend.layouts.app')

@section('title', 'Workshops')

@section('content')
	<div class="wrapper" id="page-wrapper">
		<div class="container" id="content" tabindex="-1">
			<div class="row">
				<div class="col-md-12 content-area" id="primary">
					<main class="site-main" id="main">
                        @foreach($workshops as $workshop)
                            <article class="post-3213 page type-page status-publish hentry" id="post-3213">
                                <header class="entry-header text-center mb-4">
                                    <h1 class="entry-title">Workshop</h1>
                                </header>

                                <div class="entry-content">
                                    <hr>

                                    <h2 class="text-center fw-bold">
                                        {{$workshop->title}}
                                    </h2>

                                    <h3 class="text-center mt-4 fw-bold">

                                        {{ \Carbon\Carbon::parse($workshop->date)->format('F j, Y') }}

                                    </h3>

                                    <div class="mt-4">
                                        <p><strong>Date and Time:</strong>
                                            {{ \Carbon\Carbon::parse($workshop->date)->format('l, jS F Y') }},
                                            {{ \Carbon\Carbon::parse($workshop->start_time)->format('g:i a') }} –
                                            {{ \Carbon\Carbon::parse($workshop->end_time)->format('g:i a') }}
                                        </p>

                                    </div>

                                    <p>
                                        {!! $workshop->description !!}
                                    </p>

                                    <div class="text-center mt-4">

                                        @if (!empty($conference->image) && file_exists(public_path("uploads/workshop/' . $workshop->image")))
                                            <img
                                                src="{{ asset('uploads/workshop/' . $workshop->image) }}"
                                                alt="Workshop Flyer"
                                                class="img-fluid"
                                                width="400"
                                            >
                                        @endif

                                    </div>
                                </div>

                                <footer class="entry-footer"></footer>
                            </article>
                        @endforeach

					</main>
				</div>
			</div>
		</div>
	</div>
@endsection
