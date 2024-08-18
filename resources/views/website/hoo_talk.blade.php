@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<style>
    .secplus-content {
        width: 90% !important;
    }

    .secplus-content h5 {
        margin: 0 !important;
    }

    .secplus-content p {
        width: 80%;
    }

    .hoo-h5 {
        padding-bottom: 40px !important;
    }

    .special-cards2 {
        height: 1150px;
        border-bottom: none !important;
        background-image: url("{{ asset('website/assets/imgs/bac-10.png') }}");
        padding-top: 100px;
    }

    .special-cards2 a button {
        font-size: 21px;
        height: 53px;
        width: 26%;
        left: 37%;
        margin: auto;
        cursor: pointer;
    }
    .dark .special-cards2 a button:hover{
        background: transparent;
        border: 1px solid rgba(255, 93, 60, 1);
        color: #FF5C3D;
    }

    .special-cards2 .special-card {
        height: 130px;
        width: 60%;
        background: linear-gradient(rgba(128, 125, 125, 0.5), rgba(141, 140, 140, 0));
    }

    .hoo-p {
        position: absolute;
        top: 77%;
        left: 0;
        width: 100%;
        text-align: center;
    }

    @media(max-width:900px) {
        .special-cards2 {
            background-position: top;
        }

        .special-cards2 .special-card {
            height: 120px;
            width: 70%;
        }

        .hoo-p {
            padding: 0 10%;
        }
    }

    @media(max-width:767px) {
        .special-cards2{
            height: 1000px;
            background-position: center;
        }
        .special-cards2 .special-card {
            height: 120px;
            width: 100%;
        }

        .special-cards2 a button {
            font-size: 18px;
            width: 50%;
            left: 25%;
        }
    }
</style>
<div class="contain">

    <div class="sec-1 reputation">
        <div class="sec1-content secplus-content">
            <h5 class="hoo-h5">HOOTALK</h5>
            <h5>Self-Service Social Listening & Profiling Platform</h5>
            <p>Unlock the power of real-time insights with our Self-Service Social Listening & Profiling Platform.
                Stay ahead of the competition by understanding your audience, monitoring your brand's reputation,
                and identifying key influencers—all in one intuitive dashboard.
            </p>
            <a><button class="book-call">Take Control Today!</button></a>
        </div>
    </div>

    <div class="special-content">
        <div class="special-cards special-cards2">
            <div class="special-card sp-1">
                <h5>Real-time Monitoring</h5>
                <p>Stay updated with instant alerts and detailed reports.</p>
            </div>
            <div class="special-card sp-2">
                <h5>Comprehensive Analytics</h5>
                <p>Gain actionable insights to drive your strategy.</p>
            </div>
            <div class="special-card sp-3">
                <h5>User-Friendly Interface</h5>
                <p>Easy to navigate, even for beginners.</p>
            </div>
            <div class="special-card sp-2">
                <h5>Cost-Effective Solution</h5>
                <p>High-quality tools at an affordable price.</p>
            </div>
            <p class="hoo-p">Don't miss out on the opportunity to elevate your brand and make data-driven decisions
                with confidence.</p>
            <a href="https://www.hoo-talk.com/"><button>Get Started Now</button></a>
        </div>

    </div>

</div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
@endpush