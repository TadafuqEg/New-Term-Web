@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')
    <div class="sec-1 reputation">
        <div class="sec1-content">
            <h5>Reputation & Perception <br /> Monitoring</h5>
            <p>It’s not about spreading information, it’s about maintaining a positive brand image with one of the
                most powerful tools of our company: Reputation Social Listening. This allows your business to
                monitor, analyze and make vital digital marketing strategies.
            </p>
            <a href='{{url('/contact')}}'><button class="book-call" id="Contact_Us">Contact Us</button></a>
        </div>
    </div>

    <div class="sec-2 new">
        <div class="sec2-content new-bac">
            <h5 class="h-5">Why reputation & perception <br /> monitoring are so important?</h5>
            <p class="pp">In the age where social media platforms serve as hubs of public opinion, it is important
                to
                understand how your brand/company is perceived online. Reputation social listening enables you to
                proactively improve your brand image, monitor customer relationships and to detect potential crises
                early and take the necessary measures before the damage spiral out of control.
            </p>
            <!-- <img loading="lazy" alt="" src="../assets/imgs/bac-1.png" /> -->
        </div>
    </div>
    <div class="monitoring">
        <h5>How do reputation and perception<br /> monitoring work?</h5>
        <p>Our reputation & perception monitoring system offers you innovative approaches to take your brand’s
            online reputation to new heights.
        </p>
        <div class="monitoring-content">
            <div class="monitoring-card">
                <h4>Keyword Tracking</h4>
            </div>
            <div class="monitoring-card">
                <h4>Sentiment Analysis</h4>
            </div>
            <div class="monitoring-card">
                <h4>Trend Identification</h4>
            </div>
            <div class="monitoring-card">
                <h4>Audience Profiling</h4>
            </div>
            <div class="monitoring-card">
                <h4>Real-time Monitoring</h4>
            </div>
            <div class="monitoring-card">
                <h4>Risk Alerts</h4>
            </div>
            <div class="monitoring-card">
                <h4>Topics and Themes analysis</h4>
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
   
</script>
@endpush