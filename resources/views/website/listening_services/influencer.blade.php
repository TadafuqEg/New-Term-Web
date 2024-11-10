@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')

    <div class="sec-1 influenc">
        <div class="sec1-content">

            <h5>Influencer & Profiles<br /> Identification</h5>
            <p>We Harness the power of advanced analytics to connect with key opinion leaders and influencers in
                your industry. We empower you to make data-driven decisions, optimize your outreach strategy, and
                maximize your impact.
            </p>
            <a href='{{url('/contact')}}'><button class="book-call" id="Contact_Us">Contact Us</button></a>
        </div>
    </div>

    <div class="sec-2">
        <div class="sec2-content">
            <h5 class="h-5">Why Influencer & Profiles Identification<br /> Is Important for Your Business?</h5>
            <p class="pp">Why Influencer & Profiles Identification Is Important for Your Business?
                Influencer & Profiles Identification is crucial for enhancing your marketing strategy, boosting
                credibility, and optimizing content. Recognizing these influencers allows your business to:
            </p>
            <!-- <img loading="lazy" alt="" src="../assets/imgs/bac-1.png" /> -->
            <div class="rl" style="position: relative;">
                <img loading="lazy" alt="" src="{{asset('website/assets/imgs/bac-1.png')}}" style="transform: scale(.7);margin-top:-150px" />
                <div class="rl-cards" style="position: absolute; top: 150px; width: 100%;">
                    <div class="monitoring-card">
                        <p>Tap into new and larger audiences through influencer networks</p>
                    </div>
                    <div class="monitoring-card right">
                        <p>Increase interaction rates with trusted voices.</p>
                    </div>
                    <div class="monitoring-card">
                        <p>Increase visibility and recognition within your target market.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="compatitve">
        <h5>How To Identify Profiles &<br /> Influencers?</h5>
        <p>We equip your business with key influencers to leverage their networks and trust to achieve marketing
            success.</p>
        <div class="compatitve-content">
            <!-- <img src="../assets/imgs/img25.png" alt="" loading="lazy" /> -->
            <div class="compatitive-cards">
                <div class="monitoring-card">
                    <h4>Influencer Metrics</h4>
                </div>
                <div class="monitoring-card">
                    <h4>Engagement Rates</h4>
                </div>
                <div class="monitoring-card">
                    <h4>Audience Demographics</h4>
                </div>
                <div class="monitoring-card">
                    <h4>Content Relevance</h4>
                </div>
                <div class="monitoring-card">
                    <h4>Network Analysis</h4>
                </div>
                <div class="monitoring-card">
                    <h4>Authenticity Check</h4>
                </div>
            </div>
        </div>
    </div>

    @include('website.layout.form')
    <div class="self-services">
            <h3>Self-Service Social Listening & Profiling Platform</h3>
            <p>Unlock the power of real-time insights with our Self-Service Social Listening & Profiling Platform. Stay
                ahead of the competition by understanding your audience, monitoring your brand's reputation, and
                identifying key influencers—all in one intuitive dashboard.
            </p>
        <a href="{{url('/hoo_talk')}}"><button id="Take_Control_Today_Go_To_Hoo_Talk">Take Control Today!</button></a>
    </div>
</div>
@endsection
@push('scripts')
<script>
   document.addEventListener("DOMContentLoaded", function() {
        window.dataLayer.push({
            'event': 'pageview',
            'page': {
                'url': window.location.href,
                'title': document.title,
                'category': 'Influencer & Profiles Identification'
            }
        });
    // Select the "Contact Us" and "Elevate Your Strategy Today!" buttons
    const contactButton = document.querySelector("#Contact_Us");
    const elevateButton = document.querySelector("#Take_Control_Today_Go_To_Hoo_Talk");

    // Function to track button clicks
    function trackButtonClick(button, section) {
        if (button) {
            button.addEventListener("click", function() {
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'buttonClick',
                    'buttonId': button.id,
                    'buttonText': button.innerText.trim(),
                    'section': section,
                    'buttonURL': button.closest("a")?.href || '' // Default URL if href is missing
                });
            });
        }
    }

    // Track button clicks for both buttons
    trackButtonClick(contactButton, 'LISTENING SERVICES');
    trackButtonClick(elevateButton, 'LISTENING SERVICES');
});
</script>
@endpush