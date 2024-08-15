@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">

    <div class="sec-1 amplify">
        <!-- <img loading="lazy" alt="" src="../assets/imgs/mov3.gif" /> -->
        <div class="sec1-content">

            <h5>Amplification, Mitigation and fight-back Marketing Strategies</h5>
            <p>We offer a wide range of services and customized marketing strategies to increase your brand’s voice,
                mitigate potential risks and provide you the tools necessary to fight back against unforeseen
                challenges to ensure your brand stands strong in a competitive market
            </p>
            <a href="{{url('/contact')}}"><button class="book-call">Contact Us</button></a>
        </div>
    </div>

    <div class="why-amplify">
        <div class="amplify-content">
            <h5 class="">Why Amplification, Mitigation, and <br />Fight-Back Marketing Strategies are Important?
            </h5>
            <p class="">Why Amplification, Mitigation, and Fight-Back Marketing Strategies are Important?
                For technological businesses where competition for audience attention is high, effective marketing
                strategy is key to achieving business growth and we ensure your brand maintains positive reputation
                even during crisis
            </p>
            <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img40.png')}}" />
        </div>
    </div>


    <div class="monitoring amplify-bottom">
        <h5>How to Implement Amplification,<br /> Mitigation, and Fight-Back Strategies?</h5>
        <p>We offer a strategic approach according to your unique business needs</p>
        <div class="monitoring-content">
            <div class="monitoring-card">
                <h4>Message Amplification</h4>
            </div>
            <div class="monitoring-card">
                <h4>Positive Content Creation</h4>
            </div>
            <div class="monitoring-card">
                <h4>Counter-narrative Development</h4>
            </div>
            <div class="monitoring-card">
                <h4>Influencer Partnerships</h4>
            </div>
            <div class="monitoring-card">
                <h4>Crisis Communication</h4>
            </div>
            <div class="monitoring-card">
                <h4>Audience Engagement</h4>
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
        <a><button>Elevate Your Strategy Today!</button></a>
    </div>
</div>
@endsection
@push('scripts')
   
@endpush