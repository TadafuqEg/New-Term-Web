<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Term</title>
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .login-form {
            width: 40%;
            background: rgba(12, 14, 15, 0.65);
            padding: 70px 40px;
            border: 1px solid rgba(130, 130, 130, 1);
            border-radius: 10px;
            z-index: 9;
        }
        .dark .login-form{
            background: #fff;
        }
        .username,
        .password {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            gap: 10px;
        }

        .username label,
        .password label {
            font-size: 20px;
            font-weight: 500;
            color: rgba(130, 130, 130, 1);
        }

        .password a {
            font-size: 14px;
            font-weight: 500;
            color: rgba(130, 130, 130, 1);
        }

        .username input,
        .password input {
            width: 100%;
            height: 48px;
            border: 1px solid rgba(130, 130, 130, 1);
            border-radius: 4px;
            padding-left: 10px;
            font-size: 16px;
            font-weight: 400;
            color: rgba(130, 130, 130, 1);
            background: transparent;
        }

        .form-btn {
            width: 100%;
            height: 48px;
            margin-top: 10px;
            background: rgba(255, 93, 60, .9);
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
        }

        .form-btn:hover {
            background: rgba(255, 93, 60, 1);
        }

        .login-text {
            width: 100%;
            text-align: center;
            z-index: 9;
        }

        .login-text h5 {
            font-size: 60px;
            font-weight: 700;
            margin: 0;
        }

        .login-text p {
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 20px;
        }
        .contain2 .sec-1{
            height: auto;
            padding: 150px 0 50px 0;
        }

        @media(max-width:1300px) {
            .login-form {
                width: 60%;
            }

            .log {
                height: 70vh;
            }
        }

        @media(max-width:900px) {
            .login-form {
                width: 75%;
            }

            .login-text h5 {
                font-size: 50px;
                font-weight: 700;
                margin: 0;
            }

            .login-text p {
                font-size: 20px;
                font-weight: 400;
                margin-bottom: 20px;
            }
        }

        @media(max-width:767px) {
            .login-form {
                width: 90%;
                padding: 40px 25px;
            }

            .login-text h5 {
                font-size: 30px;
                font-weight: 700;
                margin: 0;
            }

            .login-text p {
                font-size: 14px;
                padding-top: 5px;
            }

            .username label,
            .password label {
                font-size: 16px;
            }

            .username input,
            .password input {
                font-size: 14px;
            }

            .form-btn {
                font-size: 17px;
            }

            .password a {
                font-size: 12px;
            }

            .content2 {
                padding: 0 55px 0 30px;
            }

            .content2 .n-v2 svg {
                position: absolute;
                right: 30px;
            }

            .content2 .login-btn {
                font-size: 14px;
                padding-right: 10px;
            }
            .log{
                height: 85vh;
            }
        }
    </style>
</head>

