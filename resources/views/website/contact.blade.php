@extends('website.layout.app')
@section('title', 'Term')
@section('style')
@endsection
@section('content')

<div class="contain">
    @include('website.layout.fixed_div')

    <div class="sec-1">
        <!-- <img loading="lazy" alt="" src="./assets/imgs/mov3.gif" /> -->
        <div class="sec1-content">
            <h5>Contact Us </h5>
        </div>
    </div>
    <div class="contact-form">
        <div class="contact-left">
            <h5>Let's talk with us</h5>
            <p>Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.</p>
            <div class="left-content">
                <div class="location">
                    <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img28.png')}}" style="width: 23px; height: 28px;"/>
                    <p>Oce 2210 Concord Tower, Dubai<br />Media City, Dubai, UAE</p>
                </div>
                <div class="phone">
                    <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img29.png')}}" />
                    <p><a>+971 50 583 5963</a></p>
                </div>
                <div class="email">
                    <img loading="lazy" alt="" src="{{asset('website/assets/imgs/img30.png')}}" />
                    <p><a onclick="sendEmail()">info@term.ae</a></p>
                </div>
            </div>
        </div>
        <div class="contact-right">
            <form id="contact-form-container">
                <div class="form">
                    <div class="form-names">
                        <div style="width: 50%">
                        
                            <input id="first-name" placeholder="First Name" type="text" style="width:100%" />
                            <span id="first-name-error" class="error-message"></span>
                        </div>
                        <div style="width: 50%">
                        
                            <input id="last-name" placeholder="Last Name" type="text" style="width:100%" />
                            <span id="last-name-error" class="error-message"></span>
                        </div>
                    </div>
                    <div class="form-email">
                        <input id="email" placeholder="Email" type="text" style="width:100%" />
                        <span id="email-error" class="error-message"></span>
                    </div>
                    <div class="form-phone">
                        <input id="phone" placeholder="Phone Number" type="number" style="width:100%" />
                        <span id="phone-error" class="error-message"></span>
                    </div>
                    <div class="message">
                        <textarea id="message" name="message" placeholder="Your message..."></textarea>
                        <span id="message-error" class="error-message"></span>
                    </div>
                    <a><button>Send Message</button></a>
                </div>
            </form>
        </div>
    </div>


</div>
@endsection
@push('scripts')
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
                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    console.error(error);
                }
            });
        });

        //    closePopup.addEventListener(
        //         "click",
        //         function () {
        //             myPopup.classList.remove(
        //                 "show"
        //             );
        //         }
        //     );
        //     window.addEventListener(
        //         "click",
        //         function (event) {
        //             if (event.target == myPopup) {
        //                 myPopup.classList.remove(
        //                     "show"
        //                 );
        //             }
        //         }
        //     );
            // Append the popup to the body

            // Set the duration for the popup to disappear (in milliseconds)
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