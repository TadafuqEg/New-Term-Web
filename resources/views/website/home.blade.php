@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">

    <div class="sec-1">
        <!-- <img loading="lazy" alt="" src="./assets/imgs/mov3.gif" /> -->
        <div class="sec1-content">

            <h5>Listen, Respond, Succeed</h5>
            <p>
                We provide the perfect combination of data-driven insights and human expertise to enable our clients
                to make strategic decisions backed by comprehensive evidence
            </p>
            <a><button class="book-call">Book a Call</button></a>
        </div>
    </div>

    <div class="sec-2">
        <div class="sec2-content">
            <h5>What we do?</h5>
            <p>At TERM, we're dedicated to listening, acting, and ensuring our clients' success. We redefine
                audience engagement by uncovering growth opportunities through advanced social listening,
                comprehensive consumer research, and strategic consultancy.</p><br />

            <p> While our insights empower you to align your brand, marketing, and product strategies with consumer
                demands and market dynamics, our responsive solutions equip you with tools for influencing and
                safeguarding your brand's reputation among your target audiences.</p>
            <br />

            <p>This holistic approach ensures that your business decisions are informed and effective and that you
                are empowered to grow and protect your brand and market position.</p><br />
            </p>
            <a href="{{url('/success_stories')}}"><button class="read">Read our Success Stories</button></a>
            <img loading="lazy" alt="" src="{{asset('website/assets/imgs/bac-1.png')}}" />
        </div>
    </div>

    <div class="sec-3 services">
        <h5 class="h-5">Our Services & Solutions</h5>
        <div class="services-cards">
            <div class="service-card">
                <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img3.png')}}" />
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
                <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img4.png')}}" />
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
        <h5 class="h-5">What Makes Us Special?</h5>
        <div class="special-cards">
            <div class="special-card sp-1">
                <h5>The Best Technology (WebInt, OSInt, and Artificial Intelligence)</h5>
                <p>Our solution combines industry-leading data collection tools, whether through APIs or
                    crawling, to deliver complete and unrivaled tracking.
                </p>
            </div>
            <div class="special-card sp-2">
                <h5>The Best Marketing Experts (Human Intelligence)</h5>
                <p>Our experts engage at every stage of the process, from refining search parameters during data
                    collection to identifying actionable insights and optimizing machine learning through systematic
                    data reviews.
                </p>
            </div>
            <div class="special-card sp-3">
                <h5>The Best of Technological Know-How (Tadafuq) and Marketing Expertise (Elka)</h5>
                <p>We seamlessly integrate cutting-edge technological capabilities with top-tier research and
                    marketing expertise to deliver exceptional results.
                </p>
            </div>
            <a href="#getIn"><button>Get in Touch</button></a>
        </div>

    </div>

    <div class="unique-content">

        <div class="unique-cards">
            <h5 class="h-5">What Makes Us Unique?</h5>
            <div class="unique-circles">

                <div class="circle">
                    <div class="circle-content">
                        <p>Multicultural & Multilanguage<br /> Team</p>
                        <p class="d-n">circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content">
                        <p>Dedicated Success Managers</p>
                        <p class="d-n">circle 2 circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content">
                        <p>Tailor<br /> Made <br />Reports</p>
                        <p class="d-n">circle 3 circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content">
                        <p>Short Cycle</p>
                        <p class="d-n">circle 4 circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content">
                        <p>Dynamic Scope</p>
                        <p class="d-n">circle 5 circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content .circle-content-1">
                        <p>Wide Coverage</p>
                        <p class="d-n">circle 6 circle 1 Multicultural & Multilanguage Team </p>
                    </div>
                </div>
            </div>
            <a href="#getIn"><button>Get in Touch</button></a>
        </div>
    </div>

    <div class="sec-4 clients">
        <h5>They Trusted Us</h5>
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 1"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 2"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 3"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 4"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 5"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 6"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 7"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 8"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 9"></div>
        </div>
    </div>
    @include('website.layout.form')
</div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endpush