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
                    <li class="mark-active"><a href="{{url('/industries-ministries-departments')}}">Ministries/Departments</a></li>
                    <li><a href="{{url('/industries-fashion')}}">Fashion</a></li>

                </ul>
            </div>
            <div class="market-flex">
                <h5>Industries</h5>
                <div class="owl-carousel">
                    <div class="act dev"><a href="{{url('/industries-ministries-departments')}}">Ministries/Departments</a></div>
                    <div class="dev"><a href="{{url('/industries-fashion')}}">Fashion</a></div>

                </div>
            </div>
            <div class="abs">
            </div>
            <h5 class="mark-h5">Ministries / Departments</h5>
            <p>A government ministry aimed to improve public communication and manage public sentiment effectively
            </p>
            <a href="{{url('/contact')}}"><button class="crypt" id="Talk_to_us">Talk to us</button></a>
        </div>
    </div>
    <div class="mark-content">
        <div class="markets-cards">
            <div class="mark-card">
                <h5>Client Challenges :</h5>
                <ul>
                    <li>Enhancing transparency and responsiveness to public concerns.</li>
                    <li>Managing communication strategies and public relations</li>
                </ul>
            </div>
            <div class="mark-card c-l">
                <h5>Services & Solutions Provided :</h5>
                <ul>
                    <li>Reputation & Perception Monitoring: Monitored public feedback and sentiment to inform
                        communication strategies. 
                    </li>
                    <li>Tactical Content Campaigns: Developed targeted content to address public concerns and
                        improve engagement with constituents.
                    </li>
                </ul>
            </div>
            <div class="mark-card">
                <h5>Results & Impact :</h5>
                <ul>
                    <li>Improved public communication and transparency. </li>
                    <li>Enhanced engagement and public perception of the ministry.</li>
                </ul>
            </div>
            <a href="{{url('/contact')}}"><button class="crypt-2" id="Talk_to_us2">Talk to us</button></a>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{asset('website/logic.js')}}"></script>
<script>
    document.getElementById('Talk_to_us').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Talk_to_us',
        'buttonText': this.textContent
        });
    });
    
    document.getElementById('Talk_to_us2').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Talk_to_us2',
        'buttonText': this.textContent
        });
    });
    
</script>
@endpush