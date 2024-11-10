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
                    <li><a href="{{url('/markets-mass-retail')}}">Mass Retail</a></li>
                    <li><a href="{{url('/markets-telco')}}">Telco</a></li>
                    <li class="mark-active"><a href="{{url('/markets-oil-gas')}}">Oil & Gas</a></li>
                    <li><a href="{{url('/markets-theme-amusement-parks')}}">Theme/Amusement Parks</a></li>
                    <li><a href="{{url('/markets-FMCG')}}">FMCG</a></li>
                    <li><a href="{{url('/markets-luxury')}}">Luxury</a></li>
                </ul>
            </div>
            <div class="market-flex">
                <h5>Markets</h5>
                <div class="owl-carousel">
                    
                    <div class="act dev"><a href="{{url('/markets-oil-gas')}}">Oil & Gas</a></div>
                    <div class="dev"><a href="{{url('/markets-theme-amusement-parks')}}">Theme/Amusement Parks</a></div>
                    <div class="dev"><a href="{{url('/markets-FMCG')}}">FMCG</a></div>
                    <div class="dev"><a href="{{url('/markets-luxury')}}">Luxury</a></div>
                    <div class="dev"><a href="{{url('/markets-cryptocurrency')}}">Cryptocurrency</a></div>
                    <div class="dev"><a href="{{url('/markets-banking-insurance')}}">Banking / Insurance</a></div>
                    <div class="dev"><a href="{{url('/markets-education')}}">Education</a></div>
                    <div class="dev"><a href="{{url('/markets-airlines')}}">Airlines</a></div>
                    <div class="dev"><a href="{{url('/markets-mass-retail')}}">Mass Retail</a></div>
                    <div class="dev"><a href="{{url('/markets-telco')}}">Telco</a></div>
                </div>
            </div>
            <div class="abs">
            </div>
            <h5 class="mark-h5">Oil & Gas</h5>
            <p>A major oil and gas company aimed to enhance its public image and manage regulatory
                challenges effectively.</p>
            <a href="{{url('/contact')}}"><button class="crypt" id="Let's_talk">Let’s Talk</button></a>
        </div>
    </div>
    <div class="mark-content">
        <div class="markets-cards">
            <div class="mark-card">
                <h5>Client Challenges :</h5>
                <ul>
                    <li>Managing public perception and regulatory compliance.</li>
                    <li>Addressing environmental and operational concerns.</li>
                </ul>
            </div>
            <div class="mark-card c-l">
                <h5>Services & Solutions Provided :</h5>
                <ul>
                    <li>Reputation & Perception Monitoring: Monitored public sentiment and regulatory
                        discussions to manage the company's reputation.
                    </li>
                    <li>Mitigation and Fight-back Marketing Strategies: Developed proactive communication
strategies and campaigns to address negative perceptions and highlight positive
initiatives.
                    </li>
                </ul>
            </div>
            <div class="mark-card">
                <h5>Results & Impact :</h5>
                <ul>
                    <li>Improved public image and regulatory compliance.</li>
                    <li>Enhanced reputation and stakeholder relations.</li>
                </ul>
            </div>
            <a href="{{url('/contact')}}"><button class="crypt-2" id="Let's_talk2">Let’s Talk</button></a>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{asset('website/logic.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.dataLayer.push({
            'event': 'pageview',
            'page': {
                'url': window.location.href,
                'title': document.title,
                'category': 'Oil & Gas'
            }
        });
    // Select "Talk to our experts" buttons to track
    const talkToExpertsButtons = document.querySelectorAll("#Let's_talk, #Let's_talk2");

    // Add event listener for each "Talk to our experts" button
    talkToExpertsButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'buttonClick',
                'buttonId': button.id,
                'buttonText': button.innerText.trim(),
                'section': 'Oil & Gas',
                'buttonURL': button.closest("a")?.href || '{{url("/contact")}}' // Default URL if href is missing
            });
        });
    });
});
    
</script>
@endpush