@extends('website.layout.app')
@section('title', 'Term')
@section('style')
    <link rel="stylesheet" href="{{asset('website/style.css')}}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')
    <div class="markets">
        <div class="markets-content">
            <div class="markets-items" style="width:max-content; margin: auto; padding: 10px 30px;">
                <ul>
                    <li style="font-weight: 900; font-size: 16px;">
                        Industries |
                    </li>
                    <li><a href="{{url('/industries-ministries-departments')}}">Ministries/Departments</a></li>
                    <li class="mark-active"><a href="{{url('/industries-fashion')}}">Fashion</a></li>

                </ul>
            </div>
            <div class="market-flex">
                <h5>Industries</h5>
                <div class="owl-carousel">

                    <div class="act dev"><a href="{{url('/industries-fashion')}}">Fashion</a></div>
                    <div class="dev"><a href="{{url('/industries-ministries-departments')}}">Ministries/Departments</a></div>

                </div>
            </div>
            <div class="abs">
            </div>
            <h5 class="mark-h5">Fashion</h5>
            <p>A leading fashion brand aimed to bolster its market presence and address issues of authenticity and
                brand perception.</p>
            <a href="{{url('/contact')}}"><button class="crypt" id="Connect_With_Us">Connect With Us</button></a>
        </div>
    </div>
    <div class="mark-content">
        <div class="markets-cards">
            <div class="mark-card">
                <h5>Client Challenges :</h5>
                <ul>
                    <li>Navigating challenges related to brand authenticity and online sentiment.</li>
                    <li>Enhancing market visibility and engagement.</li>
                </ul>
            </div>
            <div class="mark-card c-l">
                <h5>Services & Solutions Provided :</h5>
                <ul>
                    <li>Authenticity Analysis & Bots Detection: Identified and addressed fake accounts and
                        misinformation impacting brand perception.</li>
                    <li>Influence Marketing Operations: Collaborated with key influencers to enhance brand
                        visibility and engage target audiences.</li>
                </ul>
            </div>
            <div class="mark-card">
                <h5>Results & Impact :</h5>
                <ul>
                    <li>Strengthened brand authenticity and trust.</li>
                    <li>Increased market visibility and engagement with target audiences.</li>
                </ul>
            </div>
            <a href="{{url('/contact')}}"><button class="crypt-2"id="Connect_With_Us2">Connect With Us</button></a>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{asset('website/logic.js')}}"></script>
<script>
    document.getElementById('Connect_With_Us').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Connect_With_Us',
        'buttonText': this.textContent
        });
    });
    
    document.getElementById('Connect_With_Us2').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Connect_With_Us2',
        'buttonText': this.textContent
        });
    });
    
</script>
@endpush