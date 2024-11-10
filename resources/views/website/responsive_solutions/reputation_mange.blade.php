@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain repuation">
    @include('website.layout.fixed_div')

    <div class="sec-1 rep">
        <div class="sec1-content">

            <h5>Reputation Management</h5>
            <p>We offer the necessary tools specialized in Reputation Management to help you safeguard your brand’s
                image, address potential threats, and build a positive, lasting impression
            </p>
            <a href='{{url('/contact')}}'><button class="book-call" id="Contact_Us">Contact Us</button></a>
        </div>
    </div>

    <div class="why-amplify">
        <div class="amplify-content">
            <h5 class="">Why is Reputation<br /> Management Important?</h5>
            <p class="">Why is Reputation Management Important?
                Maintaining a positive reputation is crucial for your brand’s success. We provide tailored
                strategies designed to keep your brand’s reputation intact and ensure it remains resilient against
                crises and risks
            </p>
            <!-- <img loading="lazy" alt="" src="../assets/imgs/img40.png" /> -->
        </div>
    </div>


    <div class="monitoring">
        <h5>How to Implement Reputation Management?</h5>
        <p>We build strategic approaches tailored to your company’s unique needs backed by the research and insights
            capabilities of TERM
        </p>
        <div class="monitoring-content">
            <div class="monitoring-card">
                <h4>Crisis Response Organization</h4>
            </div>
            <div class="monitoring-card">
                <h4>PR Campaigns Planning</h4>
            </div>
            <div class="monitoring-card">
                <h4>Transparency Initiatives Design</h4>
            </div>
            <div class="monitoring-card">
                <h4>Stakeholder Communication Guidelines</h4>
            </div>
            <div class="monitoring-card">
                <h4>Wording and Semantic Field Design</h4>
            </div>
            <div class="monitoring-card">
                <h4>Reputation Repair</h4>
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
   
</script>
@endpush