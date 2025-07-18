<style>

    .head-title .container {
    background: url("{{asset('assets/img/ISRT.png')}}") no-repeat 100% 50%;
    padding-top: 65px;
    padding-bottom: 30px;
}

    </style>

 <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">


            <div style="background-color:rgba(50, 34, 119, 0.52); color: #eee; height: 35px; line-height: 35px; position: absolute; top:0; left: 0; width: 100%; z-index: 9999; font-size: 12px; text-transform: uppercase; letter-spacing: 1px">
                <div class="container">


                    <div class="row">
                        <div class="col-6">
                            <a href="#" target="_blank" style="color: #eee"> University of Dhaka</a>
                        </div>

                        <div class="col-6">
                            <div class="float-right"><a href="#" style="color:#eee; font-size: 13px; text-transform: uppercase; letter-spacing: 2px">Login</a></div>
                        </div>

                    </div>


                </div>
            </div>



            <div class="head-title">
                <div class="container">
                    <div class="row">
                        <div class="col-2 col-sm-1">
                            {{-- <a rel="home" href="#" title="Global Dynamic Research">
                                <img src="{{asset('assets/themes/isrt/img/du-logo.png')}}" width="100" height="100" loading="lazy"
                                data-src="{{asset('assets/themes/isrt/img/du-logo.png')}}" alt="" class="row head-logo lazy"/>
                            </a> --}}
                        </div>
                        <div class="col-10 col-sm-11">

                            <h2><a rel="home" href="#" title="Global Dynamic Research">Global Dynamic Research</a></h2>
                            <h4>GDR, Research</h4>
                        </div>



                    </div>


                </div>
            </div>
            <nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">

                <div class="container navisrt">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
                    <a href="javascript:;" id="expand" style="position: absolute; right:1px; top:0; width: 60px; height: 57px; top:0; display: inline-block; line-height: 57px; text-align: center; color: #444; z-index: 9999">

                        <span class="search is-active"><i class="fa fa-fw fa-search"></i><span class="screen-reader-text">Search</span></span>

                        <span class="hide"><i class="fa fa-fw fa-times"></i><span class="screen-reader-text">Search</span></span>

                    </a>
                    <div id="details" style="display:none">
                        <h1>This is the details</h1>
                    </div>
                    {{-- <form role="search" method="get" class="search-form" action="">

                        <input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search efter:">

                        <input type="submit" class="search-submit" value="Search">
                    </form> --}}











                    <!-- The WordPress Menu goes here -->
                    <div id="navbarNavDropdown" class="collapse navbar-collapse">
                        <ul id="main-menu" class="navbar-nav">
                            <li id="menu-item-199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-22 current_page_item nav-item menu-item-199 active"><a title="Home" href="{{route('frontend.index')}}" class="nav-link">Home</a></li>
                            <li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-200"><a title="About ISRT" href="{{route('frontend.about')}}" class="nav-link">About GDR</a></li>
                            <li id="menu-item-265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-265 dropdown"><a title="Training" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle" aria-haspopup="true">Training <span class="caret"></span></a>
                                <ul class=" dropdown-menu" role="menu">


                                    @foreach($trainingCategory as $category)
                                        <li id="menu-item-6681"
                                            class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-6681">
                                            <a href="{{ route('frontendTrainingCategory', $category->name) }}" class="nav-link">
                                                {{ Str::limit($category->name, 25) }}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>

                             <li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-200"><a title="About ISRT" href="{{route('frontend.workshop')}}" class="nav-link">Workshops</a></li>

                            <li id="menu-item-266" class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat nav-item menu-item-266"><a title="Seminar" href="{{route('frontendSeminar')}}" class="nav-link">Seminar</a></li>
                              <li id="menu-item-3082" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-3082 dropdown">
                                <a title="Conference" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle" aria-haspopup="true">Conference <span class="caret"></span>
                                </a>
                                <ul class=" dropdown-menu" role="menu">
                                    @foreach($conferenceCategory as $category)
                                        <li id="menu-item-6681"
                                            class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-6681">
                                            <a href="{{ route('frontendConferenceUS', $category->name) }}" class="nav-link">
                                                {{ Str::limit($category->name, 25) }}
                                            </a>
                                        </li>
                                    @endforeach
{{--                                    <li id="menu-item-6687" class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-6687"><a title="ICAS2014" href="{{route('frontendConferenceUS')}}" class="nav-link">ICAS2014</a></li>--}}
{{--                                    <li id="menu-item-6686" class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-6686"><a title="ICAS2019" href="{{route('frontendConferenceUS')}}" class="nav-link">ICAS2019</a></li>--}}
{{--                                    <li id="menu-item-6689" class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-6689"><a title="ICASDS2025" href="{{route('frontendConferenceUS')}}" class="nav-link">ICASDS2025</a></li>--}}
                                </ul>
                            </li>

                            <li id="menu-item-5831" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-5831"><a title="Publications" href="{{route('frontendPublications')}}" class="nav-link">Publications</a></li>
                            <li id="menu-item-5831" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-5831"><a title="Payment" href="{{route('frontend.payment')}}" class="nav-link">Payment</a></li>
                            <li id="menu-item-5831" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-5831"><a title="Contact " href="{{route('frontend.contactUs')}}" class="nav-link">Contact </a></li>

                            {{-- <li id="menu-item-201" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-201 dropdown"><a title="Academics" href="https://isrt.ac.bd/academics/" data-toggle="dropdown" class="nav-link dropdown-toggle" aria-haspopup="true">Academics <span class="caret"></span></a>
                                <ul class=" dropdown-menu" role="menu">
                                    <li id="menu-item-270" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-270"><a title="Undergraduate" href="https://isrt.ac.bd/academics/undergraduate/" class="nav-link">Undergraduate</a></li>
                                    <li id="menu-item-269" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-269"><a title="Graduate" href="https://isrt.ac.bd/academics/graduate/" class="nav-link">Graduate</a></li>
                                    <li id="menu-item-1076" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-1076"><a title="Admission" href="https://isrt.ac.bd/academics/admission/" class="nav-link">Admission</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-203 dropdown"><a title="Research" href="https://isrt.ac.bd/research/" data-toggle="dropdown" class="nav-link dropdown-toggle" aria-haspopup="true">Research <span class="caret"></span></a>
                                <ul class=" dropdown-menu" role="menu">
                                    <li id="menu-item-6794" class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-6794"><a title="Faculty Publications" href="https://isrt.ac.bd/publications" class="nav-link">Faculty Publications</a></li>
                                    <li id="menu-item-305" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-305"><a title="Faculty Research Interests" href="https://isrt.ac.bd/faculty-research/" class="nav-link">Faculty Research Interests</a></li>
                                    <li id="menu-item-304" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-304"><a title="Post-graduate Research" href="https://isrt.ac.bd/postgraduate-research/" class="nav-link">Post-graduate Research</a></li>
                                    <li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-303"><a title="Research Projects" href="https://isrt.ac.bd/research-projects/" class="nav-link">Research Projects</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-204" class="menu-item menu-item-type-post_type_archive menu-item-object-people menu-item-has-children nav-item menu-item-204 dropdown"><a title="People" href="https://isrt.ac.bd/people/" data-toggle="dropdown" class="nav-link dropdown-toggle" aria-haspopup="true">People <span class="caret"></span></a>
                                <ul class=" dropdown-menu" role="menu">
                                    <li id="menu-item-205" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children nav-item menu-item-205 dropdown-submenu"><a title="Faculty" href="https://isrt.ac.bd/category/faculty/" class="nav-link">Faculty</a>
                                        <ul class=" dropdown-menu" role="menu">
                                            <li id="menu-item-207" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-207"><a title="Professor" href="https://isrt.ac.bd/category/faculty/professor/" class="nav-link">Professor</a></li>
                                            <li id="menu-item-210" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-210"><a title="Associate Professor" href="https://isrt.ac.bd/category/faculty/associate-professor/" class="nav-link">Associate Professor</a></li>
                                            <li id="menu-item-208" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-208"><a title="Assistant Professor" href="https://isrt.ac.bd/category/faculty/assistant-professor/" class="nav-link">Assistant Professor</a></li>
                                            <li id="menu-item-206" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-206"><a title="Lecturer" href="https://isrt.ac.bd/category/faculty/lecturer/" class="nav-link">Lecturer</a></li>
                                            <li id="menu-item-209" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-209"><a title="Supernumerary Professor" href="https://isrt.ac.bd/category/faculty/supernumerary-professor/" class="nav-link">Supernumerary Professor</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-211" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-211"><a title="Former Directors" href="https://isrt.ac.bd/category/former-directors/" class="nav-link">Former Directors</a></li>
                                    <li id="menu-item-307" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-307"><a title="Former Faculty" href="https://isrt.ac.bd/category/former-faculty/" class="nav-link">Former Faculty</a></li>
                                    <li id="menu-item-7786" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-7786"><a title="Officer" href="https://isrt.ac.bd/category/officer/" class="nav-link">Officer</a></li>
                                    <li id="menu-item-273" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-273"><a title="Staff" href="https://isrt.ac.bd/category/staff/" class="nav-link">Staff</a></li>
                                    <li id="menu-item-272" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-272"><a title="Current PhD and MPhil Students" href="https://isrt.ac.bd/category/phd-students/" class="nav-link">Current PhD and MPhil Students</a></li>
                                    <li id="menu-item-6023" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-6023"><a title="Former PhD and MPhil Students" href="https://isrt.ac.bd/category/former-phd-and-mphil-students/" class="nav-link">Former PhD and MPhil Students</a></li>
                                    <li id="menu-item-212" class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-212"><a title="Alumni" href="https://isrt.ac.bd/category/alumni/" class="nav-link">Alumni</a></li>
                                </ul>
                            </li>

                            <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-202"><a title="News &amp; Events" href="https://isrt.ac.bd/events/" class="nav-link">News &#038; Events</a></li>

                            <li id="menu-item-3216" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-3216"><a title="Workshop" href="https://isrt.ac.bd/workshop/" class="nav-link">Workshop</a></li> --}}
                        </ul>
                    </div>



                </div>
                <!-- .container -->







            </nav>
            <!-- .site-navigation -->

        </div>
