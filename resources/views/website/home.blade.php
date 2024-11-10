@extends('website.layout.app')
@section('title', 'Term')
@section('style')
    <style>
        .special-card {
            width: 100%;
        }
        .sec-2 .sec2-content {
            width: 50%;
        }

        @media(max-width:1200px) {

            .card-container,
            .front,
            .back {
                width: 250px;
                height: 250px;
            }

            .back .div-1 p {
                font-size: 12px;
            }

            .front h5 {
                font-size: 20px;
                font-weight: 700;
            }

            .special-card h5 {
                font-size: 18px;
                padding-bottom: 0;
            }
        }

        @media(max-width:990px) {
            .form-container {
                max-width: 70%;
                padding: 40px;
            }

            .card-container {
                padding: 30px;
            }

            .card-container .card {
                width: 300px;
                height: 300px;
            }

            .card-container .card:hover {
                height: 300px;
                width: 300px;
                border-radius: 6px;
                overflow-x: hidden;
                background: #fff;
                padding-left: 15px;
            }

            .sec-2 .sec2-content {
                width: 100%;
                padding-top: 80px;
            }

            .flip-cards {
                width: 47.5% !important;
            }
            .sec2-content h5,.p-s{
                text-align: center !important;
            }
        }

        @media(max-width:767px) {
            .form-container {
                max-width: 90%;
                padding: 25px;
            }

            .homeform-names {
                flex-direction: column;
            }

            .homeform-names input,
            .homeform-email input,
            .homeform-phone input {
                width: 100%;
                height: 38px;
            }

            .homeform-message textarea {
                height: 90px;
            }

            .send-message {
                height: 40px !important;
            }

            .back h5 {
                font-size: 16px;
                font-weight: 600;
            }
            .dark .back h5 {
                color: #000;
            }

            .back .div-1 p {
                font-size: 11px;
            }
            .special-card h5{
                font-size: 16px;
            }
            .special-card{
                margin-top: 0;
            }
            .flip-cards {
                width: 100% !important;
            }

            .sec-4 h5 {
                margin: 45px 0;
            }


        }
    </style>
