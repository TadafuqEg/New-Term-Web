@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')
    <div class="sec-1 lar-scale">
        <div class="sec1-content">

            <h5>Large scale micro-targeting</h5>
            <p>Unlock the power of precision marketing with TERM’s Large-Scale MicroTargeting solutions. Reach the
                right audience with strategies designed to maximize your impact in the market
            </p>
            <a href='{{url('/contact')}}'><button class="book-call">Contact Us</button></a>
        </div>
    </div>

    <div class="why-amplify">
        <div class="amplify-content">
            <h5 class="">Why Large-Scale Micro-Targeting is Important?</h5>
            <p class="">Why Large-Scale Micro-Targeting is Important?
                In today’s competitive digital landscape, targeting the right audience with precision is key to
                achieving marketing success. TERM offers sophisticated approaches to ensure that your marketing
                efforts are not only efficient but also highly effective, resulting in improved engagement and
                campaigns.
            </p>
            <!-- <img loading="lazy" alt="" src="../assets/imgs/img40.png" /> -->
        </div>
    </div>


    <div class="monitoring">
        <h5>How to Implement Large-Scale<br /> Micro-Targeting?</h5>
        <p> Implementing Large-Scale Micro-Targeting involves a strategic and methodical approach that we offer.</p>
        <div class="monitoring-content">
            <div class="monitoring-card">
                <h4>Audience Segmentation</h4>
            </div>
            <div class="monitoring-card">
                <h4>Personalized Messaging</h4>
            </div>
            <div class="monitoring-card">
                <h4>Geo-targeting</h4>
            </div>
            <div class="monitoring-card">
                <h4>Behavioral Analysis</h4>
            </div>
            <div class="monitoring-card">
                <h4>Data-driven Campaigns</h4>
            </div>
            <div class="monitoring-card">
                <h4>Conversion Optimization</h4>
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