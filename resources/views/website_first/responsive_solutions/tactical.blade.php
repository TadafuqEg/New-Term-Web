@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">

    <div class="sec-1 tactical">
        <!-- <img loading="lazy" alt="" src="../assets/imgs/mov3.gif" /> -->
        <div class="sec1-content">

            <h5>Tactical Content<br /> campaigns</h5>
            <p>We deliver strategic, high-impact content that resonates with your audience and elevates your brand
            </p>
            <a href="{{url('/contact')}}"><button class="book-call">Contact Us</button></a>
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
            <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img40.png')}}" />
        </div>
    </div>


    <div class="monitoring tactical-bottom">
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
        <a href="{{url('/mass')}}"><button>Elevate Your Strategy Today!</button></a>
    </div>
</div>
@endsection
@push('scripts')
   
@endpush