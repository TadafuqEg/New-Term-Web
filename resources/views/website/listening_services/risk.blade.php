@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')

    <div class="sec-1 risk">
        <div class="sec1-content">

            <h5>Risk & Crisis Recognition<br /> And Anticipation</h5>
            <p>The best way to manage a crisis is to prevent one. By recognizing and anticipating risks and crises,
                we stabilize and ensure long time success for your business.
            </p>
            <a href='{{url('/contact')}}'><button class="book-call">Contact Us</button></a>
        </div>
    </div>

    <div class="sec-2 new">
        <div class="sec2-content new-bac">
            <h5 class="h-5">Why Risk & Crisis Recognition and<br /> Anticipation Is Important for Your Business?
            </h5>
            <p class="pp">Every company faces a variety of risks. By recognizing it early we provide a developed
                robust crisis response plan. This ensures your company to bounce back faster from setbacks and
                maintain a competitive edge.
            </p>
            <!-- <img loading="lazy" alt="" src="../assets/imgs/bac-1.png" /> -->
        </div>
    </div>
    <div class="monitoring">
        <h5>How to Recognize and Anticipate<br /> Risk & Crisis?</h5>
        <p>
            We offer a comprehensive set of methods to recognize and anticipate risks and crises effectively to
            ensure that your business is prepared for potential challenges and can respond effectively.
        </p>
        <div class="monitoring-content">
            <div class="monitoring-card">
                <h4>Early Warning Alerts</h4>
            </div>
            <div class="monitoring-card">
                <h4>Negative Sentiment Detection</h4>
            </div>
            <div class="monitoring-card">
                <h4>Incident Tracking</h4>
            </div>
            <div class="monitoring-card">
                <h4>Trend Analysis</h4>
            </div>
            <div class="monitoring-card">
                <h4>Anomalies Detection</h4>
            </div>
            <div class="monitoring-card">
                <h4>Viral Mapping</h4>
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
        <a href="{{url('/hoo_talk')}}"><button>Take Control Today!</button></a>
    </div>
</div>
@endsection
@push('scripts')
   
@endpush