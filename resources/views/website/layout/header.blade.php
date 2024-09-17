<div class="head">
    <nav class="navbar">
        <div class="content">
            <div class="logo">
                <a href="{{url('/')}}"><img id="logo-img" loading="lazy" src="{{asset('website/assets/imgs/logo2.svg')}}" /></a>
            </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="{{url('/')}}" class="{{ Request::is('/') ? 'f-l' : '' }} m-l"><span></span>Home</a></li>
                <li><a href="{{url('/about_us')}}" class="{{ Request::is('about_us') ? 'f-l' : '' }}"><span></span>About Us</a></li>
                <li class="navbar-item">
                    <a class="{{ Request::is('reputation') || Request::is('competitive') || Request::is('marketing') || Request::is('risk') || Request::is('influencer') || Request::is('authenticity') ? 'f-l' : '' }}"><span></span>LISTENING SERVICES <i class="fas fa-caret-down pp"></i></a>
                    <div class="dropdown-content">
                        <a href="{{url('/reputation')}}">Reputation & Perception Monitoring</a>
                        <a href="{{url('/competitive')}}">Competitive intelligence</a>
                        <a href="{{url('/marketing')}}">Marketing campaign Evaluation</a>
                        <a href="{{url('/risk')}}">Risk & Crisis Recognition And Anticipation</a>
                        <a href="{{url('/influencer')}}">Influencer & Profiles Identification</a>
                        <a href="{{url('/authenticity')}}">Authenticity Analysis, Fact Checking & Bots
                            Detection</a>
                    </div>
                </li>
                <li class="navbar-item">
                    <a class="{{ Request::is('amplification') || Request::is('reputation-mange') || Request::is('tactical') || Request::is('influnce-marketing') || Request::is('large-scale') ? 'f-l' : '' }}"><span></span>RESPONSIVE SOLUTIONS <i class="fas fa-caret-down pp"></i></a>
                    <div class="dropdown-content">
                        <a href="{{url('/amplification')}}">Amplification</a>
                        <a href="{{url('/reputation-mange')}}">Reputation</a>
                        <a href="{{url('/tactical')}}">Tactical</a>
                        <a href="{{url('/influnce-marketing')}}">Marketing</a>
                        <a href="{{url('/large-scale')}}">Large scale</a>
                    </div>
                </li>
                <li class="navbar-item">
                    <a href="{{url('/success_stories')}}" class="{{ Request::is('success_stories') || Request::is('markets-cryptocurrency') || Request::is('markets-banking-insurance') || Request::is('markets-education') || Request::is('markets-airlines') || Request::is('markets-mass-retail') || Request::is('markets-telco') || Request::is('markets-oil-gas') || Request::is('markets-theme-amusement-parks') || Request::is('markets-FMCG') || Request::is('markets-luxury') || Request::is('industries-ministries-departments') || Request::is('industries-fashion') ? 'f-l' : '' }}"><span></span>SUCCESS STORIES <i class="fas fa-caret-down pp"></i></a>
                    <div class="dropdown-content">
                        <a href="{{url('/markets-cryptocurrency')}}">Markets</a>
                        <a href="{{url('/industries-ministries-departments')}}">Industries</a>
                    </div>
                </li>
                <li class="navbar-item">
                    <a class="{{ Request::is('hoo_talk') || Request::is('mass') ? 'f-l' : '' }}"><span></span>Special/Marketing Products<i class="fas fa-caret-down pp"></i></a>
                    <div class="dropdown-content">
                        <a href="{{url('/hoo_talk')}}">Hoo Talk</a>
                        <a href="{{url('/mass')}}">Mass Analytics</a>
                    </div>
                </li>
                <li><a href="{{url('/contact')}}" class="{{ Request::is('contact') ? 'f-l' : '' }}"><span></span>Contact</a></li>
                <div class="navbar-login n-v1">
                    <a href="{{url('/login')}}"><button class="login-btn">Login</button></a>
                </div>
            </ul>

            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
</div>