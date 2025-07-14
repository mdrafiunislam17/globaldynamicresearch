@extends('frontend.layouts.app')

@section('title', 'Home Page')

@section('content')


    <style type="text/css">
            #navbarNavDropdown {
                z-index: 9
            }

            .search-form {
                position: absolute;
                top: 0px;
                overflow: hidden;
                width: calc(100% - 30px);
                background: rgba(0, 0, 0, .8);
                height: 57px;
                z-index: 999;
                color: #eee;
                display: none;
            }

            .search-form.is-active {
                display: block;
                z-index: 99;
                height: 57px;
                transition: background .3s ease-in-out;
                top: 0;
                background: rgba(47, 27, 114, .9);
            }

            span.search.is-active {
                display: inline-block;
            }

            span.search {
                display: none;
            }

            span.hide {
                display: none
            }

            span.hide.is-active {
                display: inline-block;
                color: #eee
            }
        </style>

        <script type="text/javascript">
            /*

            jQuery(document).ready(function($){
                $('a#expand').click(function() {
                    $('.search-form').fadeToggle();
                     $('.search-field').focus();
                    $('span.linktext').toggle();
                });




            });
            */



            jQuery(document).ready(function($) {
                var open = false;

                var openSidebar = function() {
                    //$('.search-form').addClass('is-active');
                    $('.search-form').fadeIn();
                    $('.search-field').focus();
                    $('span.search').removeClass('is-active');
                    $('span.hide').addClass('is-active');



                    open = true;
                }
                var closeSidebar = function() {
                    // $('.search-form').removeClass('is-active');
                    $('.search-form').fadeOut();
                    $('span.search').addClass('is-active');
                    $('span.hide').removeClass('is-active');

                    open = false;
                }

                $('#expand').click(function(event) {
                    event.stopPropagation();
                    var toggle = open ? closeSidebar : openSidebar;
                    toggle();
                });

                $(document).click(function(event) {
                    if (!$(event.target).closest('.search-form').length) {
                        closeSidebar();
                    }
                });
            });
        </script>
        <div class="wrapper" id="page-wrapper">

            <div class="container" id="content">

                <div class="row">

                    <div class="col-md-8">
                        <div class="home-col">
                            <div id="metaslider-id-227" style="max-width: 1000px;" class="ml-slider-3-99-0 metaslider metaslider-responsive metaslider-227 ml-slider ms-theme-default" role="region" aria-label="Home Slider" data-width="1000">
                                <div id="metaslider_container_227">
                                    <ul id='metaslider_227' class='rslides'>
                                        <li aria-roledescription='slide' aria-labelledby='slide-0'>
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E"
                                            data-src="assets/uploads/2025/07/PXL_20250702_050951256.MP2_-scaled-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-7956 msDefaultImage lazy" title="PXL_20250702_050951256.MP~2" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT welcomed its 31st batch and the third cohort of Applied Statistics and Data Science students on July 2, 2025.</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-1'>
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E"
                                            data-src="assets/uploads/2025/06/ISRTAA_Scholarship-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7955 msDefaultImage lazy" title="ISRTAA_Scholarship" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">ISRTAA Students’ Stipend Handover Ceremony Held at ISRT on May 27, 2025</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-2'>
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E"
                                            data-src="assets/uploads/2025/03/IMG_7864-scaled-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7513 msDefaultImage lazy" title="IMG_7864" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">Third-Year Students of Applied Statistics Visited Gazipur Agricultural University on 25th February 2025.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-3'>
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E"
                                            data-src="assets/uploads/2025/03/IMG_7826-scaled-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7512 msDefaultImage lazy" title="IMG_7826" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">Third-Year Students of Applied Statistics Visited Gazipur Agricultural University on 25th February 2025.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        {{-- <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-4'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/03/IMG_20250225_105932503-scaled-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-7511 msDefaultImage lazy" title="IMG_20250225_105932503" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">Third-Year Students of Applied Statistics Visited Gazipur Agricultural University on 25th February 2025.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-5'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/02/IMG_20250130_170725-1-scaled-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-7510 msDefaultImage lazy" title="IMG_20250130_170725 (1)" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT Students' Club Hosts Vibrant Pitha Utshob on January 29, 2025 at ISRT Premise</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-6'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/02/IMG_20250130_203920.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7509 msDefaultImage lazy" title="IMG_20250130_203920" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT Students' Club Hosts Vibrant Pitha Utshob on January 29, 2025 at ISRT Premise</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-7'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/02/IMG_4447-scaled-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7508 msDefaultImage lazy" title="IMG_4447" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT Students' Club Hosts Vibrant Pitha Utshob on January 29, 2025 at ISRT Premise</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-8'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/02/IMG_4430-scaled-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7507 msDefaultImage lazy" title="IMG_4430" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT Students' Club Hosts Vibrant Pitha Utshob on January 29, 2025 at ISRT Premise</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-9'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/01/IMG-20250126-WA0004-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7396 msDefaultImage lazy" title="IMG-20250126-WA0004" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">Annual Picnic 2025 Held at Shohag Polli Resort on January 15, 2025 (participants)</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-10'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/01/IMG_4186-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7395 msDefaultImage lazy" title="IMG_4186" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">Annual Picnic 2025 Held at Shohag Polli Resort on January 15, 2025 (sport part)</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-11'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/01/IMG_4188-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7394 msDefaultImage lazy" title="IMG_4188" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">Annual Picnic 2025 Held at Shohag Polli Resort on January 15, 2025 (cultural part)</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-12'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/01/PXL_20241222_041710835.MP_-scaled-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-7356 msDefaultImage lazy" title="PXL_20241222_041710835.MP" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">ISRT Batch 26 Completes Study Tour to Rangamati, Cox’s Bazar, and Saint Martin’s Island from December 17th to 23rd.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-13'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/12/IMG_20241208_183748242-scaled-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-7355 msDefaultImage lazy" title="IMG_20241208_183748242" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">ISRT Successfully Organizes “Stata for Applied Statistics and Data Science” Training Program During Nov10-Dec 1 of 2024</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-14'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/11/PXL_20241118_102401541-scaled-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-7286 msDefaultImage lazy" title="PXL_20241118_102401541" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">ISRT Secures Victory in First Inter-Department Football Match Against Theatre and Performance Studies on November 18, 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-15'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/11/IMG_1976-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7221 msDefaultImage lazy" title="IMG_1976" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">Faria Rauf Ria of batch 26 was Honored with the ISRT Golden Jubilee Award on November 12, 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-16'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0319-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7188 msDefaultImage lazy" title="DSC_0319" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-17'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0061-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7187 msDefaultImage lazy" title="DSC_0061" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-18'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0683-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7151 msDefaultImage lazy" title="DSC_0683" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div><span style="color:rgb(0,0,0);">Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-19'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0414-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7150 msDefaultImage lazy" title="DSC_0414" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part.</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-20'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0664-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7149 msDefaultImage lazy" title="DSC_0664" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <div>
                                                            <p class="p1">Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-21'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0426-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7148 msDefaultImage lazy" title="DSC_0426" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <div>
                                                            <p class="p1">Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-22'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0535-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7147 msDefaultImage lazy" title="DSC_0535" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <div>
                                                            <p class="p1">Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-23'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0573-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7146 msDefaultImage lazy" title="DSC_0573" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <div>
                                                            <p class="p1">Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-24'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0591-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7145 msDefaultImage lazy" title="DSC_0591" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <div>
                                                            <p class="p1">Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-25'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0658-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7144 msDefaultImage lazy" title="DSC_0658" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium-cultural part.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-26'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0715-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7143 msDefaultImage lazy" title="DSC_0715" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">Farewell for Batch 25 and Freshers’ Reception for Batch 30 Programs Held on October 7 2024 in TSC Auditorium</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-27'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/image0-28-scaled-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7142 msDefaultImage lazy" title="image0 (28)" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">Successful Completion of SPSS Hands-on for Data Science Training Program (Sept, 27-28, 2024) at ISRT, University of Dhaka</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-28'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/10/DSC_0178-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7141 msDefaultImage lazy" title="DSC_0178" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">Orientation Program for First-Year Students (batch30) Held at ISRT on September 30 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-29'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/09/flood7-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-7140 msDefaultImage lazy" title="flood7" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT’s Student-Led Relief Efforts for Flood Victims in Cumilla in September 2024 (Phase-III)</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-30'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/09/flood5-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-7139 msDefaultImage lazy" title="flood5" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT’s Student-Led Relief Efforts for Flood Victims in Laxmipur and Cumilla in August 2024 (Phase-II)</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-31'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/09/PXL_20240830_175051234.NIGHT2_.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7138 msDefaultImage lazy" title="PXL_20240830_175051234.NIGHT2_" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">ISRT’s Student-Led Relief Efforts for Flood Victims in Laxmipur and Cumilla in August 2024 (Phase-II)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-32'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/08/457022416_1221914432339101_5332840180649911572_n-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-7137 msDefaultImage lazy" title="457022416_1221914432339101_5332840180649911572_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">ISRT’s Student-Led Relief Efforts for Flood Victims in Cumilla in August 2024 (Phase-1)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-33'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/08/456778889_1937262443353940_5696329724646391320_n-960x489.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-7136 msDefaultImage lazy" title="456778889_1937262443353940_5696329724646391320_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">ISRT’s Student-Led Relief Efforts for Flood Victims in Cumilla in August 2024 (Phase-1)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-34'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/08/ISRT-FundRaising-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-7135 msDefaultImage lazy" title="ISRT FundRaising" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <p class="p1">ISRT’s Student-Led Relief Efforts for Flood Victims in Cumilla in August 2024 (Phase-1)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-35'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/06/rsz_tarikul_mahnaz-e1729438534241-917x467.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-7134 msDefaultImage lazy" title="rsz_tarikul_mahnaz" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT is pleased to welcome two new faculty members Tarikul Islam and Mahnaz Ibrahim (both from Batch 24) on June 30, 2024</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-36'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/06/jsr_logo-e1719479261479-70x35.gif" height="510"
                                                width="1000" alt="" class="slider-227 slide-6816 msDefaultImage lazy" title="jsr_logo" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h4 class="entry-title">The JSR is now Scopus indexed journal</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-37'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/04/2024-DHS-Fellows-Program-Data-Users-Workshop-Official-e1713242355319-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6649 msDefaultImage lazy" title="2024 DHS Fellows Program Data Users Workshop Official" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">Two ISRT faculty members attended the workshop of DHS Fellowship Program 2024 in the Philippines</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-38'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/04/IMG_2774-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6648 msDefaultImage lazy" title="IMG_2774" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>
                                                        <h5 class="entry-title">ISRT Successfully Organized a Training Program on R for Data Science from February 2 to 22, 2024. Faculty members and participants.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-39'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/03/Matlab_trip01-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6619 msDefaultImage lazy" title="Matlab_trip01" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <h5 class="entry-title">On February 15, 2024, ISRT, in coordination with icddr,b, organized a field trip at the latter’s Health and Demographic Surveillance Systems (HDSS) site, Matlab, Chandpur. </h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-40'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/427795885_10229972067993057_5432364922940520992_n-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6605 msDefaultImage lazy" title="427795885_10229972067993057_5432364922940520992_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT teachers and students with VC of Dhaka University at ISRT stall at Research and Publication Fair 2024 held on February 11, 2024</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-41'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/428202297_10161456674887148_2416773637668681525_n-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6604 msDefaultImage lazy" title="428202297_10161456674887148_2416773637668681525_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Director in ISRT session at the Research and Publication Fair 2024 held on February 11, 2024</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-42'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/DSC_9496-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6600 msDefaultImage lazy" title="DSC_9496" />
                                            <div class="caption-wrap">
                                                <div class="caption">VC, Pro-VC's and all directors of the institute of Dhaka University at Research and Publication Fair 2024 held on February 11, 2024</div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-43'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/427776232_10229972067033033_8238984952412912568_n-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6599 msDefaultImage lazy" title="427776232_10229972067033033_8238984952412912568_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>VC of Dhaka University visited ISRT stall at Research and Publication Fair 2024 on February 11, 2024</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-44'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/427672950_10229972867773051_3801778539750789541_n-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6598 msDefaultImage lazy" title="427672950_10229972867773051_3801778539750789541_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>VC of Dhaka University visited ISRT stall at Research and Publication Fair 2024 on February 11, 2024</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-45'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/428056652_10229967932769679_4153810749809517489_n-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6597 msDefaultImage lazy" title="428056652_10229967932769679_4153810749809517489_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Faculty members are at ISRT stall at Research and Publication Fair 2024 on February 11, 2024</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-46'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/DSC_9488-1-scaled-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6596 msDefaultImage lazy" title="DSC_9488" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Director of ISRT gave speech at the inaugural session of the Research and Publication Fair 2024 held on February 11, 2024</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-47'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/DSC_9507-Copy-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6595 msDefaultImage lazy" title="DSC_9507 - Copy" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>VC of Dhaka University inaugurated the Research and Publication Fair 2024 held on February 11, 2024</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-48'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/IMG_8158-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6570 msDefaultImage lazy" title="IMG_8158" />
                                            <div class="caption-wrap">
                                                <div class="caption">Sports event in 2024 Picnic</div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-49'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/FB_IMG_1707747136236-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6569 msDefaultImage lazy" title="FB_IMG_1707747136236" />
                                            <div class="caption-wrap">
                                                <div class="caption">Sports event in 2024 Picnic</div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-50'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/IMG_8503-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6568 msDefaultImage lazy" title="IMG_8503" />
                                            <div class="caption-wrap">
                                                <div class="caption">Picnic 2024_Drama </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-51'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/IMG_8437-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6567 msDefaultImage lazy" title="IMG_8437" />
                                            <div class="caption-wrap">
                                                <div class="caption">Cultural event in Picnic 2024</div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-52'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/8c627011-9ede-43b8-915e-4f19632c0fae-e1707797875387-300x153.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6539 msDefaultImage lazy" title="8c627011-9ede-43b8-915e-4f19632c0fae" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Director of ISRT opened the "R-Fest 2024" on 27 January 2024.</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-53'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2024/02/76eeaf48-3ff4-4179-a75a-5feddfced2b7-1-1000x510.jpeg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6473 msDefaultImage lazy" title="76eeaf48-3ff4-4179-a75a-5feddfced2b7-1" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>The sophomore class of ISRT (Batch 28) celebrated R programming excellence by successfully organizing "R-Fest 2024" on 27 January 2024.</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-54'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/12/409602009_837418155058091_7794638477185515145_n-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6384 msDefaultImage lazy" title="409602009_837418155058091_7794638477185515145_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Participants in the Pitha Utshob 1430 that took place on December 11, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-55'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/12/410446433_837419008391339_8233235067230964942_n-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6383 msDefaultImage lazy" title="410446433_837419008391339_8233235067230964942_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Pitha Utshob 1430 took place on December 11, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-56'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/12/DSC_8750_1701857200-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6382 msDefaultImage lazy" title="DSC_8750_1701857200" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>ISRT Golden Jubilee Award ceremony 2023 received jointly by Md. Muhitul Alam and Md. Abdullah Al Fahim</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-57'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/12/ISRT_staff_cricket-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6381 msDefaultImage lazy" title="ISRT_staff_cricket" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>On December 11, 2023 ISRT staffs took part in a friendly cricket match in two teams at the Dhaka University Central Play Ground.</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-58'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/03/IMG_E0890-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-5628 msDefaultImage lazy" title="IMG_E0890" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Professor Dr. Tamanna Howlader was appointed as the new Director of ISRT on February 26, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-59'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/03/image0-4-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-5655 msDefaultImage lazy" title="image0 (4)" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Workshop on “Research Methodology and Scientific Publication” Held on March 19, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-60'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/03/337351356_994977461909720_3903164728141482108_n-939x479.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-5656 msDefaultImage lazy" title="337351356_994977461909720_3903164728141482108_n" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Prof Sekander Hayat Khan Trust Fund and Gold Medal Introduced at Dhaka University on March 22, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-61'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/06/IMG_4731-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5723 msDefaultImage lazy" title="IMG_4731" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Participants of the training program on "Capacity Building on Educational Data Analysis Techniques and Report Writing* held during 30th January 2023 and 19th March 2023 at ISRT</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-62'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/06/IMG_4710-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5724 msDefaultImage lazy" title="IMG_4710" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Participant takes certificate in the closing event of the training program on "Capacity Building on Educational Data Analysis Techniques and Report Writing* that held on May 22, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-63'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/06/IMG_4700-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5725 msDefaultImage lazy" title="IMG_4700" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Participant takes certificate from ISRT director in the closing event of the training program on "Capacity Building on Educational Data Analysis Techniques and Report Writing* that held on May 22, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-64'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/06/IMG_4766-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5726 msDefaultImage lazy" title="IMG_4766" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Closing speech by the Director of ISRT in the closing event of the training program on "Capacity Building on Educational Data Analysis Techniques and Report Writing* that held on May 22, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-65'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/06/Priom-Photo-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-5743 msDefaultImage lazy" title="Priom Photo" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Priom Saha of batch 23 has received the prestigious Bangabandhu Sheikh Mujib Scholar 2023 award on June 11, 2023 in the field of Mathematical Science.</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-66'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/07/IMG_5262-800x408.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5848 msDefaultImage lazy" title="IMG_5262" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Professor Dr. Md Hasinur Rahaman Khan presented his research work at the Applied Data Science Conference 2023 held at the Fudan University, Shanghai, China during July 4-6, 2023.</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-67'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/08/DSC_4958_1691402246-1000x510.jpeg" height="510"
                                                width="1000" alt="" class="slider-227 slide-5951 msDefaultImage lazy" title="DSC_4958_1691402246" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>DU Treasurer Prof. Mamtaz Uddin Ahmed and Executive Director of icddr,b Dr. Tahmeed Ahmed signed a Memorandum of Understanding on August 07, 2023 on behalf of their respective institution to conduct
                                                        researches on public health, sexual &amp; reproductive health and rights.</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-68'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/08/IMG_9217-320x163.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5953 msDefaultImage lazy" title="IMG_9217" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Dr. Abu Manju (Associate Director Statistics, Center for Mathematical Science (CMS), Organon, Oss, the Netherlands) gave ASDS seminar on "Testing linearity in rapid microbiological method validation"
                                                        on August 7, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-69'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/08/10-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5996 msDefaultImage lazy" title="10" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Teachers and students in the orientation program of the 29th Batch of Applied Statistics and Data Science held on August 16, 2023 at ISRT</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-70'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/08/7-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5997 msDefaultImage lazy" title="7" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Director of ISRT gives a speech in the orientation program of the 29th Batch of Applied Statistics and Data Science held on August 16, 2023 at ISRT</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-71'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/08/3-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5998 msDefaultImage lazy" title="3" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Prof. Dr. M. Sekander Hayat Khan gives a speech in the orientation program of the 29th Batch of Applied Statistics and Data Science held on August 16, 2023 at ISRT</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-72'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/08/1-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-5999 msDefaultImage lazy" title="1" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Prof. Dr. Pk Motiur Rahman gives a speech in the orientation program of the 29th Batch of Applied Statistics and Data Science held on August 16, 2023 at ISRT</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-73'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/09/6IMG_5889-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6020 msDefaultImage lazy" title="6IMG_5889" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Total 15 Students and One Professor of ISRT Received Dean’s Award on September 7, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-74'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/09/inter-uni-champ-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6053 msDefaultImage lazy" title="inter uni champ" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Shohel Mia of Batch 24 Becomes the Best Player of the Dhaka University Team which Emerges Victorious at Inter-University Chess Championship 2023 (14-17 September, 2023)</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-75'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/PHOTO-2023-10-02-18-37-47-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6098 msDefaultImage lazy" title="PHOTO-2023-10-02-18-37-47" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Participants and teachers from the Stata training program 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-76'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/ms24-batch-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6109 msDefaultImage lazy" title="ms24 batch" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>All thesis students of batch 24 along with faculty members on October 16, 2023 (officially last day as student at ISRT)</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-77'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/DSC_1776-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6210 msDefaultImage lazy" title="DSC_1776" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Presenting crest to the VC of DU by ISRT director in the Official Launching Ceremony of “Applied Statistics and Data Science” Undergraduate and Postgraduate Programme Held on October 4, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-78'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/DSC_1779-1-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6211 msDefaultImage lazy" title="DSC_1779" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Speech by the ISRT director in the Official Launching Ceremony of “Applied Statistics and Data Science” Undergraduate and Postgraduate Programme Held on October 4, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-79'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/DSC_1922-2-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6212 msDefaultImage lazy" title="DSC_1922" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Speech by the VC of DU in the Official Launching Ceremony of “Applied Statistics and Data Science” Undergraduate and Postgraduate Programme Held on October 4, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-80'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/DSC_1864-1-1000x510.jpg" height="510"
                                                width="1000" alt="" class="slider-227 slide-6213 msDefaultImage lazy" title="DSC_1864" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Speech by the Pro-VC of DU in the Official Launching Ceremony of “Applied Statistics and Data Science” Undergraduate and Postgraduate Programme Held on October 4, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-81'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/IMG_9202-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6214 msDefaultImage lazy" title="IMG_9202" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>The senate hall with all participants in the Official Launching Ceremony of “Applied Statistics and Data Science” Undergraduate and Postgraduate Programme Held on October 4, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-82'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/IMG_9191-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6215 msDefaultImage lazy" title="IMG_9191" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Speech by the chief guest, honorable education minister in the Official Launching Ceremony of “Applied Statistics and Data Science” Undergraduate and Postgraduate Programme Held on October 4, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-83'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/IMG_9157-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6216 msDefaultImage lazy" title="IMG_9157" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>The senate hall with all participants in the Official Launching Ceremony of “Applied Statistics and Data Science” Undergraduate and Postgraduate Programme Held on October 4, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-84'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/IMG_9196-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6217 msDefaultImage lazy" title="IMG_9196" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>The senate hall with all participants in the Official Launching Ceremony of “Applied Statistics and Data Science” Undergraduate and Postgraduate Programme Held on October 4, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-85'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/10/IMG_9250-1000x510.jpg" height="510" width="1000"
                                                alt="" class="slider-227 slide-6218 msDefaultImage lazy" title="IMG_9250" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>Guests of the second session in the Official Launching Ceremony of “Applied Statistics and Data Science” Undergraduate and Postgraduate Programme Held on October 4, 2023</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-86'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/11/Outside-of-BRRI-premises-with-BRRI-officers-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6257 msDefaultImage lazy" title="Outside of BRRI premises with BRRI officers" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>November 7 (2023) Field Trip by Third-Year Applied Statistics Students: Exploring Experimental Designs at BARI and BRRI</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='display: none;' aria-roledescription='slide' aria-labelledby='slide-87'><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20510'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2023/11/Statistics-Officer-explaning-the-method-at-BARI-field-1000x510.jpg"
                                                height="510" width="1000" alt="" class="slider-227 slide-6258 msDefaultImage lazy" title="Statistics Officer explaning the method at BARI field" />
                                            <div class="caption-wrap">
                                                <div class="caption">
                                                    <div>November 7 (2023) Field Trip by Third-Year Applied Statistics Students: Exploring Experimental Designs at BARI and BRRI</div>
                                                </div>
                                            </div>
                                        </li> --}}
                                    </ul>

                                </div>
                            </div>



                            <div class="row">


                                <div class="col-sm-12 newsonhome">

                                    <h3 class="widget-title">NEWS AND ANNOUNCEMENTS</h3>





                                    <article class="post-8020 news type-news status-publish has-post-thumbnail hentry" id="post-8020">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="content-thumb"><img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/07/1000016513-1-150x150.jpg"
                                                        class="attachment-thumbnail size-thumbnail wp-post-image lazy" alt="" decoding="async" /></div>
                                                <header class="entry-header" style="margin-bottom: 20px">

                                                    <h3 class="entry-title"><a href="{{route('frontend.events')}}" rel="bookmark">ISRT bids farewell to Md. Mynul Islam and Mahnaz Ibrahim for their higher studies in USA on July 8, 2025.</a></h3>

                                                </header>
                                                <!-- .entry-header -->


                                                <div class="entry-content">

                                                    <p>The Institute of Statistical Research and Training (ISRT) recently hosted a small farewell gathering to honour two of its faculty members, Md. Mynul Islam and Mahnaz Ibrahim, as they embark &#8230;
                                                        <a
                                                            class="" href="{{route('frontend.events')}}">[ Read More ]</a>
                                                    </p>


                                                </div>
                                                <!-- .entry-content -->

                                                <!-- <footer class="entry-footer">


	</footer> /entry-footer -->

                                            </div>
                                        </div>

                                    </article>
                                    <!-- #post-## -->



                                    <article class="post-8004 news type-news status-publish has-post-thumbnail hentry category-news category-announcement" id="post-8004">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="content-thumb"><img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/07/MS_flyer-final-150x150.jpg"
                                                        class="attachment-thumbnail size-thumbnail wp-post-image lazy" alt="" decoding="async" /></div>
                                                <header class="entry-header" style="margin-bottom: 20px">

                                                    <h3 class="entry-title"><a href="{{route('frontend.events')}}" rel="bookmark">ISRT Invites Applications for MS in Applied Statistics and Data Science for 2024–2025 Session</a></h3>

                                                </header>
                                                <!-- .entry-header -->


                                                <div class="entry-content">

                                                    <p>The Institute of Statistical Research and Training (ISRT), University of Dhaka, is pleased to announce that applications are now open for the Master of Science in Applied Statistics and Data &#8230;
                                                        <a class="" href="#">[ Read More ]</a></p>


                                                </div>
                                                <!-- .entry-content -->

                                                <!-- <footer class="entry-footer">


	</footer> /entry-footer -->

                                            </div>
                                        </div>

                                    </article>
                                    <!-- #post-## -->



                                    <article class="post-7951 news type-news status-publish has-post-thumbnail hentry" id="post-7951">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="content-thumb"><img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/07/PXL_20250702_050951256.MP2_-150x150.jpg"
                                                        class="attachment-thumbnail size-thumbnail wp-post-image lazy" alt="" decoding="async" /></div>
                                                <header class="entry-header" style="margin-bottom: 20px">

                                                    <h3 class="entry-title"><a href="{{route('frontend.events')}}" rel="bookmark">Orientation Program for Applied Statistics and Data Science First-Year (Batch 31) Students Held at ISRT on July 2, 2025.</a></h3>

                                                </header>
                                                <!-- .entry-header -->


                                                <div class="entry-content">

                                                    <p>ISRT welcomed its 31st batch and the third cohort of Applied Statistics and Data Science students through a brief orientation program held in the seminar room on July 2, 2025. &#8230; <a class="" href="{{route('frontend.events')}}">[ Read More ]</a></p>


                                                </div>
                                                <!-- .entry-content -->

                                                <!-- <footer class="entry-footer">


	</footer> /entry-footer -->

                                            </div>
                                        </div>

                                    </article>
                                    <!-- #post-## -->



                                    <article class="post-7905 news type-news status-publish has-post-thumbnail hentry category-news" id="post-7905">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="content-thumb"><img width="150" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/uploads/2025/06/ISRTAA_Scholarship-150x150.jpeg"
                                                        class="attachment-thumbnail size-thumbnail wp-post-image lazy" alt="" decoding="async" /></div>
                                                <header class="entry-header" style="margin-bottom: 20px">

                                                    <h3 class="entry-title"><a href="{{route('frontend.events')}}" rel="bookmark">ISRTAA Students’ Stipend Handover Ceremony Held at ISRT on May 27, 2025</a></h3>

                                                </header>
                                                <!-- .entry-header -->


                                                <div class="entry-content">

                                                    <p>The ‘ISRTAA Students’ Stipend’ handover programme was held with great enthusiasm at the Institute of Statistical Research and Training (ISRT), University of Dhaka, on May 27, 2025. This stipend, initiated
                                                        &#8230; <a class="" href="{{route('frontend.events')}}">[ Read More ]</a></p>


                                                </div>
                                                <!-- .entry-content -->

                                                <!-- <footer class="entry-footer">


	</footer> /entry-footer -->

                                            </div>
                                        </div>

                                    </article>
                                    <!-- #post-## -->



                                    <article class="post-7621 news type-news status-publish hentry category-news" id="post-7621">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="no-thumb"><img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="https://isrt.ac.bd/wp-content/themes/isrt/img/du-inverse.png" alt=""
                                                    /></div>
                                                <header class="entry-header" style="margin-bottom: 20px">

                                                    <h3 class="entry-title"><a href="{{route('frontend.events')}}" rel="bookmark">Dr. Tahmina Akter Joins ISRT as Faculty Member on April 27, 2025 After Completing PhD in Biostatistics from University of Calgary</a></h3>

                                                </header>
                                                <!-- .entry-header -->


                                                <div class="entry-content">

                                                    <p>The Institute of Statistical Research and Training (ISRT) is pleased to welcome Dr. Tahmina Akter as a Lecturer, who officially joined the institute on April 27, 2025. Dr. Akter recently &#8230; <a class=""
                                                            href="{{route('frontend.events')}}">[ Read More ]</a></p>


                                                </div>
                                                <!-- .entry-content -->

                                                <!-- <footer class="entry-footer">


	</footer> /entry-footer -->

                                            </div>
                                        </div>

                                    </article>
                                    <!-- #post-## -->


                                    <div style="width: 100%; text-align: right; font-size: 14px; padding-right: 15px; margin-bottom: 10px; padding-bottom: 10px; "><a href="news">More News <i class="fa fa-caret-right" aria-hidden="true"></i>
											</a></div>
                                </div>
                                <!-- #div -->

                                <!--  The pagination component
							 -->

                            </div>
                            <!-- #row -->
                            <hr>


                            <!-- #main -->

                            <div id="nav_menu-2" class="widget-container widget_nav_menu">
                                <h3 class="widget-title">Useful Links</h3>
                                <div class="menu-useful-links-container">
                                    <ul id="menu-useful-links" class="menu">
                                        <li id="menu-item-285" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-285"><a href="#">Thisisstatistics.org</a></li>
                                        <li id="menu-item-286" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-286"><a href="#">Statistical Journals</a></li>
                                        <li id="menu-item-1660" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1660"><a href="#">Universities in Bangladesh</a></li>
                                        <li id="menu-item-1667" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1667"><a href="#">ISRT Student&#8217;s Club</a></li>
                                        <li id="menu-item-1900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1900"><a href="#">StatLab</a></li>
                                        <li id="menu-item-2195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2195"><a href="#">Academic Calendar</a></li>
                                        <li id="menu-item-2726" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2726"><a href="#">ISRT Award and Stipend</a></li>
                                        <li id="menu-item-3496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3496"><a href="#">Tender</a></li>
                                        <li id="menu-item-5972" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5972"><a href="#">ISRTAA</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- #primary -->


                    <div class="col-md-4 widget-area" id="secondary" role="complementary">

                        <div class="sticky-top">
                            <aside id="block-2" class="widget widget_block">
                                <h3 class="wp-block-heading widget-title">Upcoming Events</h3>
                            </aside>
                            <div class="tribe-compatibility-container">
                                <div class="tribe-common tribe-events tribe-events-view tribe-events-view--widget-events-list tribe-events-widget" data-js="tribe-events-view" data-view-rest-url="https://isrt.ac.bd/wp-json/tribe/views/v2/html" data-view-manage-url="1" data-view-breakpoint-pointer="e2f656c3-528a-4619-b64d-bb915792c07d">
                                    <div class="tribe-events-widget-events-list">

                                        {{-- <script type="application/ld+json">
                                            [{
                                                "@context": "http://schema.org",
                                                "@type": "Event",
                                                "name": "R for Applied Statistics and Data Science 2025",
                                                "description": "&lt;p&gt;The upcoming R training program starts from June 22, 2025. Follow the website for details: https://isrt.ac.bd/training/r/&lt;/p&gt;\\n",
                                                "url": "https://isrt.ac.bd/event/r-for-applied-statistics-and-data-science-2025/",
                                                "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                                                "eventStatus": "https://schema.org/EventScheduled",
                                                "startDate": "2025-06-19T15:00:00+06:00",
                                                "endDate": "2025-07-22T21:30:00+06:00",
                                                "location": {
                                                    "@type": "Place",
                                                    "name": "ISRT",
                                                    "description": "",
                                                    "url": "",
                                                    "address": {
                                                        "@type": "PostalAddress",
                                                        "streetAddress": "ISRT, University of Dhaka",
                                                        "addressLocality": "Dhaka",
                                                        "addressCountry": "Bangladesh"
                                                    },
                                                    "telephone": "",
                                                    "sameAs": ""
                                                },
                                                "organizer": {
                                                    "@type": "Person",
                                                    "name": "ISRT",
                                                    "description": "",
                                                    "url": "",
                                                    "telephone": "",
                                                    "email": "",
                                                    "sameAs": ""
                                                },
                                                "performer": "Organization"
                                            }, {
                                                "@context": "http://schema.org",
                                                "@type": "Event",
                                                "name": "M.S. Admission Test is on July 27, 2025",
                                                "description": "&lt;p&gt;Details are given on the MS admission site https://isrt.ac.bd/academics/admission&lt;/p&gt;\\n",
                                                "url": "https://isrt.ac.bd/event/ms-admission2025/",
                                                "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                                                "eventStatus": "https://schema.org/EventScheduled",
                                                "startDate": "2025-07-27T08:00:00+06:00",
                                                "endDate": "2025-07-27T17:00:00+06:00",
                                                "location": {
                                                    "@type": "Place",
                                                    "name": "ISRT",
                                                    "description": "",
                                                    "url": "",
                                                    "address": {
                                                        "@type": "PostalAddress",
                                                        "streetAddress": "ISRT, University of Dhaka",
                                                        "addressLocality": "Dhaka",
                                                        "addressCountry": "Bangladesh"
                                                    },
                                                    "telephone": "",
                                                    "sameAs": ""
                                                },
                                                "performer": "Organization"
                                            }, {
                                                "@context": "http://schema.org",
                                                "@type": "Event",
                                                "name": "International Conference on Applied Statistics and Data Science (ICASDS) 2025 on December 28-29, 2025\u00a0",
                                                "description": "&lt;p&gt;The International Conference on Applied Statistics and Data Science (ICASDS) is scheduled to take place on December 28-29, 2025, with a pre-conference workshop on December 27, 2025. Further details and&lt;/p&gt;\\n",
                                                "url": "https://isrt.ac.bd/event/international-conference-on-applied-statistics-and-data-science-icasds-2025-on-december-27-29-2025/",
                                                "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                                                "eventStatus": "https://schema.org/EventScheduled",
                                                "startDate": "2025-12-28T00:00:00+06:00",
                                                "endDate": "2025-12-29T23:59:59+06:00",
                                                "organizer": {
                                                    "@type": "Person",
                                                    "name": "ISRT",
                                                    "description": "",
                                                    "url": "",
                                                    "telephone": "",
                                                    "email": "",
                                                    "sameAs": ""
                                                },
                                                "performer": "Organization"
                                            }]
                                        </script>
                                        <script data-js="tribe-events-view-data" type="application/json">
                                            {
                                                "slug": "widget-events-list",
                                                "prev_url": "",
                                                "next_url": "",
                                                "view_class": "Tribe\\Events\\Views\\V2\\Views\\Widgets\\Widget_List_View",
                                                "view_slug": "widget-events-list",
                                                "view_label": "View",
                                                "view": null,
                                                "should_manage_url": true,
                                                "id": null,
                                                "alias-slugs": null,
                                                "title": "Institute of Statistical Research and Training \u2013 ISRT, University of Dhaka",
                                                "limit": "4",
                                                "no_upcoming_events": true,
                                                "featured_events_only": false,
                                                "jsonld_enable": true,
                                                "tribe_is_list_widget": false,
                                                "admin_fields": {
                                                    "title": {
                                                        "label": "Title:",
                                                        "type": "text",
                                                        "parent_classes": "",
                                                        "classes": "",
                                                        "dependency": "",
                                                        "id": "widget-tribe-widget-events-list-2-title",
                                                        "name": "widget-tribe-widget-events-list[2][title]",
                                                        "options": [],
                                                        "placeholder": "",
                                                        "value": null
                                                    },
                                                    "limit": {
                                                        "label": "Show:",
                                                        "type": "number",
                                                        "default": 5,
                                                        "min": 1,
                                                        "max": 10,
                                                        "step": 1,
                                                        "parent_classes": "",
                                                        "classes": "",
                                                        "dependency": "",
                                                        "id": "widget-tribe-widget-events-list-2-limit",
                                                        "name": "widget-tribe-widget-events-list[2][limit]",
                                                        "options": [],
                                                        "placeholder": "",
                                                        "value": null
                                                    },
                                                    "no_upcoming_events": {
                                                        "label": "Hide this widget if there are no upcoming events.",
                                                        "type": "checkbox",
                                                        "parent_classes": "",
                                                        "classes": "",
                                                        "dependency": "",
                                                        "id": "widget-tribe-widget-events-list-2-no_upcoming_events",
                                                        "name": "widget-tribe-widget-events-list[2][no_upcoming_events]",
                                                        "options": [],
                                                        "placeholder": "",
                                                        "value": null
                                                    },
                                                    "featured_events_only": {
                                                        "label": "Limit to featured events only",
                                                        "type": "checkbox",
                                                        "parent_classes": "",
                                                        "classes": "",
                                                        "dependency": "",
                                                        "id": "widget-tribe-widget-events-list-2-featured_events_only",
                                                        "name": "widget-tribe-widget-events-list[2][featured_events_only]",
                                                        "options": [],
                                                        "placeholder": "",
                                                        "value": null
                                                    },
                                                    "jsonld_enable": {
                                                        "label": "Generate JSON-LD data",
                                                        "type": "checkbox",
                                                        "parent_classes": "",
                                                        "classes": "",
                                                        "dependency": "",
                                                        "id": "widget-tribe-widget-events-list-2-jsonld_enable",
                                                        "name": "widget-tribe-widget-events-list[2][jsonld_enable]",
                                                        "options": [],
                                                        "placeholder": "",
                                                        "value": null
                                                    }
                                                },
                                                "events": [7859, 7991, 6653],
                                                "url": "https:\/\/isrt.ac.bd\/?post_type=tribe_events&eventDisplay=widget-events-list",
                                                "url_event_date": false,
                                                "bar": {
                                                    "keyword": "",
                                                    "date": ""
                                                },
                                                "today": "2025-07-09 00:00:00",
                                                "now": "2025-07-09 04:07:14",
                                                "home_url": "https:\/\/isrt.ac.bd",
                                                "rest_url": "https:\/\/isrt.ac.bd\/wp-json\/tribe\/views\/v2\/html",
                                                "rest_method": "GET",
                                                "rest_nonce": "",
                                                "today_url": "https:\/\/isrt.ac.bd\/?post_type=tribe_events&eventDisplay=widget-events-list",
                                                "today_title": "Click to select today's date",
                                                "today_label": "Today",
                                                "prev_label": "",
                                                "next_label": "",
                                                "date_formats": {
                                                    "compact": "Y-m-d",
                                                    "month_and_year_compact": "Y-m",
                                                    "month_and_year": "F Y",
                                                    "time_range_separator": " - ",
                                                    "date_time_separator": " @ "
                                                },
                                                "messages": [],
                                                "start_of_week": "0",
                                                "header_title": "",
                                                "header_title_element": "h1",
                                                "content_title": "",
                                                "breadcrumbs": [],
                                                "before_events": "",
                                                "after_events": "\n<!--\nThis calendar is powered by The Events Calendar.\nhttp:\/\/evnt.is\/18wn\n-->\n",
                                                "display_events_bar": false,
                                                "disable_event_search": false,
                                                "live_refresh": true,
                                                "ical": {
                                                    "display_link": true,
                                                    "link": {
                                                        "url": "https:\/\/isrt.ac.bd\/?post_type=tribe_events&#038;eventDisplay=widget-events-list&#038;ical=1",
                                                        "text": "Export Events",
                                                        "title": "Use this to share calendar data with Google Calendar, Apple iCal and other compatible apps"
                                                    }
                                                },
                                                "container_classes": ["tribe-common", "tribe-events", "tribe-events-view", "tribe-events-view--widget-events-list", "tribe-events-widget"],
                                                "container_data": [],
                                                "is_past": false,
                                                "breakpoints": {
                                                    "xsmall": 500,
                                                    "medium": 768,
                                                    "full": 960
                                                },
                                                "breakpoint_pointer": "e2f656c3-528a-4619-b64d-bb915792c07d",
                                                "is_initial_load": true,
                                                "public_views": {
                                                    "list": {
                                                        "view_class": "Tribe\\Events\\Views\\V2\\Views\\List_View",
                                                        "view_url": "https:\/\/isrt.ac.bd\/events\/list\/",
                                                        "view_label": "List",
                                                        "aria_label": "Display Events in List View"
                                                    },
                                                    "month": {
                                                        "view_class": "Tribe\\Events\\Views\\V2\\Views\\Month_View",
                                                        "view_url": "https:\/\/isrt.ac.bd\/events\/month\/",
                                                        "view_label": "Month",
                                                        "aria_label": "Display Events in Month View"
                                                    },
                                                    "day": {
                                                        "view_class": "Tribe\\Events\\Views\\V2\\Views\\Day_View",
                                                        "view_url": "https:\/\/isrt.ac.bd\/events\/today\/",
                                                        "view_label": "Day",
                                                        "aria_label": "Display Events in Day View"
                                                    }
                                                },
                                                "show_latest_past": false,
                                                "past": false,
                                                "compatibility_classes": ["tribe-compatibility-container"],
                                                "view_more_text": "View Calendar",
                                                "view_more_title": "View more events.",
                                                "view_more_link": "https:\/\/isrt.ac.bd\/events\/",
                                                "widget_title": "",
                                                "hide_if_no_upcoming_events": true,
                                                "display": [],
                                                "subscribe_links": {
                                                    "gcal": {
                                                        "label": "Google Calendar",
                                                        "single_label": "Add to Google Calendar",
                                                        "visible": true,
                                                        "block_slug": "hasGoogleCalendar"
                                                    },
                                                    "ical": {
                                                        "label": "iCalendar",
                                                        "single_label": "Add to iCalendar",
                                                        "visible": true,
                                                        "block_slug": "hasiCal"
                                                    },
                                                    "outlook-365": {
                                                        "label": "Outlook 365",
                                                        "single_label": "Outlook 365",
                                                        "visible": true,
                                                        "block_slug": "hasOutlook365"
                                                    },
                                                    "outlook-live": {
                                                        "label": "Outlook Live",
                                                        "single_label": "Outlook Live",
                                                        "visible": true,
                                                        "block_slug": "hasOutlookLive"
                                                    },
                                                    "ics": {
                                                        "label": "Export .ics file",
                                                        "single_label": "Export .ics file",
                                                        "visible": true,
                                                        "block_slug": null
                                                    },
                                                    "outlook-ics": {
                                                        "label": "Export Outlook .ics file",
                                                        "single_label": "Export Outlook .ics file",
                                                        "visible": true,
                                                        "block_slug": null
                                                    }
                                                },
                                                "_context": {
                                                    "slug": "widget-events-list"
                                                }
                                            }
                                        </script> --}}



                                        <div class="tribe-events-widget-events-list__events">
                                            <div class="tribe-common-g-row tribe-events-widget-events-list__event-row">

                                                <div class="tribe-events-widget-events-list__event-date-tag tribe-common-g-col">
                                                    <time class="tribe-events-widget-events-list__event-date-tag-datetime" datetime="2025-06-19">

                                                        <span class="tribe-events-widget-events-list__event-date-tag-month">

                                                            Jun		</span>

                                                            <span class="tribe-events-widget-events-list__event-date-tag-daynum tribe-common-h2 tribe-common-h4--min-medium">

                                                                19		</span>

                                                            </time>
                                                </div>

                                                <div class="tribe-events-widget-events-list__event-wrapper tribe-common-g-col">
                                                    <article class="tribe-events-widget-events-list__event post-7859 tribe_events type-tribe_events status-publish hentry">
                                                        <div class="tribe-events-widget-events-list__event-details">

                                                            <header class="tribe-events-widget-events-list__event-header">
                                                                <div class="tribe-events-widget-events-list__event-datetime-wrapper tribe-common-b2 tribe-common-b3--min-medium">
                                                                    <time class="tribe-events-widget-events-list__event-datetime" datetime="2025-06-19">

                                                                        <span class="tribe-event-date-start">June 19 @ 3:00 pm</span> - <span class="tribe-event-date-end">July 22 @ 9:30 pm</span>	</time>
                                                                </div>
                                                                <h3 class="tribe-events-widget-events-list__event-title tribe-common-h7">
                                                                    <a href="{{route('frontend.events')}}" title="R for Applied Statistics and Data Science 2025" rel="bookmark" class="tribe-events-widget-events-list__event-title-link tribe-common-anchor-thin">

                                                                        R for Applied Statistics and Data Science 2025	</a>
                                                                </h3>
                                                            </header>


                                                        </div>
                                                    </article>
                                                </div>

                                            </div>
                                            <div class="tribe-common-g-row tribe-events-widget-events-list__event-row">

                                                <div class="tribe-events-widget-events-list__event-date-tag tribe-common-g-col">
                                                    <time class="tribe-events-widget-events-list__event-date-tag-datetime" datetime="2025-07-27">

                                                        <span class="tribe-events-widget-events-list__event-date-tag-month">

                                                            Jul		</span>

                                                            <span class="tribe-events-widget-events-list__event-date-tag-daynum tribe-common-h2 tribe-common-h4--min-medium">

                                                                27		</span>

                                                            </time>
                                                </div>

                                                <div class="tribe-events-widget-events-list__event-wrapper tribe-common-g-col">
                                                    <article class="tribe-events-widget-events-list__event post-7991 tribe_events type-tribe_events status-publish hentry tribe_events_cat-other">
                                                        <div class="tribe-events-widget-events-list__event-details">

                                                            <header class="tribe-events-widget-events-list__event-header">
                                                                <div class="tribe-events-widget-events-list__event-datetime-wrapper tribe-common-b2 tribe-common-b3--min-medium">
                                                                    <time class="tribe-events-widget-events-list__event-datetime" datetime="2025-07-27">

                                                                        <span class="tribe-event-date-start">8:00 am</span> - <span class="tribe-event-time">5:00 pm</span>	</time>
                                                                </div>
                                                                <h3 class="tribe-events-widget-events-list__event-title tribe-common-h7">
                                                                    <a href="{{route('frontend.events')}}" title="M.S. Admission Test is on July 27, 2025" rel="bookmark" class="tribe-events-widget-events-list__event-title-link tribe-common-anchor-thin">

                                                                        M.S. Admission Test is on July 27, 2025	</a>
                                                                </h3>
                                                            </header>


                                                        </div>
                                                    </article>
                                                </div>

                                            </div>
                                            <div class="tribe-common-g-row tribe-events-widget-events-list__event-row">

                                                <div class="tribe-events-widget-events-list__event-date-tag tribe-common-g-col">
                                                    <time class="tribe-events-widget-events-list__event-date-tag-datetime" datetime="2025-12-28">

                                                        <span class="tribe-events-widget-events-list__event-date-tag-month">

                                                            Dec		</span>

                                                            <span class="tribe-events-widget-events-list__event-date-tag-daynum tribe-common-h2 tribe-common-h4--min-medium">

                                                                28		</span>

                                                            </time>
                                                </div>

                                                <div class="tribe-events-widget-events-list__event-wrapper tribe-common-g-col">
                                                    <article class="tribe-events-widget-events-list__event post-6653 tribe_events type-tribe_events status-publish hentry tribe_events_cat-conference">
                                                        <div class="tribe-events-widget-events-list__event-details">

                                                            <header class="tribe-events-widget-events-list__event-header">
                                                                <div class="tribe-events-widget-events-list__event-datetime-wrapper tribe-common-b2 tribe-common-b3--min-medium">
                                                                    <time class="tribe-events-widget-events-list__event-datetime" datetime="2025-12-28">

                                                                        <span class="tribe-event-date-start">December 28</span> - <span class="tribe-event-date-end">December 29</span>	</time>
                                                                </div>
                                                                <h3 class="tribe-events-widget-events-list__event-title tribe-common-h7">
                                                                    <a href="{{route('frontend.events')}}" title="International Conference on Applied Statistics and Data Science (ICASDS) 2025 on December 28-29, 2025 " rel="bookmark"
                                                                        class="tribe-events-widget-events-list__event-title-link tribe-common-anchor-thin">

                                                                        International Conference on Applied Statistics and Data Science (ICASDS) 2025 on December 28-29, 2025 	</a>
                                                                </h3>
                                                            </header>


                                                        </div>
                                                    </article>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tribe-events-widget-events-list__view-more tribe-common-b1 tribe-common-b2--min-medium">
                                            <a href="{{route('frontend.events')}}" class="tribe-events-widget-events-list__view-more-link tribe-common-anchor-thin" title="View more events.">

                                                View Event	</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <aside id="custom_html-4" class="widget_text widget widget_custom_html">
                                <h3 class="widget-title">JSR JOURNAL</h3>
                                <div class="textwidget custom-html-widget"><a href="{{route('frontend.books')}}"><img class="img-responsive alignnone lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2098%20150'%3E%3C/svg%3E" data-src="https://www.isrt.ac.bd/wp-content/uploads/2017/04/jsr_logo.gif" alt="" width="98" height="150"></a></div>
                            </aside>
                            <aside id="custom_html-5" class="widget_text widget widget_custom_html">
                                <h3 class="widget-title">BOOKS BY ISRT FACULTY</h3>
                                <div class="textwidget custom-html-widget">
                                    <p><a href="{{route('frontend.books')}}"><img class="wp-image-2521 size-full lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20120%20181'%3E%3C/svg%3E" data-src="https://www.isrt.ac.bd/wp-content/uploads/2019/10/tamanna-book.jpg" alt="" width="120" height="181"></a><br>
                                        <strong>Orthogonal Image Moments for Human-Centric Visual Pattern Recognition</strong><br> – by S.M. Mahbubur Rahman, Tamanna Howlader, Dimitrios Hatzinakos
                                    </p>

                                    <p><a href="{{route('frontend.books')}}"><img class="wp-image-2521 size-full lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20120%20181'%3E%3C/svg%3E" data-src="https://www.isrt.ac.bd/wp-content/uploads/2019/08/book-rk-at.jpeg" alt="" width="120" height="181"></a><br>
                                        <strong>Reliability and Survival Analysis</strong><br> – by Md. Rezaul Karim and M. Ataharul Islam</p>


                                    <p><a href="{{route('frontend.books')}}"><img class="wp-image-2521 size-full lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20120%20181'%3E%3C/svg%3E" data-src="https://www.isrt.ac.bd/wp-content/uploads/2018/05/Book_AI_Funda-e1525501400207.jpg" alt="" width="120" height="181"></a><br>
                                        <strong>Foundations of Biostatistics</strong><br> – by M. Ataharul Islam and Abdullah Al-Shiha</p>
                                    <p><a href="{{route('frontend.books')}}"><img class="wp-image-633 lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20120%20180'%3E%3C/svg%3E" data-src="https://www.isrt.ac.bd/wp-content/uploads/2017/08/prof_Atahar_book.jpg" alt="" width="120" height="180"></a><br>
                                        <strong>Analysis of Repeated Measures Data</strong><br> – by M. Ataharul Islam</p>
                                    <p><a href="{{route('frontend.books')}}"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="https://www.isrt.ac.bd/wp-content/uploads/2018/02/poverty_pk.jpg" height="150" class="img-responsive lazy"></a><br>
                                        <strong>Dynamics of Poverty in Rural Bangladesh</strong><br> – by Pk. Md. Motiur Rahman, Noriatsu Matsui and Yukio Ikemoto</p>
                                    <p><a href="{{route('frontend.books')}}"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="https://www.isrt.ac.bd/wp-content/uploads/2018/02/9780415464680.jpg" height="150" class="img-responsive lazy"></a><br>
                                        <strong>The Chronically Poor in Rural Bangladesh</strong><br> – by Pk. Md. Motiur Rahman, Noriatsu Matsui and Yukio Ikemoto</p>
                                </div>
                            </aside>
                            <aside id="custom_html-8" class="widget_text widget widget_custom_html">
                                <h3 class="widget-title">Why should you pursue a career in Applied Statistics?</h3>
                                <div class="textwidget custom-html-widget"><a href="{{route('frontend.books')}}" class="btn btn-success">

                                    Read the Article</a>
                                </div>
                            </aside>
                        </div>

                    </div>
                    <!-- #secondary -->

                </div>
                <!-- .row -->


            </div>
            <!-- Container end -->


        </div>
        <!-- Wrapper end -->
@endsection
