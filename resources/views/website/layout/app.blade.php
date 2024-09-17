<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Open Graph tags -->
    <meta property="og:title" content="Term" />
    <meta property="og:description" content="Listen, Respond, Succeed" />
    <meta property="og:image" content="https://dev.term.ae/website/assets/imgs/term_share02.png" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://dev.term.ae/" />
    <meta property="og:type" content="website" />
    
    <!-- Twitter card tags (optional for better Twitter sharing) -->
    <meta name="twitter:card" content="Term">
    <meta name="twitter:title" content="Term">
    <meta name="twitter:description" content="Listen, Respond, Succeed.">
    <meta name="twitter:image" content="https://dev.term.ae/website/assets/imgs/term.jpg">


    {{-- <meta property="og:title" content="Term">
    <meta property="og:description" content="Listen, Respond, Succeed">
    <meta property="og:image" content="https://dev.term.ae/website/assets/imgs/term.ico">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://dev.term.ae/"> --}}
    <title>@yield('title', 'Term')</title>
    <link rel="icon" href="{{asset('website/assets/imgs/logo2.svg')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .popup {
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(
                    0,
                    0,
                    0,
                    0.4
                );
                display: none;
            }
            .popup-content {
                background-color: white;
                margin: 10% auto;
                padding: 1%;
                border: 1px solid #888888;
                width: 30%;
                font-weight: bolder;
            }
            .popup-content button {
                display: block;
                margin: 0 auto;
            }
            .show {
                display: block;
            }
            .error-message {
                color: red;
                font-size: 0.9em;
                display: block;
                margin-top: 5px;
            }
        </style>
        @yield('style')
</head>

<body>
    @include('website.layout.header')

    @yield('content')
    <div id="myPopup" class="popup">
        <div class="popup-content" style="text-align: center;">
            <h1 style="color: green">
                Thank you for sharing
            </h1>
            <p style="color:#fff;">I will contact you as soon as possible</p>
            
        </div>
    </div>
    @include('website.layout.footer')
    <!-- Owl Carousel JS -->
    
    <script src="{{asset('website/js/script.js')}}"></script>
    @stack('scripts')
   
    <script>
        $(document).ready(function() {
           $('#contact-form-container2').on('submit', function(event) {
              event.preventDefault(); // Prevent default form submission
     
              var isValid = validateForm();
                if (!isValid) {
                    return; // If validation fails, do not proceed
                }
              // Get form data
              var csrfToken = $('meta[name="csrf-token"]').attr('content');
              var formData = {
                 _token: csrfToken,
                 name: $('#name').val(),
                 co_email: $('#company-email').val(),
                 service: $('#service').val(),
              
              };
     
              // Submit form data via AJAX
              $.ajax({
                 url: '/join-us', // Replace with your actual controller route
                 type: 'POST',
                 data: formData,
                 success: function(response) {
                    // Handle the success response here
                    // console.log(response);
                    //showPopup('Success! Form submitted successfully.');
                    let myPopup = $('#myPopup');
                    myPopup.addClass("show");
                    $('#contact-form-container2')[0].reset();
                    setTimeout(function() {
                           
                                myPopup.removeClass("show"); // Remove the popup after 3 seconds
                            
                        }, 3500); 
                 },
                 error: function(xhr, status, error) {
                    // Handle the error response here
                    console.error(error);
                 }
              });
           });

            // Set the duration for the popup to disappear (in milliseconds)
            function validateForm() {
            var isValid = true;
    
            // Clear previous error messages
            $('.error-message').text('');
    
            // Check if first name is empty
            if ($('#name').val().trim() === '') {
                isValid = false;
                $('#name-error').text('Name required.');
                $('#name').css('border-color', 'red');
            } else {
                $('#name').css('border-color', '');
            }
            const checkbox = document.getElementById('privacy-accept');
            const value = checkbox.checked ? 1 : 0;
   
            if (value == 0) {
                        isValid = false;
                        $('#privacy-accept-error').text('Privacy-Accept required.');
                        
                    }
            // Check if last name is empty
            var email = $('#company-email').val().trim();
            if (email === '' || !isValidEmail(email)) {
                isValid = false;
                $('#company-email-error').text('Company Email required.');
                $('#company-email').css('border-color', 'red');
            } else {
                $('#company-email').css('border-color', '');
            }
    
            // Check if email is valid
           
    
            // Check if phone is empty
            if ($('#service').val().trim() === '') {
                isValid = false;
                $('#service-error').text('Service required.');
                $('#service').css('border-color', 'red');
            } else {
                $('#service').css('border-color', '');
            }
    
            // Check if message is empty
            
    
            return isValid;
        }
        function isValidEmail(email) {
            // Simple email validation regex
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }
            
        });
        
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggle = document.querySelector(".dark-toggle");
            const body = document.body;
            const logo = document.getElementById("logo-img");
            const footer = document.getElementById("footer-img");
            const whatsapp = document.getElementById("footer-whatsapp");
            const twitter = document.getElementById("footer-x");
            const linkedin = document.getElementById("footer-linkedin");
            const listen = document.getElementById("lis-btn")
            const listen2 = document.getElementById("lis-btn2")

            toggle.addEventListener("click", function () {
                body.classList.toggle("dark");

                if (body.classList.contains("dark")) {
                    logo.src = "{{asset('website/assets/imgs/logo.svg')}}";
                    footer.src = "{{asset('website/assets/imgs/Logo.svg')}}";
                    whatsapp.src = "{{asset('website/assets/imgs/img7.png')}}";
                    linkedin.src = "{{asset('website/assets/imgs/img8.png')}}";
                    twitter.src = "{{asset('website/assets/imgs/img6.png')}}";
                    listen.src = "{{asset('website/assets/imgs/img3.png')}}";
                    listen2.src = "{{asset('website/assets/imgs/img4.png')}}";
                } else {
                    logo.src = "{{asset('website/assets/imgs/logo2.svg')}}";
                    footer.src = "{{asset('website/assets/imgs/Logo2.svg')}}";
                    whatsapp.src = "{{asset('website/assets/imgs/img7-2.png')}}";
                    linkedin.src = "{{asset('website/assets/imgs/img8-2.png')}}";
                    twitter.src = "{{asset('website/assets/imgs/img6-2.png')}}";
                    listen.src = "{{asset('website/assets/imgs/img3-2.png')}}";
                    listen2.src = "{{asset('website/assets/imgs/img4-2.png')}}";
                }
            });
        });
    </script>
    
</body>

</html>