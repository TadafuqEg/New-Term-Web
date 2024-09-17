<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Open Graph tags for WhatsApp sharing -->
    <meta property="og:title" content="Term" />
    <meta property="og:description" content="Listen, Respond, Succeed" />
    <meta property="og:image" content="https://dev.term.ae/website/assets/imgs/term.jpg" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://dev.term.ae/" />
    <meta property="og:type" content="website" />

    <!-- Additional Twitter Cards (if you also want Twitter sharing to work) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Term">
    <meta name="twitter:description" content="Listen, Respond, Succeed">
    <meta name="twitter:image" content="https://dev.term.ae/website/assets/imgs/term.jpg">

    <title>@yield('title', 'Term')</title>
    <link rel="icon" href="{{ url('website/assets/imgs/logo2.svg') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS links -->
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom styles -->
    <style>
        .popup {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            display: none;
        }

        .popup-content {
            background-color: white;
            margin: 10% auto;
            padding: 1%;
            border: 1px solid #888;
            width: 30%;
            font-weight: bold;
            text-align: center;
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
        <div class="popup-content">
            <h1 style="color: green">Thank you for sharing</h1>
            <p style="color:#000;">We will contact you as soon as possible</p>
        </div>
    </div>

    @include('website.layout.footer')

    <!-- JS includes -->
    <script src="{{ asset('website/js/script.js') }}"></script>
    @stack('scripts')

    <script>
        $(document).ready(function() {
            $('#contact-form-container2').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                if (!validateForm()) return; // If validation fails, stop execution
                
                const csrfToken = $('meta[name="csrf-token"]').attr('content');
                const formData = {
                    _token: csrfToken,
                    name: $('#name').val(),
                    co_email: $('#company-email').val(),
                    service: $('#service').val(),
                };

                $.ajax({
                    url: '/join-us',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#myPopup').addClass("show");
                        $('#contact-form-container2')[0].reset();
                        setTimeout(function() {
                            $('#myPopup').removeClass("show");
                        }, 3500);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });

            function validateForm() {
                let isValid = true;
                $('.error-message').text(''); // Clear previous error messages
                
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if ($('#name').val().trim() === '') {
                    isValid = false;
                    $('#name-error').text('Name required.');
                    $('#name').css('border-color', 'red');
                } else {
                    $('#name').css('border-color', '');
                }

                if (!$('#privacy-accept').is(':checked')) {
                    isValid = false;
                    $('#privacy-accept-error').text('Privacy-Accept required.');
                }

                const email = $('#company-email').val().trim();
                if (email === '' || !emailPattern.test(email)) {
                    isValid = false;
                    $('#company-email-error').text('Valid Company Email required.');
                    $('#company-email').css('border-color', 'red');
                } else {
                    $('#company-email').css('border-color', '');
                }

                if ($('#service').val().trim() === '') {
                    isValid = false;
                    $('#service-error').text('Service required.');
                    $('#service').css('border-color', 'red');
                } else {
                    $('#service').css('border-color', '');
                }

                return isValid;
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggle = document.querySelector(".dark-toggle");
            const body = document.body;
            const logo = document.getElementById("logo-img");
            const footer = document.getElementById("footer-img");

            toggle.addEventListener("click", function() {
                body.classList.toggle("dark");

                if (body.classList.contains("dark")) {
                    logo.src = "{{ asset('website/assets/imgs/logo.svg') }}";
                    footer.src = "{{ asset('website/assets/imgs/Logo.svg') }}";
                } else {
                    logo.src = "{{ asset('website/assets/imgs/logo2.svg') }}";
                    footer.src = "{{ asset('website/assets/imgs/Logo2.svg') }}";
                }
            });
        });
    </script>
</body>

</html>
