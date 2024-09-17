
// navbar-toggle
document.addEventListener('DOMContentLoaded', function () {
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarContainer = document.querySelector('.navbar-container');

    navbarToggle.addEventListener('click', function () {
        navbarContainer.classList.toggle('open');
    });
});

// navbar-menu
const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = () => {
    navbar.classList.add("show");
    menuBtn.classList.add("hide");
    body.classList.add("disabled");
}
cancelBtn.onclick = () => {
    body.classList.remove("disabled");
    navbar.classList.remove("show");
    menuBtn.classList.remove("hide");
}
window.onscroll = () => {
    this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}




// send email
function sendEmail() {
    var mailtoLink = `mailto:info@term.com`;

    window.location.href = mailtoLink;
}


// animation 
// fade in animation
$(document).on("scroll", function () {
    var pageTop = $(document).scrollTop()
    var pageBottom = pageTop + $(window).height()
    var tags = $(".fadein")

    for (var i = 0; i < tags.length; i++) {
        var tag = tags[i]

        if ($(tag).offset().top < pageBottom) {
            $(tag).addClass("visible")
        } else {
            $(tag).removeClass("visible")
        }
    }
})

// fadeout animation

$(document).on("scroll", function () {
    var pageTop = $(document).scrollTop()
    var pageBottom = pageTop + $(window).height()
    var tags = $(".fadeout")

    for (var i = 0; i < tags.length; i++) {
        var tag = tags[i]

        if ($(tag).offset().top < pageBottom) {
            $(tag).addClass("visible")
        } else {
            $(tag).removeClass("visible")
        }
    }
})