<body>
    <div class="head">
        <nav class="navbar">
            <div class="content content2">
                <div class="logo">
                    <a href="{{url('/')}}"><img id="logo-img" loading="lazy" src="{{asset('website/assets/imgs/Logo.png')}}" /></a>
                </div>
                <ul class="menu-list"
                    style="background-color:transparent; border: none; text-align: right; justify-content: right;  width: 80%;">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <a href="{{url('/login')}}" style="font-size: 14px; font-weight: 600; cursor: pointer; text-decoration: none; color: #fff;">Already have an account?</a>
                </ul>
                <div class="navbar-login n-v2">
                    <a href="{{url('/login')}}"><button class="login-btn">Login</button></a>
                    <svg stroke="currentColor" stroke-width="0" viewBox="0 0 16 16"
                        class="dark-toggle hidden md:block text-purple-700 mt-1 ml-2 cursor-pointer dark:text-white"
                        height="28" width="28" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
                        </path>
                        <path
                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                        </path>
                    </svg>
                </div>

                <div class="icon menu-btn icon-btn2">
                    <a href="{{url('/login')}}"><button class="login-btn">Login</button></a>
                </div>
            </div>
        </nav>
    </div>

    <div class="contain contain2">

        <div class="sec-1 reputation log" style="flex-direction: column;">
            <div class="login-text">
                <h5>Welcome To Term</h5>
                <p>Register Your account</p>
            </div>
            <div class="login-form">
                <form action="{{ route('register.submit') }}" method="POST">
                    @csrf
                    <div class="username name">
                        <label for="username">Name</label>
                        <input placeholder="Your Full Name" type="text" name="name" value="{{ old('name') }}"/>
                        @if ($errors->has('name'))
                            <p class="text-error more-info-err" style="color: red;" >
                                {{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="username">
                        <label for="username">Username</label>
                        <input placeholder="Your Username" type="text" name="username" value="{{ old('username') }}"/>
                        @if ($errors->has('username'))
                            <p class="text-error more-info-err" style="color: red;">
                                {{ $errors->first('username') }}</p>
                        @endif
                    </div>
                    <div class="username email">
                        <label for="username">Email</label>
                        <input placeholder="example@example.com" type="text" name="email" value="{{ old('email') }}"/>
                        @if ($errors->has('email'))
                            <p class="text-error more-info-err" style="color: red;">
                                {{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="username email">
                        <label for="username">Phone Number</label>
                        <input placeholder="Phone Number" type="number" name="phone" value="{{ old('phone') }}"/>
                        @if ($errors->has('phone'))
                            <p class="text-error more-info-err" style="color: red;">
                                {{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <input placeholder="Your Password" type="password" name="password" />
                        @if ($errors->has('password'))
                            <p class="text-error more-info-err" style="color: red;">
                                {{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    <a><button class="form-btn" type="submit">Sign Up</button></a>
                </form>

            </div>
        </div>
    </div>

    <div class="foooter">
        <div class="footer-content">
            <div class="footer-left">
                <div class="left-top">
                    <img id="footer-img" loading="lazy" src="{{asset('website/assets/imgs/Logo.png')}}" />
                    <div class="footer-imgs">
                        <a href=""><img id="footer-linkedin" loading="lazy" alt="" src="{{asset('website/assets/imgs/img8.png')}}" /></a>
                        <a href=""><img id="footer-x" loading="lazy" alt="" src="{{asset('website/assets/imgs/img6.png')}}" /></a>
                        <a href=""><img id="footer-whatsapp" loading="lazy" alt="" src="{{asset('website/assets/imgs/img7.png')}}" /></a>
                    </div>
                </div>
                <div class="left-bottom">
                    <a href="">Terms and Conditions</a>
                    <a href="">Privacy Policy</a>
                    <a href="">Privacy Policy</a>
                </div>
            </div>
            <div class="footer-right f-r">
                <p>Phone: +20540845510</p>
                <p>Address: 12st, Time Square, New York, USA</p>
                <p><a onclick="sendEmail()">info@term.com</a></p>
            </div>
        </div>
    </div>
    <script src="{{asset('website/js/script.js')}}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggle = document.querySelector(".dark-toggle");
            const body = document.body;
            const logo = document.getElementById("logo-img");
            const footer = document.getElementById("footer-img");
            const whatsapp = document.getElementById("footer-whatsapp");
            const twitter = document.getElementById("footer-x");
            const linkedin = document.getElementById("footer-linkedin");

            toggle.addEventListener("click", function () {
                body.classList.toggle("dark");

                if (body.classList.contains("dark")) {
                    logo.src = "{{asset('website/assets/imgs/Logo2.png')}}";
                    footer.src = "{{asset('website/assets/imgs/Logo2.png')}}";
                    whatsapp.src = "{{asset('website/assets/imgs/img7-2.png')}}";
                    linkedin.src = "{{asset('website/assets/imgs/img8-2.png')}}";
                    twitter.src = "{{asset('website/assets/imgs/img6-2.png')}}";
                } else {
                    logo.src = "{{asset('website/assets/imgs/Logo.png')}}";
                    footer.src = "{{asset('website/assets/imgs/Logo.png')}}";
                    whatsapp.src = "{{asset('website/assets/imgs/img7.png')}}";
                    linkedin.src = "{{asset('website/assets/imgs/img8.png')}}";
                    twitter.src = "{{asset('website/assets/imgs/img6.png')}}";
                }
            });
        });
    </script>
</body>

</html>