@endsection
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')

    <div class="sec-1">
        <div class="sec1-content">
            <h5>Listen, Respond, Succeed</h5>
            <p>
                We provide the perfect combination of data-driven insights and human expertise to enable our
                clients
                to make strategic decisions backed by comprehensive evidence
            </p>
            <a href="{{url('/contact')}}"><button id="Book_Call" class="book-call">Book a Call</button></a>
        </div>
    </div>

    <div class="sec-2" id="cards-section">
        <div class="line-p"></div>
        <div class="sec2-content card-left fadeout">
            <h5 style="text-align: start; padding-bottom: 0;">What we do?</h5>
            <p class="p-s" style="text-align: start; width: 95%; margin: 0;">At TERM, we're dedicated to listening, acting, and ensuring our clients' success. We redefine
                audience engagement by uncovering growth opportunities through advanced social listening,
                comprehensive consumer research, and strategic consultancy.</p><br />

            <p class="p-s" style="text-align: start; width: 95%; margin: 0;"> While our insights empower you to align your brand, marketing, and product strategies with consumer
                demands and market dynamics, our responsive solutions equip you with tools for influencing and
                safeguarding your brand's reputation among your target audiences.</p>
            <br />

            <p class="p-s" style="text-align: start; width: 95%; margin: 0;">This holistic approach ensures that your business decisions are informed and effective and that you
                are empowered to grow and protect your brand and market position.</p><br />
            </p>
        </div>
        <div class="sec2-img card-right fadein">
            <h5>Read our case studies</h5>
            <p>Why we the trusted strategic insights partner for global brands and agencies</p>
            <a href="{{url('/success_stories')}}"><button id="Read_Our_Success_Stories">Read Our Success Stories</button></a>
        </div>
    </div>

    <div class="sec-3 services">
        <h5 class="h-5">Our Services & Solutions</h5>
        <div class="services-cards">
            <div class="service-card">
                <img id="lis-btn" loading="lazy" alt="" src="{{asset('website/assets/imgs/img3-2.png')}}" />
                <p>Listening Services</p>
                <ul>
                    <li>Reputation & perception monitoring</li>
                    <li>Competitive intelligence</li>
                    <li>Marketing campaign evaluation</li>
                    <li>Risk & Crisis recognition and anticipation</li>
                    <li>Risk & Crisis recognition and anticipation</li>
                    <li>Authenticity analysis and bots detection</li>
                </ul>
                <a><button>Self- service Social listening & Profiling Platform</button></a>
            </div>
            <div class="service-card">
                <img id="lis-btn2" loading="lazy" alt="" src="{{asset('website/assets/imgs/img4-2.png')}}" />
                <p>Responsive Solutions</p>
                <ul>
                    <li>Amplification, Mitigation and fight-back Marketing Strategies</li>
                    <li>Reputation management</li>
                    <li>Tactical Content campaigns</li>
                    <li>Bots Neutralisation</li>
                    <li>Influence marketing operations</li>
                    <li>Large scale micro-targetting</li>
                </ul>
                <a><button>Marketing Mix Modeling solutions</button></a>
            </div>
        </div>

    </div>
    <div class="special-content">
        <div class="special-left fadeout">

        </div>
        <div class="special-right fadein">
            <h5 class="h-5">What Makes Us Special?</h5>
            <div class="special-cards">
                <div class="special-card">
                    <h5>The Best Technology (WebInt, OSInt, and Artificial Intelligence)</h5>
                    <p>Our solution combines industry-leading data collection tools, whether through APIs or
                        crawling, to deliver complete and unrivaled tracking.
                    </p>
                </div>
                <div class="special-card">
                    <h5>The Best Marketing Experts (Human Intelligence)</h5>
                    <p>Our experts engage at every stage of the process, from refining search parameters during data
                        collection to identifying actionable insights and optimizing machine learning through
                        systematic
                        data reviews.
                    </p>
                </div>
                <div class="special-card">
                    <h5>The Best of Technological Know-How (Tadafuq) and Marketing Expertise (Elka)</h5>
                    <p>We seamlessly integrate cutting-edge technological capabilities with top-tier research and
                        marketing expertise to deliver exceptional results.
                    </p>
                </div>
                <a href="#getIn"><button id="Get_in_Touch">Get in Touch</button></a>
            </div>
        </div>

    </div>

    <div class="unique-content">
        <div class="unique-cards">
            <h5 class="h-5">What Makes Us Unique?</h5>
            <div class="unique-flip-cards">
                <div class="flip-cards">
                    <div class="card-container">
                        <div class="front">
                            <h5>Multicultural & Multilanguage Team</h5>
                        </div>
                        <div class="back">
                            <h5 class="adres">Multicultural & Multilanguage Team</h5>
                            <div class="div-1">
                                <p>Our diverse team hails from over 20 countries, ensuring thorough linguistic
                                    reviews
                                    of data to accurately attribute and categorize information as necessary.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-cards">
                    <div class="card-container">
                        <div class="front">
                            <h5>Dedicated Success Managers</h5>
                        </div>
                        <div class="back">
                            <h5 class="adres">Dedicated Success Managers</h5>
                            <div class="div-1">
                                <p>Our dedicated customer service is always here to answer your questions and work
                                    with
                                    you on the Journey.F
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-cards">
                    <div class="card-container">
                        <div class="front">
                            <h5>Tailor Made Reports</h5>
                        </div>
                        <div class="back">
                            <h5 class="adres">Tailor Made Reports</h5>
                            <div class="div-1">
                                <p>Unlike other providers, we prioritize targeted social listening with a purpose.
                                    We
                                    don't just flood you with data; we deliver key insights that empower you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-cards">
                    <div class="card-container">
                        <div class="front">
                            <h5>Short Cycle</h5>
                        </div>
                        <div class="back">
                            <h5 class="adres">Short Cycle</h5>
                            <div class="div-1">
                                <p>We blend human expertise with AI-driven technologies to provide faster insights
                                    and
                                    enabling you to anticipate real-time shifts in consumer behavior.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-cards">
                    <div class="card-container">
                        <div class="front">
                            <h5>Dynamic Scope</h5>
                        </div>
                        <div class="back">
                            <h5 class="adres">Dynamic Scope</h5>
                            <div class="div-1">
                                <p>Flexibility and customer centricity are our moto on building long term social
                                    listening strategies with our
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-cards">
                    <div class="card-container">
                        <div class="front">
                            <h5>Wide Coverage</h5>
                        </div>
                        <div class="back">
                            <h5 class="adres">Wide Coverage</h5>
                            <div class="div-1">
                                <p>Our technology uniquely combines web crawling and platform APIs, utilizing two
                                    distinct data collection approaches to maximize the extraction of information.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#getIn"><button id="Get_in_Touch2">Get in Touch</button></a>
        </div>

    </div>

    <div class="sec-4 clients">
        <h5>They Trusted Us</h5>
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img41.png')}}" loading="lazy" alt="Image 1"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img43.png')}}" loading="lazy" alt="Image 2"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img44.png')}}" loading="lazy" alt="Image 3"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img45.png')}}" loading="lazy" alt="Image 4"></div>
            <div class="item change-1"><img src="{{asset('website/assets/imgs/trust/img46-2.jpeg')}}" loading="lazy" alt="Image 5" id="change-4" ></div>
            <div class="item change-2"><img src="{{asset('website/assets/imgs/trust/img47-2.jpeg')}}" loading="lazy" alt="Image 6" id="change-3"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img48.png')}}" loading="lazy" alt="Image 7"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img49.png')}}" loading="lazy" alt="Image 8"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img50.png')}}" loading="lazy" alt="Image 9"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img51.png')}}" loading="lazy" alt="Image 10"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img52.png')}}" loading="lazy" alt="Image 11"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img53.png')}}" loading="lazy" alt="Image 12"></div>
            <div class="item change-3"><img src="{{asset('website/assets/imgs/trust/img54-2.jpeg')}}" loading="lazy" alt="Image 13" id="change-2"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img55.png')}}" loading="lazy" alt="Image 14"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img56.png')}}" loading="lazy" alt="Image 15"></div>
            <div class="item change-4"><img src="{{asset('website/assets/imgs/trust/img57-2.jpeg')}}" loading="lazy" alt="Image 16" id="change-1"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img58.png')}}" loading="lazy" alt="Image 17"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img59.png')}}" loading="lazy" alt="Image 18"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/trust/img60.png')}}" loading="lazy" alt="Image 18"></div>
        </div>
    </div>
    @include('website.layout.form')
