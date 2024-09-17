@extends('website.layout.app')
@section('title', 'Term')
@section('style')
    <link rel="stylesheet" href="{{asset('website/style.css')}}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')


    <div class="markets">
        <div class="markets-content">
            <div class="markets-items">
                <ul>
                    <li style="font-weight: 900; font-size: 16px;">
                        Markets |
                    </li>
                    <li><a href="{{url('/markets-cryptocurrency')}}">Cryptocurrency</a></li>
                    <li><a href="{{url('/markets-banking-insurance')}}">Banking / Insurance</a></li>
                    <li><a href="{{url('/markets-education')}}">Education</a></li>
                    <li><a href="{{url('/markets-airlines')}}">Airlines</a></li>
                    <li class="mark-active"><a href="{{url('/markets-mass-retail')}}">Mass Retail</a></li>
                    <li><a href="{{url('/markets-telco')}}">Telco</a></li>
                    <li><a href="{{url('/markets-oil-gas')}}">Oil & Gas</a></li>
                    <li><a href="{{url('/markets-theme-amusement-parks')}}">Theme/Amusement Parks</a></li>
                    <li><a href="{{url('/markets-FMCG')}}">FMCG</a></li>
                    <li><a href="{{url('/markets-luxury')}}">Luxury</a></li>
                </ul>
            </div>
            <div class="market-flex">
                <h5>Markets</h5>
                <div class="owl-carousel">
                    <div class="act dev"><a href="{{url('/markets-mass-retail')}}">Mass Retail</a></div>
                    <div class="dev"><a href="{{url('/markets-telco')}}">Telco</a></div>
                    <div class="dev"><a href="{{url('/markets-oil-gas')}}">Oil & Gas</a></div>
                    <div class="dev"><a href="{{url('/markets-theme-amusement-parks')}}">Theme/Amusement Parks</a></div>
                    <div class="dev"><a href="{{url('/markets-FMCG')}}">FMCG</a></div>
                    <div class="dev"><a href="{{url('/markets-luxury')}}">Luxury</a></div>
                    <div class="dev"><a href="{{url('/markets-cryptocurrency')}}">Cryptocurrency</a></div>
                    <div class="dev"><a href="{{url('/markets-banking-insurance')}}">Banking / Insurance</a></div>
                    <div class="dev"><a href="{{url('/markets-education')}}">Education</a></div>
                    <div class="dev"><a href="{{url('/markets-airlines')}}">Airlines</a></div>
                </div>
            </div>
            <div class="abs">
            </div>
            <h5 class="mark-h5">Mass Retail</h5>
            <p>A major retail chain aimed to optimize its marketing strategies and address competitive challenges in
                a dynamic market.
            </p>
            <a href="{{url('/contact')}}"><button class="crypt">Let’s Chat</button></a>
        </div>
    </div>
    <div class="mark-content">
        <div class="markets-cards">
            <div class="mark-card">
                <h5>Client Challenges :</h5>
                <ul>
                    <li>Evaluating marketing campaign effectiveness.</li>
                    <li>Gaining insights into competitors' strategies and market trends.</li>
                </ul>
            </div>
            <div class="mark-card c-l">
                <h5>Services & Solutions Provided :</h5>
                <ul>
                    <li>Marketing Campaign Evaluation: Assessed the performance and impact of promotional campaigns
                        to refine marketing strategies.
                    </li>
                    <li>Competitive Intelligence: Conducted competitive analysis to understand market positioning
                        and inform strategic decisions.
                    </li>
                </ul>
            </div>
            <div class="mark-card">
                <h5>Results & Impact :</h5>
                <ul>
                    <li>Optimized marketing campaigns and increased promotional effectiveness.</li>
                    <li>Enhanced competitive positioning and strategic insights.</li>
                </ul>
            </div>
            <a href="{{url('/contact')}}"><button class="crypt-2">Let’s Chat</button></a>
        </div>
    </div>


</div>
@endsection
@push('scripts')
<script src="{{asset('website/logic.js')}}"></script>
@endpush