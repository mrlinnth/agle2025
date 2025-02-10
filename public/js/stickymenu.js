// ======= Sticky
document.addEventListener("DOMContentLoaded", function () {
    window.onscroll = function () {
        const ud_header = document.querySelector(".ud-header");
        const sticky = ud_header.offsetTop;

        if (window.pageYOffset > sticky) {
            ud_header.classList.add("sticky-header");
            ud_header.classList.remove("bg-transparent", "z-40");
        } else {
            ud_header.classList.remove("sticky-header");
            ud_header.classList.add("bg-transparent", "z-40");
        }

        // show or hide the back-top-top button
        const backToTop = document.querySelector(".back-to-top");
        if (
            document.body.scrollTop > 50 ||
            document.documentElement.scrollTop > 50
        ) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    };
});
