@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')
    <div class="sec-1 competitive">
        <div class="sec1-content">

            <h5>Competitive intelligence</h5>
            <p>We gather relevant and reliable information about your competitors, analyzing every facet of the data
                to establish and enhance a competitive advantage for you
            </p>
            <a href='{{url('/contact')}}'><button class="book-call" id="Contact_Us">Contact Us</button></a>
        </div>
    </div>

    <div class="sec-2 new">
        <div class="sec2-content new-bac">
            <h5 class="h-5">Why competitive <br />intelligence matters?</h5>
            <p class="pp"> Competitive intelligence offers invaluable competitive insights and impactful data about
                your competitors' landscape, their tactics and their behaviors. Knowing their objectives enables you
                to keep track of them, shape your brand and boost your strategy in the best way to get ahead.
            </p>
            <!-- <img loading="lazy" alt="" src="../assets/imgs/bac-1.png" /> -->
        </div>
    </div>
    <div class="compatitve">
        <h5>How to gather competitive<br /> intelligence?</h5>
        <p>Our Competitive Intelligence offers your business a deep understanding of the market dynamics and
            strategic insights using proven techniques
        </p>
        <div class="compatitve-content ">
            <!-- <img src="../assets/imgs/img20.png" alt=""> -->
            <div class="compatitive-cards">
                <div class="compatitive-card">
                    <h4>Competitive Benchmarking</h4>
                </div>
                <div class="compatitive-card">
                    <h4>Market Trends</h4>
                </div>
                <div class="compatitive-card">
                    <h4>Share of Attention / Share of voice</h4>
                </div>
                <div class="compatitive-card">
                    <h4>SWOT Analysis</h4>
                </div>
                <div class="compatitive-card">
                    <h4>Innovation Tracking</h4>
                </div>
                <div class="compatitive-card">
                    <h4>Industry News monitoring</h4>
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
                'category': 'Competitive intelligence'
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