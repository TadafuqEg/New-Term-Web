@extends('website.layout.app')
@section('title', 'Term')
@section('content')
<style>
    .form-popup-bg {
        position: absolute;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
    }

    .form-popup-bg {
        position: fixed;
        left: 0;
        top: 100px;
        /* background-color: red !important; */
        height: 100%;
        width: 100%;
        background: none;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
        -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
        transition: opacity 0.3s 0s, visibility 0s 0.3s;
        overflow-y: auto;
        z-index: 10000;
    }

    .form-popup-bg.is-visible {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
        -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
        transition: opacity .3s 0s, visibility 0s 0s;
        animation: popup .7s ease-in-out;
    }

    .form-container {
        position: absolute;
        background-color: transparent;
        border-radius: 10px;
        border: 1px solid rgba(130, 130, 130, 1);
        background: rgba(0, 0, 0, 0.9);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 38%;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        padding: 50px;
        color: #fff;
        top: -40px;
        /* animation: popup 5s ease; */
    }
    .dark .form-container,
    .dark .form-container input,
    .dark .form-container textarea{
        background: #fff;
    }

    @keyframes popup {
        0% {
            top: 1000px;
            background-color: red !important;
        }

        80% {
            top: 90px;
        }
    }

    @keyframes popup2 {
        0% {
            top: 0px;
            background-color: red !important;
        }

        80% {
            top: -1000px !important;
        }
    }

    .close-button {
        background: none;
        color: #fff;
        width: 40px;
        height: 40px;
        position: absolute;
        top: 0;
        right: 0;
        border: none;
        cursor: pointer;
    }

    .form-popup-bg:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .homeform-names {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25px;
        margin-bottom: 20px;
    }

    .homeform-names input {
        width: 50%;
        height: 45px;
        border: 1px solid rgba(130, 130, 130, 1);
        border-radius: 4px;
        padding-left: 10px;
        background: #000;
    }

    .homeform-email,
    .homeform-phone,
    .homeform-message {
        width: 100%;
        margin-bottom: 20px;
    }

    .homeform-email input,
    .homeform-phone input {
        width: 100%;
        height: 45px;
        border: 1px solid rgba(130, 130, 130, 1);
        border-radius: 4px;
        padding-left: 10px;
        background: #000;
    }

    .homeform-message textarea {
        width: 100%;
        height: 150px;
        border: 1px solid rgba(130, 130, 130, 1);
        border-radius: 4px;
        padding-left: 10px;
        padding-top: 15px;
        background: #000;
    }

    .send-message {
        width: 100% !important;
        height: 45px !important;
        border-radius: 0 !important;
    }

    /* edit */
    .owl-carousel .owl-item img {
        height: 120px;
    }

    @media(max-width:1450px) {
        .form-container {
            max-width: 50%;
        }
    }

    @media(max-width:1300px) {
        .form-popup-bg.is-visible {
            height: 56vh;
        }


    }

    @media(max-width:1295px) {
        .form-popup-bg.is-visible {
            height: 100vh;
        }
    }

    @media(max-width:1150px) {
        .sec-1 {
            height: 60vh;
        }

        .form-popup-bg.is-visible {
            height: 60vh;
        }

        /* edit */
        .services-cards {
            width: 90%;
        }

        .special-cards a button {
            top: 87%;
        }
    }

    @media(max-width:900px) {
        .form-container {
            max-width: 70%;
            padding: 40px;
        }
    }

    @media(max-width:767px) {
        .form-container {
            max-width: 90%;
            padding: 25px;
        }

        .homeform-names {
            flex-direction: column;
        }

        .homeform-names input,
        .homeform-email input,
        .homeform-phone input {
            width: 100%;
            height: 38px;
        }

        .homeform-message textarea {
            height: 90px;
        }

        .send-message {
            height: 40px !important;
        }
    }
