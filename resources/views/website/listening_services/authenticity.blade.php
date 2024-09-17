@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')
    <div class="sec-1 auth">
        <div class="sec1-content">

            <h5>Authenticity Analysis, Fact<br /> Checking & Bots Detection</h5>
            <p>We provide advanced tools to ensure your online interactions are genuine. We identify authentic
                profiles, detect bots, and safeguard your brand's reputation from bad actors who try to link your
                brand with misleading & fake news, while optimizing your marketing efforts.
            </p>
            <a href='{{url('/contact')}}'><button class="book-call">Contact Us</button></a>
        </div>
    </div>

    <div class="sec-2 new">
        <div class="sec2-content new-bac">
            <h5 class="h-5 plus">Why Authenticity Analysis, Fact<br /> Checking & Bots Detection are Important?
            </h5>
            <p class="pp plus-2">Ensuring the authenticity of your online interactions is crucial for maintaining
                trust and
                optimizing your marketing efforts. This allocates resources effectively and prevents fraudulent
                activities and safeguard your online community, effectively disarming any threat actors from
                associating you with any negative branding.
            </p>
            <!-- <img loading="lazy" alt="" src="../assets/imgs/bac-1.png" /> -->
        </div>
    </div>

    
    <div class="compatitve">
        <h5>How To Analyze Authenticity, Fact-Check & Detect Bots?</h5>
        <p>OWe offer tools to identify authentic profiles and detect bots to ensure the integrity of your online
            presence, including (but not limited to) direct access to credible networks of fact checking worldwide
            and on a regional level.
        </p>
        <div class="compatitve-content">
            <!-- <img src="../assets/imgs/img26.png" alt=""> -->
            <div class="compatitive-cards authenticity-cards">
                <div class="compatitive-card">
                    <h4>Anomalous Patterns</h4>
                </div>
                <div class="compatitive-card">
                    <h4>Fake Account Identification</h4>
                </div>
                <div class="compatitive-card">
                    <h4>Interaction Quality</h4>
                </div>
                <div class="compatitive-card">
                    <h4>Content Authenticity</h4>
                </div>
                <div class="compatitive-card">
                    <h4>Impact Analysis</h4>
                </div>
                <div class="compatitive-card">
                    <h4>Network Behavior Analysis</h4>
                </div>
                <div class="compatitive-card" style="width: 98%;">
                    <h4>Intermediation and assistance in neutralizing bots and malicious accounts</h4>
                </div>
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
        <a href='{{url('/hoo_talk')}}'><button>Take Control Today!</button></a>
    </div>
</div>
@endsection
@push('scripts')
   
@endpush