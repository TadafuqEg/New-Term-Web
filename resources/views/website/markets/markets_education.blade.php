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
                    <li class="mark-active"><a href="{{url('/markets-education')}}">Education</a></li>
                    <li><a href="{{url('/markets-airlines')}}">Airlines</a></li>
                    <li><a href="{{url('/markets-mass-retail')}}">Mass Retail</a></li>
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
                    <div class="act dev"><a href="{{url('/markets-education')}}">Education</a></div>
                    <div class="dev"><a href="{{url('/markets-airlines')}}">Airlines</a></div>
                    <div class="dev"><a href="{{url('/markets-mass-retail')}}">Mass Retail</a></div>
                    <div class="dev"><a href="{{url('/markets-telco')}}">Telco</a></div>
                    <div class="dev"><a href="{{url('/markets-oil-gas')}}">Oil & Gas</a></div>
                    <div class="dev"><a href="{{url('/markets-theme-amusement-parks')}}">Theme/Amusement Parks</a></div>
                    <div class="dev"><a href="{{url('/markets-FMCG')}}">FMCG</a></div>
                    <div class="dev"><a href="{{url('/markets-luxury')}}">Luxury</a></div>
                    <div class="dev"><a href="{{url('/markets-cryptocurrency')}}">Cryptocurrency</a></div>
                    <div class="dev"><a href="{{url('/markets-banking-insurance')}}">Banking / Insurance</a></div>
                </div>
            </div>
            <div class="abs">
            </div>
            <h5 class="mark-h5">Education</h5>
            <p>A well known University sought to anticipate potential risks and enhance its online presence to
                attract more students.
            </p>
            <a href="{{url('/contact')}}"><button class="crypt"id="Start_With_Us">Start With Us</button></a>
        </div>
    </div>
    <div class="mark-content">
        <div class="markets-cards">
            <div class="mark-card">
                <h5>Client Challenges :</h5>
                <ul>
                    <li>Identifying and addressing emerging risks and negative sentiments.</li>
                    <li>Improving visibility and engagement with prospective students.</li>
                </ul>
            </div>
            <div class="mark-card c-l">
                <h5>Services & Solutions Provided :</h5>
                <ul>
                    <li>Risk & Crisis Recognition and Anticipation: Monitored online discussions and feedback to
                        identify potential risks and emerging issues.
                    </li>
                    <li>Tactical Content Campaigns: Developed targeted content to address concerns and improve
                        engagement with prospective students.
                    </li>
                </ul>
            </div>
            <div class="mark-card">
                <h5>Results & Impact :</h5>
                <ul>
                    <li>Proactively managed potential crises and improved institutional reputation.</li>
                    <li>Increased student engagement and enrollment.</li>
                </ul>
            </div>
            <a href="{{url('/contact')}}"><button class="crypt-2" id="Start_With_Us2">Start With Us</button></a>
        </div>
    </div>

</div>
@endsection
@push('scripts')
<script src="{{asset('website/logic.js')}}"></script>
<script>
   
    
</script>
@endpush