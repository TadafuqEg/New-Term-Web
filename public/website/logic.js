$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
});


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
            logo.src = "{{asset('website/assets/imgs/Logo.svg')}}";
            footer.src = "{{asset('website/assets/imgs/Logo.svg')}}";
            whatsapp.src = "{{asset('website/assets/imgs/img7.png')}}";
            linkedin.src = "{{asset('website/assets/imgs/img8.png')}}";
            twitter.src = "{{asset('website/assets/imgs/img6.png')}}";
            listen.src = "{{asset('website/assets/imgs/img3.png')}}";
            listen2.src = "{{asset('website/assets/imgs/img4.png')}}";
        } else {
            logo.src = "{{asset('website/assets/imgs/Logo2.svg')}}";
            footer.src = "{{asset('website/assets/imgs/Logo2.svg')}}";
            whatsapp.src = "{{asset('website/assets/imgs/img7-2.png')}}";
            linkedin.src = "{{asset('website/assets/imgs/img8-2.png')}}";
            twitter.src = "{{asset('website/assets/imgs/img6-2.png')}}";
            listen.src = "{{asset('website/assets/imgs/img3-2.png')}}";
            listen2.src = "{{asset('website/assets/imgs/img4-2.png')}}";
        }
    });
});