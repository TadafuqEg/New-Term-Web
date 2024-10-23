@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">
    @include('website.layout.fixed_div')


    <div class="sec-1">
        <div class="sec1-content">
            <h5>Success Stories</h5>
        </div>
    </div>

    <div class="success-stories">
        <h5 class="markt">Markets</h5>
        <div class="monitoring-content succ-stories">
            <a class="monitoring-card" id="Cryptocurrency" href="{{url('/markets-cryptocurrency')}}" >
                <div>
                    <h5>Cryptocurrency</h5>
                </div>
            </a>
            <a class="monitoring-card" id="Banking-Insurance" href="{{url('/markets-banking-insurance')}}" >
                <div >
                    <h5>Banking / Insurance</h5>
                </div>
            </a>
            <a class="monitoring-card" id="Education" href="{{url('/markets-education')}}" >
                <div>
                    <h5>Education</h5>
                </div>
            </a>
           <a class="monitoring-card" id="Airlines" href="{{url('/markets-airlines')}}" >
            <div>
                <h5>Airlines</h5>
            </div>
           </a>
            <a class="monitoring-card" id="Mass-Retail" href="{{url('/markets-mass-retail')}}" >
                <div>
                    <h5>Mass Retail</h5>
                </div>
            </a>
            <a class="monitoring-card" id="Telco" href="{{url('/markets-telco')}}" >
                <div>
                    <h5>Telco</h5>
                </div>
            </a>
            <a class="monitoring-card" id="Oil-Gas" href="{{url('/markets-oil-gas')}}" >
                <div>
                    <h5>Oil & Gas</h5>
                </div>
            </a>
            <a class="monitoring-card" id="Theme-Amusement Parks" href="{{url('/markets-theme-amusement-parks')}}" >
                <div>
                    <h5>Theme / Amusement Parks</h5>
                </div>
            </a>
            <a class="monitoring-card" id="FMCG" href="{{url('/markets-FMCG')}}" >
                <div>
                    <h5>FMCG</h5>
                </div>
            </a>
            <a class="monitoring-card" id="Luxury" href="{{url('/markets-luxury')}}" >
                <div>
                    <h5>Luxury</h5>
                </div>
            </a>
            <h5 class="markt" style="display: block; width: 100%;text-align: center; margin: 20px 0;">Industries
            </h5>
            
            <a class="monitoring-card" id="Ministries-Departments" href="{{url('/industries-ministries-departments')}}" >
                <div>
                    <h5>Ministries / Departments</h5>
                </div>
            </a>
            <a class="monitoring-card" id="Fashion" href="{{url('/industries-fashion')}}" >
                <div>
                    <h5>Fashion</h5>
                </div>
            </a>
        </div>


    </div>


</div>
@endsection
@push('scripts')
<script>
    document.getElementById('Cryptocurrency').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Cryptocurrency',
        'buttonText': 'Cryptocurrency'
        });
    });
    document.getElementById('Fashion').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Fashion',
        'buttonText': 'Fashion'
        });
    });
    document.getElementById('Ministries-Departments').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Ministries-Departments',
        'buttonText': 'Ministries / Departments'
        });
    });
    document.getElementById('Luxury').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Luxury',
        'buttonText': 'Luxury'
        });
    });
    document.getElementById('FMCG').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'FMCG',
        'buttonText': 'FMCG'
        });
    });
    document.getElementById('Theme-Amusement Parks').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Theme-Amusement Parks',
        'buttonText': 'Theme / Amusement Parks'
        });
    });
    document.getElementById('Oil-Gas').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Oil-Gas',
        'buttonText': 'Oil & Gas'
        });
    });
    document.getElementById('Telco').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Telco',
        'buttonText': 'Telco'
        });
    });
    document.getElementById('Mass-Retail').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Mass-Retail',
        'buttonText': 'Mass Retail'
        });
    });
    document.getElementById('Airlines').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Airlines',
        'buttonText': 'Airlines'
        });
    });
    document.getElementById('Education').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Education',
        'buttonText': 'Education'
        });
    });
    document.getElementById('Banking-Insurance').addEventListener('click', function() {
        window.dataLayer.push({
        'event': 'buttonClick',
        'buttonId': 'Banking-Insurance',
        'buttonText': 'Banking / Insurance'
        });
    });
</script>
@endpush