@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">

    <div class="sec-1">
        <!-- <img loading="lazy" alt="" src="../assets/imgs/mov3.gif" /> -->
        <div class="sec1-content">

            <h5>Influence marketing<br /> operations</h5>
            <p>In this digital age, influencers play a pivotal role in shaping consumer opinions and driving
                purchasing decisions. At TERM, we ensure that your brand’s message is delivered authentically and
                effectively to your target audience.
            </p>
            <a href="{{url('/contact')}}"><button class="book-call">Contact Us</button></a>
        </div>
    </div>

    <div class="why-amplify">
        <div class="amplify-content">
            <h5 class="">Why Influence Marketing Operations<br /> are Important?</h5>
            <p class="">Why Influence Marketing Operations are Important?
                Influence Marketing Operations are crucial for enhancing your brand’s presence and credibility. At
                TERM, we drive significant traffic to your business, converting engaged followers into leads and
                customers.
            </p>
            <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img40.png')}}" />
        </div>
    </div>


    <div class="monitoring">
        <h5>How to Implement Influence Marketing Operations?</h5>
        <p>Implementing effective Influence Marketing Operations involves a strategic and tailored approach. At
            TERM, we execute an all-encompassing analysis of market dynamics to boost your business
        </p>
        <div class="monitoring-content">
            <div class="monitoring-card">
                <h4>Influencer Selection</h4>
            </div>
            <div class="monitoring-card">
                <h4>Campaign Coordination</h4>
            </div>
            <div class="monitoring-card">
                <h4>Content Collaboration</h4>
            </div>
            <div class="monitoring-card">
                <h4>Performance Metrics</h4>
            </div>
            <div class="monitoring-card">
                <h4>Contract Management</h4>
            </div>
            <div class="monitoring-card">
                <h4>Audience Analysis</h4>
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