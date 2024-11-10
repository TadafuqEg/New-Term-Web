@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')
    <div class="sec-1 tactical">
        <div class="sec1-content">
            <h5>Tactical Content<br /> campaigns</h5>
            <p>We deliver strategic, high-impact content that resonates with your audience and elevates your brand
            </p>
            <a href='{{url('/contact')}}'><button class="book-call" id="Contact_Us">Contact Us</button></a>
        </div>
    </div>

    <div class="why-amplify">
        <div class="amplify-content">
            <h5 class="">Why Tactical Content Campaigns are Important?</h5>
            <p class="">Why Tactical Content Campaigns are Important?
                At Term, our Tactical Content Campaigns include a variety of services to meet your specific needs to
                build and maintain a strong brand presence, to quickly adapt to market changes and stay relevant and
                to increase visibility
            </p>
            <!-- <img loading="lazy" alt="" src="../assets/imgs/img40.png" /> -->
        </div>
    </div>


    <div class="monitoring">
        <h5>How to Implement Tactical Content Campaigns?</h5>
        <p>We’re pioneering a fresh approach to implement tactical content campaigns. We ensure your needs and behaviors guide every decision we make</p>
        <div class="monitoring-content">
            <div class="monitoring-card">
                <h4>Content Calendar</h4>
            </div>
            <div class="monitoring-card">
                <h4>Targeted Messaging</h4>
            </div>
            <div class="monitoring-card">
                <h4>Multi-channel Distribution</h4>
            </div>
            <div class="monitoring-card">
                <h4>Visual Storytelling</h4>
            </div>
            <div class="monitoring-card">
                <h4>Performance Tracking</h4>
            </div>
            <div class="monitoring-card">
                <h4>Audience Feedback Integration</h4>
            </div>

        </div>
    </div>


    @include('website.layout.form')
    <div class="self-services">
        <h3>Marketing Mix Modeling Solutions</h3>
        <p>Optimize your marketing strategy with our cutting-edge Marketing Mix Modeling Solutions. Harness the
            power of data to balance your marketing and media mix, ensuring every dollar is well spent for maximum
            impact.
        </p>
        <a href="{{url('/mass')}}"><button id="Elevate_Your_Strategy_Today_Go_To_Mass">Elevate Your Strategy Today!</button></a>
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
                'category': 'Tactical Content campaigns'
            }
        });
    // Select the "Contact Us" and "Elevate Your Strategy Today!" buttons
    const contactButton = document.querySelector("#Contact_Us");
    const elevateButton = document.querySelector("#Elevate_Your_Strategy_Today_Go_To_Mass");

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
    trackButtonClick(contactButton, 'RESPONSIVE SOLUTIONS');
    trackButtonClick(elevateButton, 'RESPONSIVE SOLUTIONS');
});
</script>
@endpush