</style>
<div class="contain">

    <div class="sec-1">
        <!-- <img loading="lazy" alt="" src="./assets/imgs/mov3.gif" /> -->
        <div class="sec1-content">

            <h5>Listen, Respond, Succeed</h5>
            <p>
                We provide the perfect combination of data-driven insights and human expertise to enable our clients
                to make strategic decisions backed by comprehensive evidence
            </p>
            <a><button class="book-call" id="btnOpenForm">Book a Call</button></a>
            <div class="form-popup-bg">
                <div class="form-container">
                    <form id="contact-form-container">
                        <div class="homeform-names">
                            <div style="width: 50%">
                        
                                <input id="first-name" placeholder="First Name" type="text" style="width:100%" />
                                <span id="first-name-error" class="error-message"></span>
                            </div>
                            <div style="width: 50%">
                            
                                <input id="last-name" placeholder="Last Name" type="text" style="width:100%" />
                                <span id="last-name-error" class="error-message"></span>
                            </div>
                        </div>
                        <div class="homeform-email">
                            <input id="email" placeholder="Email" type="text" style="width:100%" />
                            <span id="email-error" class="error-message"></span>

                        </div>
                        <div class="homeform-phone">
                            <input id="phone" placeholder="Phone Number" type="number" style="width:100%" />
                            <span id="phone-error" class="error-message"></span>
                        </div>

                        <div class="homeform-message">
                            <textarea id="message" name="message" placeholder="Your message..."></textarea>
                            <span id="message-error" class="error-message"></span>
                        </div>
                        <a><button class="send-message">Book a Call</button></a>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="sec-2">
        <div class="sec2-content">
            <h5>What we do?</h5>
            <p>At TERM, we're dedicated to listening, acting, and ensuring our clients' success. We redefine
                audience engagement by uncovering growth opportunities through advanced social listening,
                comprehensive consumer research, and strategic consultancy.</p><br />

            <p> While our insights empower you to align your brand, marketing, and product strategies with consumer
                demands and market dynamics, our responsive solutions equip you with tools for influencing and
                safeguarding your brand's reputation among your target audiences.</p>
            <br />

            <p>This holistic approach ensures that your business decisions are informed and effective and that you
                are empowered to grow and protect your brand and market position.</p><br />
            </p>
            <a href="{{url('/success_stories')}}"><button class="read">Read our Success Stories</button></a>
            <img loading="lazy" alt="" src="{{asset('website/assets/imgs/bac-1.png')}}" />
        </div>
    </div>

    <div class="sec-3 services">
        <h5 class="h-5">Our Services & Solutions</h5>
        <div class="services-cards">
            <div class="service-card">
                <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img3.png')}}" />
                <p>Listening Services</p>
                <ul>
                    <li>Reputation & perception monitoring</li>
                    <li>Competitive intelligence</li>
                    <li>Marketing campaign evaluation</li>
                    <li>Risk & Crisis recognition and anticipation</li>
                    <li>Risk & Crisis recognition and anticipation</li>
                    <li>Authenticity analysis and bots detection</li>
                </ul>
                <a><button>Self- service Social listening & Profiling Platform</button></a>
            </div>
            <div class="service-card">
                <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img4.png')}}" />
                <p>Responsive Solutions</p>
                <ul>
                    <li>Amplification, Mitigation and fight-back Marketing Strategies</li>
                    <li>Reputation management</li>
                    <li>Tactical Content campaigns</li>
                    <li>Bots Neutralisation</li>
                    <li>Influence marketing operations</li>
                    <li>Large scale micro-targetting</li>
                </ul>
                <a><button>Marketing Mix Modeling solutions</button></a>
            </div>
        </div>
    </div>
    <div class="special-content">
        <h5 class="h-5">What Makes Us Special?</h5>
        <div class="special-cards">
            <div class="special-card sp-1">
                <h5>The Best Technology (WebInt, OSInt, and Artificial Intelligence)</h5>
                <p>Our solution combines industry-leading data collection tools, whether through APIs or
                    crawling, to deliver complete and unrivaled tracking.
                </p>
            </div>
            <div class="special-card sp-2">
                <h5>The Best Marketing Experts (Human Intelligence)</h5>
                <p>Our experts engage at every stage of the process, from refining search parameters during data
                    collection to identifying actionable insights and optimizing machine learning through systematic
                    data reviews.
                </p>
            </div>
            <div class="special-card sp-3">
                <h5>The Best of Technological Know-How (Tadafuq) and Marketing Expertise (Elka)</h5>
                <p>We seamlessly integrate cutting-edge technological capabilities with top-tier research and
                    marketing expertise to deliver exceptional results.
                </p>
            </div>
            <a href="#getIn"><button>Get in Touch</button></a>
        </div>

    </div>

    <div class="unique-content">

        <div class="unique-cards">
            <h5 class="h-5">What Makes Us Unique?</h5>
            <div class="unique-circles">

                <div class="circle">
                    <div class="circle-content">
                        <p>Multicultural & Multilanguage<br /> Team</p>
                        <p class="d-n">circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content">
                        <p>Dedicated Success Managers</p>
                        <p class="d-n">circle 2 circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content">
                        <p>Tailor<br /> Made <br />Reports</p>
                        <p class="d-n">circle 3 circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content">
                        <p>Short Cycle</p>
                        <p class="d-n">circle 4 circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content">
                        <p>Dynamic Scope</p>
                        <p class="d-n">circle 5 circle 1 Multicultural & Multilanguage Team</p>
                    </div>
                </div>
                <div class="circle">
                    <div class="circle-content .circle-content-1">
                        <p>Wide Coverage</p>
                        <p class="d-n">circle 6 circle 1 Multicultural & Multilanguage Team </p>
                    </div>
                </div>
            </div>
            <a href="#getIn"><button>Get in Touch</button></a>
        </div>
    </div>

    <div class="sec-4 clients">
        <h5>They Trusted Us</h5>
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 1"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 2"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 3"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 4"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 5"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 6"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 7"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 8"></div>
            <div class="item"><img src="{{asset('website/assets/imgs/img27.png')}}" alt="Image 9"></div>
        </div>
    </div>
    @include('website.layout.form')
