@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')

    <div class="sec-1 marketing">
        <div class="sec1-content">

            <h5>Marketing campaign<br /> Evaluation</h5>
            <p>We assess customer satisfaction, analyze the Return On Investment (ROI), and evaluate market share to
                provide you with a comprehensive understanding of how effectively your marketing budget translates
                into profits and competitive advantage.
            </p>
            <a href='{{url('/contact')}}'><button class="book-call" id="Contact_Us">Contact Us</button></a>
        </div>
    </div>

    <div class="sec-2 new">
        <div class="sec2-content new-bac">
            <h5 class="h-5">Why is it important to evaluate a<br /> marketing campaign?</h5>
            <p class="pp">By evaluating marketing campaigns, we can determine what works and what doesn't with your
                business. This allows you to understand your campaigns performance, your target audience and the
                market shift.
            </p>
            <!-- <img loading="lazy" alt="" src="../assets/imgs/bac-1.png" /> -->
        </div>
    </div>
    <div class="monitoring">
        <h5>How to evaluate a marketing campaign?</h5>
        <p>
            We employ a range of critical methods to provide a thorough evaluation of your marketing campaign.
        </p>
        <div class="compatitve-content">
            <div class="monitoring-card">
                <h4>Compaign Reach</h4>
            </div>
            <div class="monitoring-card">
                <h4>Engagement Metrics</h4>
            </div>
            <div class="monitoring-card">
                <h4>Audience Sentiment</h4>
            </div>
            <div class="monitoring-card">
                <h4>Content Performance</h4>
            </div>
            <div class="monitoring-card">
                <h4>Feedback Analysis</h4>
            </div>
            <div class="monitoring-card">
                <h4>ROI Assessment</h4>
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
    document.getElementById('Contact_Us').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Contact_Us',
        'buttonText': this.textContent
        });
    });
    document.getElementById('Take_Control_Today_Go_To_Hoo_Talk').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Take_Control_Today_Go_To_Hoo_Talk',
        'buttonText': this.textContent
        });
    });
</script>
@endpush