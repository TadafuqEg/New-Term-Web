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
    .secplus-content a button{
        width: max-content !important;
        padding: 10px 40px !important;
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

    .dark .special-cards2 a button:hover {
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
        .special-cards2 {
            height: 1000px;
            background-position: center;
        }

        .special-cards2 .special-card {
            height: 120px;
            width: 100%;
        }

        .special-cards2 a button {
            font-size: 16px;
            width: 60%;
            left: 20%;
        }
        .secplus-content a button{
            width: 250px !important;
        }
    }
</style>
<div class="contain">

    <div class="sec-1 reputation">
        <div class="sec1-content secplus-content">
            <h5 class="hoo-h5">Mass Analytics</h5>
            <h5>Marketing Mix Modeling Solutions</h5>
            <p>Optimize your marketing strategy with our cutting-edge Marketing Mix Modeling Solutions. Harness the
                power of data to balance your marketing and media mix, ensuring every dollar is well spent for
                maximum impact.
            </p>
            <a><button class="book-call">Elevate Your Strategy Today!</button></a>
        </div>
    </div>

    <div class="special-content">
        <div class="special-cards special-cards2">
            <div class="special-card sp-1">
                <h5>Data-Driven Insights</h5>
                <p>Analyze audience, sales, and impact data for informed decision-making.</p>
            </div>
            <div class="special-card sp-2">
                <h5>Optimized Budgeting</h5>
                <p>Allocate resources effectively to boost ROI.</p>
            </div>
            <div class="special-card sp-3">
                <h5>Comprehensive Analysis</h5>
                <p>Understand the effectiveness of each marketing channel.</p>
            </div>
            <div class="special-card sp-2">
                <h5>Tailored Recommendations</h5>
                <p>Get personalized strategies that fit your unique business needs.</p>
            </div>
            <p class="hoo-p">Transform your marketing efforts and achieve superior results with precision and confidence.</p>
            <a href="https://mass-analytics.com/"><button>Start Optimizing Now</button></a>
        </div>

    </div>

</div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
@endpush