</div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        function closeForm() {
            $('.form-popup-bg').removeClass('is-visible');
        }

        $(document).ready(function ($) {

            /* Contact Form Interactions */
            $('#btnOpenForm').on('click', function (event) {
                event.preventDefault();
                $('.error-message').text('');
                $('#first-name').css('border-color', '');
                $('#last-name').css('border-color', '');
                $('#email').css('border-color', '');
                $('#phone').css('border-color', '');
                $('#message').css('border-color', '');
                $('.form-popup-bg').addClass('is-visible');
            });

            //close popup when clicking x or off popup
            $('.form-popup-bg').on('click', function (event) {
                if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
                    event.preventDefault();
                    $(this).removeClass('is-visible');
                }
            });



        });

    </script>
    <script>
        $(document).ready(function() {
           $('#contact-form-container').on('submit', function(event) {
              event.preventDefault(); // Prevent default form submission
     
              var isValid = validateForm();
                if (!isValid) {
                    return; // If validation fails, do not proceed
                }
              // Get form data
              var csrfToken = $('meta[name="csrf-token"]').attr('content');
              var formData = {
                 _token: csrfToken,
                 first_name: $('#first-name').val(),
                 last_name: $('#last-name').val(),
                 email: $('#email').val(),
                 phone: $('#phone').val(),
                 message: $('#message').val()
              };
     
              // Submit form data via AJAX
              $.ajax({
                 url: '/contact-us', // Replace with your actual controller route
                 type: 'POST',
                 data: formData,
                 success: function(response) {
                    // Handle the success response here
                    // console.log(response);
                    //showPopup('Success! Form submitted successfully.');
                    let myPopup = $('#myPopup');
                    myPopup.addClass("show");
                    $('#contact-form-container')[0].reset();
                    setTimeout(function() {
                           
                                myPopup.removeClass("show"); // Remove the popup after 3 seconds
                            
                        }, 3500); 
                        $('.form-popup-bg').removeClass('is-visible');
                 },
                 error: function(xhr, status, error) {
                    // Handle the error response here
                    console.error(error);
                 }
              });
           });
    
            function validateForm() {
            var isValid = true;
    
            // Clear previous error messages
            $('.error-message').text('');
    
            // Check if first name is empty
            if ($('#first-name').val().trim() === '') {
                isValid = false;
                $('#first-name-error').text('First name required.');
                $('#first-name').css('border-color', 'red');
            } else {
                $('#first-name').css('border-color', '');
            }
    
            // Check if last name is empty
            if ($('#last-name').val().trim() === '') {
                isValid = false;
                $('#last-name-error').text('Last name required.');
                $('#last-name').css('border-color', 'red');
            } else {
                $('#last-name').css('border-color', '');
            }
    
            // Check if email is valid
            var email = $('#email').val().trim();
            if (email === '' || !isValidEmail(email)) {
                isValid = false;
                $('#email-error').text('Please enter a valid email.');
                $('#email').css('border-color', 'red');
            } else {
                $('#email').css('border-color', '');
            }
    
            // Check if phone is empty
            if ($('#phone').val().trim() === '') {
                isValid = false;
                $('#phone-error').text('Phone number required.');
                $('#phone').css('border-color', 'red');
            } else {
                $('#phone').css('border-color', '');
            }
    
            // Check if message is empty
            if ($('#message').val().trim() === '') {
                isValid = false;
                $('#message-error').text('Message is required.');
                $('#message').css('border-color', 'red');
            } else {
                $('#message').css('border-color', '');
            }
    
            return isValid;
        }
        function isValidEmail(email) {
            // Simple email validation regex
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }
            
        });
        
    </script>
@endpush