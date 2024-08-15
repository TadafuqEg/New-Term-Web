@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<div class="contain">

    <div class="sec-1 about">
        <div class="sec1-content">

            <h5>TADAFUQ AND ELKA : Joining <br /> Forces to Create a New Era</h5>
            <p>In a significant merger, Tadafuq Information Technology (TIT) specialized in advanced software
                solutions and IT services and Elka, an innovative marketing research and consulting company have
                joined forces to create TERM. This strategic move enhances their competitive edge, facilitates
                global expansion, and fosters a collaborative culture. TERM's vision emphasizes ethical reputation
                management and trust as foundational to sustained success in today's interconnected business
                landscape.
            </p>
            <a href="{{url('/contact')}}"><button class="book-call">Contact Us</button></a>
        </div>
    </div>

    <div class="power-house">
        <div class="power-content">
            <h5>TERM : A Modern<br /> Powerhouse</h5>
            <p>TERM exemplifies modern ingenuity and technological prowess. It offers holistic consulting and
                intelligence solutions that resonate with the demands of today's digital landscape. At its core is
                the
                revolutionary TERM Deep WEBINT (TDW), an amalgamation of automated web-based data collection Tools
                and
                the latest in APIbased data collection solutions. This comprehensive suite encompasses both passive
                and
                active WEBINT methods, resulting in a dynamic, real-time approach to data analysis.
            </p>
            <a href="{{url('/contact')}}"><button>Discover What Sets Us Apart</button></a>
        </div>
        <div class="line"></div>
    </div>

    <div class="deep">
        <img src="{{asset('website/assets/imgs/bac-8.png')}}" alt="deep-img" loading="lazy" />
        <div class="deep-content">
            <h5>TERM Deep WEBINT (TDW) : A fusion of excellence</h5>
            <p>The distinctive essence of TDW lies in its unique blend of technology and human expertise. By
                leveraging the sophisticated technological capabilities of TIT and the seasoned acumen of ELKA, TDW
                transcends traditional data solutions. Through swift data collection from diverse web sources,
                including social networks and web analytics tools, TDW provides unparalleled insights. It allows
                businesses to navigate the digital landscape with precision, extracting valuable insights that
                inform strategic decisionmaking. It's this dynamic fusion that sets TDW apart, making it an
                unrivaled offering in the global arena of digital intelligence and brand influence
            </p>
            <a href="{{url('/contact')}}"><button>Join us and Turn Conversations into Opportunities</button></a>
        </div>
        <div class="line"></div>
    </div>

    <div class="about-meet">
        <h5>Meet Our Team</h5>
        <p>
            At the heart of our success is an extraordinary team of experts, each dedicated to driving innovation
            and
            delivering exceptional results. Our diverse team brings together a wealth of knowledge and experience
            across all facets of social listening, social action, and marketing strategy consulting.
        </p>
        <div class="monitoring-content meet-cards">
            <div class="monitoring-card">
                <h5>Social Listening Specialists</h5>
                <p>Experts in monitoring and analyzing online conversations to uncover valuable insights.</p>
            </div>
            <div class="monitoring-card">
                <h5>Data Analysts</h5>
                <p>Skilled professionals who transform raw data into actionable intelligence.</p>
            </div>
            <div class="monitoring-card">
                <h5>Marketing Strategists</h5>
                <p>Visionary thinkers who craft and execute compelling marketing campaigns.</p>
            </div>
            <div class="monitoring-card">
                <h5>Content Creators</h5>
                <p>Talented writers and designers who produce engaging and impactful content.</p>
            </div>
            <div class="monitoring-card">
                <h5>Public Relations Experts</h5>
                <p>Masters at managing brand reputation and fostering positive media relationships.</p>
            </div>
            <div class="monitoring-card">
                <h5>Client Success Managers</h5>
                <p>Dedicated professionals ensuring our clients achieve their goals and maximize their ROI.</p>
            </div>
            <div class="monitoring-card">
                <h5>Technical Support Team</h5>
                <p>Reliable tech gurus who maintain our advanced platforms and provide top-notch support.</p>
            </div>
        </div>
        <p>Together, we are committed to empowering our clients with the tools and strategies needed to thrive in a
            dynamic digital landscape. Our collaborative approach and passion for excellence ensure that we not only
            meet but exceed our clients' expectations.

        </p>
        <a href="{{url('/contact')}}"><button>Join Us on a Journey to Success</button></a>
    </div>

    <div class="about-partenrs">
        <h5>Our Trusted Partners</h5>
        <p>Building on the legacy of our founding companies, we are honored to present the esteemed clients who have
            trusted us over the years. These partnerships highlight the rich history and enduring excellence that
            form the cornerstone of our new venture
        </p>
        <div class="about-trust">
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
            <img loading="lazy" src="{{asset('website/assets/imgs/img27.png')}}" alt="partner-1" />
        </div>
        <a href="{{url('/contact')}}"><button> Join the Legacy</button></a>
    </div>
</div>
@endsection
@push('scripts')
   
@endpush