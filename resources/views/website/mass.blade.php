@extends('website.layout.app')
@section('title', 'Term')
@section('style')
    <style>
        /* .log-sign {
            background-image: url(assets/imgs/services/all.gif);
        } */

        .secplus-content {
            width: 90% !important;
        }

        /* .secplus-content h5 {
            margin: 0 !important;
        } */

        .secplus-content h5 {
            margin: 0 auto !important;
            width: 90% !important;
            font-size: 38px !important;
        }


        .secplus-content p {
            width: 65%;
        }

        .secplus-content a button {
            width: max-content !important;
            padding: 12px 40px;
        }

        .hoo-h5 {
            padding-bottom: 10px !important;
        }

        .hoo-content {
            width: 100%;
            height: auto;
        }

        .hoo-cards {
            width: 70%;
            margin: auto;
            border-top: 1px solid #262626;
            margin-top: 50px;
            padding: 100px 0 40px 0;
            background-image: url({{asset('website/assets/imgs/bac-10.png')}});
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
        }

        .hoo-card {
            height: 115px;
            width: 55%;
            background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .3));
            margin-top: 50px;
            color: #fff !important;
            padding: 20px;
            border-radius: 12px;
        }

        .dark .hoo-card {
            background: linear-gradient(rgba(256, 256, 256, .2), rgba(0, 0, 0, .1));
            border: 1px solid #fff;
            border-radius: 12px;
        }

        .hoo-card h5 {
            font-size: 22px;
            font-weight: 700;
        }

        .hoo-card p {
            font-size: 16px;
            font-weight: 400;
            padding: 5px 0;
        }

        .hoo-p {
            margin-top: 100px;
            padding: 20px 0;
            width: 100%;
            text-align: center;
            font-size: 16px;
            font-weight: 400;
        }

        .ho-2 {
            margin-left: 45%;
        }

        .hoo-cards a button {
            font-size: 20px;
            font-weight: 700;
            height: 53px;
            width: 26%;
            margin-left: 37% !important;
            margin: auto;
            cursor: pointer;
            margin-top: 40px;
            background-color: #F05E41;
            border: none;
            border-radius: 12px;
            color: #fff;
        }

        .hoo-cards a button:hover {
            background: transparent;
            border: 1px solid rgba(255, 93, 60, 1);
            color: #FF5C3D;
        }

        @media(max-width:1150px) {
            .hoo-card {
                height: 115px;
            }
        }

        @media(max-width:767px) {
            .hoo-card {
                width: 100%;
                height: 100px;
            }

            .ho-2 {
                margin-left: 0%;
            }

            .hoo-cards {
                width: 80%;
                padding: 0px 0 40px 0;
            }

            .hoo-card h5 {
                font-size: 18px;
                font-weight: 700;
            }

            .hoo-card p {
                font-size: 13px;
            }

            .hoo-p {
                margin-top: 30px;
                font-size: 14px;
            }

            .hoo-cards a button {
                font-size: 17px;
                font-weight: 700;
                height: 53px;
                width: 75%;
                margin-left: 12.5% !important;
                margin-top: 10px;
            }

            .secplus-content h5 {
                font-size: 25px !important;
            }
        }
    </style>
@endsection
@section('content')

<div class="contain">
    @include('website.layout.fixed_div')

    <div class="sec-1 log-sign">
        <div class="sec1-content secplus-content">
            <h5 class="hoo-h5">Mass Analytics</h5>
            <h5>Marketing Mix Modeling Solutions</h5>
            <p>Optimize your marketing strategy with our cutting-edge Marketing Mix Modeling Solutions. Harness the
                power of data to balance your marketing and media mix, ensuring every dollar is well spent for
                maximum impact.
            </p>
            <a href="https://mass-analytics.com/" target="blank"><button class="book-call">Elevate Your Strategy
                    Today!</button></a>
        </div>
    </div>
    <div class="hoo-content">
        <div class="hoo-cards">
            <div class="hoo-card">
                <h5>Data-Driven Insights</h5>
                <p>Analyze audience, sales, and impact data for informed decision-making.</p>
            </div>
            <div class="hoo-card ho-2">
                <h5>Optimized Budgeting</h5>
                <p>Allocate resources effectively to boost ROI.</p>
            </div>
            <div class="hoo-card">
                <h5>Comprehensive Analysis</h5>
                <p>Understand the effectiveness of each marketing channel.</p>
            </div>
            <div class="hoo-card ho-2">
                <h5>Tailored Recommendations</h5>
                <p>Get personalized strategies that fit your unique business needs.</p>
            </div>
            <p class="hoo-p">Transform your marketing efforts and achieve superior results with precision and
                confidence.</p>
            <a href="https://mass-analytics.com/" target="blank"><button>Start Optimizing Now</button></a>
        </div>

    </div>


</div>
@endsection
@push('scripts')
@endpush