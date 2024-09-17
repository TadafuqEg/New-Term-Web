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
            <a class="monitoring-card" href="{{url('/markets-cryptocurrency')}}" >
                <div>
                    <h5>Cryptocurrency</h5>
                </div>
            </a>
            <a class="monitoring-card" href="{{url('/markets-banking-insurance')}}" >
                <div >
                    <h5>Banking / Insurance</h5>
                </div>
            </a>
            <a class="monitoring-card" href="{{url('/markets-education')}}" >
                <div>
                    <h5>Education</h5>
                </div>
            </a>
           <a class="monitoring-card" href="{{url('/markets-airlines')}}" >
            <div>
                <h5>Airlines</h5>
            </div>
           </a>
            <a class="monitoring-card" href="{{url('/markets-mass-retail')}}" >
                <div>
                    <h5>Mass Retail</h5>
                </div>
            </a>
            <a class="monitoring-card" href="{{url('/markets-telco')}}" >
                <div>
                    <h5>Telco</h5>
                </div>
            </a>
            <a class="monitoring-card" href="{{url('/markets-oil-gas')}}" >
                <div>
                    <h5>Oil & Gas</h5>
                </div>
            </a>
            <a class="monitoring-card" href="{{url('/markets-theme-amusement-parks')}}" >
                <div>
                    <h5>Theme / Amusement Parks</h5>
                </div>
            </a>
            <a class="monitoring-card" href="{{url('/markets-FMCG')}}" >
                <div>
                    <h5>FMCG</h5>
                </div>
            </a>
            <a class="monitoring-card" href="{{url('/markets-luxury')}}" >
                <div>
                    <h5>Luxury</h5>
                </div>
            </a>
            <h5 class="markt" style="display: block; width: 100%;text-align: center; margin: 20px 0;">Industries
            </h5>
            
            <a class="monitoring-card" href="{{url('/industries-ministries-departments')}}" >
                <div>
                    <h5>Ministries / Departments</h5>
                </div>
            </a>
            <a class="monitoring-card" href="{{url('/industries-fashion')}}" >
                <div>
                    <h5>Fashion</h5>
                </div>
            </a>
        </div>


    </div>


</div>
@endsection
@push('scripts')

@endpush