</div>
@endsection
@push('scripts')
<script src="{{asset('website/js/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('website/js/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('website/js/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });
    });
</script>
<script>
    
    document.addEventListener("DOMContentLoaded", function() {
        window.dataLayer.push({
            'event': 'pageview',
            'page': {
                'url': window.location.href,
                'title': document.title,
                'category': 'Home'
            }
        });
        // Select buttons to track
        const bookCallButton = document.querySelector("#Book_Call");
        const successStoriesButton = document.querySelector("#Read_Our_Success_Stories");
        const getInTouchButtons = document.querySelectorAll("#Get_in_Touch, #Get_in_Touch2");

        // Add event listener for Book Call button
        bookCallButton?.addEventListener("click", function() {

            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'buttonClick',
                'buttonId': bookCallButton.id,
                'buttonText': bookCallButton.innerText.trim(),
                'buttonURL': bookCallButton.closest("a").href
            });
        });

        // Add event listener for Read Our Success Stories button
        successStoriesButton?.addEventListener("click", function() {

            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'buttonClick',
                'buttonId': successStoriesButton.id,
                'buttonText': successStoriesButton.innerText.trim(),
                'buttonURL': successStoriesButton.closest("a").href
            });
        });

        // Add event listener for each Get in Touch button
        getInTouchButtons.forEach(function(button) {
            button?.addEventListener("click", function() {

                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'buttonClick',
                    'buttonId': button.id,
                    'buttonText': button.innerText.trim(),
                });
            });
        });
    });
</script>


@endpush