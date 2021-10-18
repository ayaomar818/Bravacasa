$(function () {
    'use strict';
    // Adjust slider height
    var winH = $(window).height(),
        navH = $('.navbar').innerHeight();
    $('.slider , .carousel-item').height(winH - navH);

    // Navbar Shuffle
    $('.navbar ul li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    })


})



// When the user scrolls down 50px from the top of the document, resize the navbar's size
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("nav").style.fontSize = "15px";
        document.getElementById("logo").style.fontSize = "35px";
        document.getElementById("logo2").style.fontSize = "35px";
    } else {
        document.getElementById("nav").style.fontSize = "17px";
        document.getElementById("logo").style.fontSize = "40px";
        document.getElementById("logo2").style.fontSize = "35px";
    }
}

AOS.init({
    easing: 'ease-out-back',
    duration: 3000
});
