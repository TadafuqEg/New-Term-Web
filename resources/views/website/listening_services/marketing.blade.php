@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">

    <div class="sec-1 marketing">
        <!-- <img loading="lazy" alt="" src="../assets/imgs/mov3.gif" /> -->
        <div class="sec1-content">

            <h5>Marketing campaign<br /> Evaluation</h5>
            <p>We assess customer satisfaction, analyze the Return On Investment (ROI), and evaluate market share to
                provide you with a comprehensive understanding of how effectively your marketing budget translates
                into profits and competitive advantage.
            </p>
            <a href="{{url('/contact')}}"><button class="book-call">Contact Us</button></a>
        </div>
    </div>

    <div class="sec-2">
        <div class="sec2-content">
            <h5 class="h-5">Why is it important to evaluate a<br /> marketing campaign?</h5>
            <p class="pp">By evaluating marketing campaigns, we can determine what works and what doesn't with your
                business. This allows you to understand your campaigns performance, your target audience and the
                market shift.
            </p>
            <img loading="lazy" alt="" src="{{asset('website/assets/imgs/bac-1.png')}}" />
        </div>
    </div>
    <div class="monitoring">
        <h5>How to evaluate a marketing campaign?</h5>
        <p>
            We employ a range of critical methods to provide a thorough evaluation of your marketing campaign.
        </p>
        <div class="marketing-content">
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
        <a><button>Take Control Today!</button></a>
    </div>
</div>
@endsection
@push('scripts')
   
@endpush