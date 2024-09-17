@extends('website.layout.app')
@section('title', 'Term-hoo-talk')
@section('style')
    <style>
        /* .log-sign {
            background-image: url(assets/imgs/services/all.gif);
        } */

        .secplus-content {
            width: 90% !important;
        }

        .secplus-content h5 {
            margin: 0 auto !important;
            width: 90% !important;
            font-size: 38px;
        }

        .secplus-content p {
            width: 80%;
        }

        .hoo-h5 {
            margin: 0;
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
            height: 100px;
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
                width: 60%;
                margin-left: 20% !important;
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
                {{-- <h5 class="hoo-h5">Hoo Talk</h5> --}}
                <img class="hoo-img" loading="lazy" alt="" src="{{asset('website/assets/imgs/hootook.svg')}}" style="height:250px"/>
                <h5>Self-Service Social Listening & Profiling Platform</h5>
                <p>Unlock the power of real-time insights with our Self-Service Social Listening & Profiling Platform.
                    Stay ahead of the competition by understanding your audience, monitoring your brand's reputation,
                    and identifying key influencers—all in one intuitive dashboard.
                </p>
                <a href="https://www.hoo-talk.com/" target="blank"><button class="book-call">Take Control Today!</button></a>
            </div>
        </div>

        <div class="hoo-content">
            <div class="hoo-cards">
                <div class="hoo-card">
                    <h5>Real-time Monitoring</h5>
                    <p>Stay updated with instant alerts and detailed reports.</p>
                </div>
                <div class="hoo-card ho-2">
                    <h5>Comprehensive Analytics</h5>
                    <p>Gain actionable insights to drive your strategy.</p>
                </div>
                <div class="hoo-card">
                    <h5>User-Friendly Interface</h5>
                    <p>Easy to navigate, even for beginners.</p>
                </div>
                <div class="hoo-card ho-2">
                    <h5>Cost-Effective Solution</h5>
                    <p>High-quality tools at an affordable price.</p>
                </div>
                <p class="hoo-p">Don't miss out on the opportunity to elevate your brand and make data-driven decisions
                    with confidence.</p>
                <a href="https://www.hoo-talk.com/"target="blank"><button>Get Started Now</button></a>
            </div>

        </div>





</div>
@endsection
@push('scripts')
@endpush