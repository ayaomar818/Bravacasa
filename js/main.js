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


    // Project Shuffle
    $('.Projects ul li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
        if ($(this).data('class') === 'all') {
            $('.shuffle-images .col-md').css('opacity', 1);
        } else {
            $('.shuffle-images .col-md').css('opacity', '.08');
            $($(this).data('class')).parent().css('opacity', 1);
        }
    })

})



// When the user scrolls down 50px from the top of the document, resize the navbar's size
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("mainnav").style.fontSize = "12px";
        document.getElementById("logo").style.fontSize = "30px";
        document.getElementById("logo2").style.fontSize = "30px";
    } else {
        document.getElementById("mainnav").style.fontSize = "15px";
        document.getElementById("logo").style.fontSize = "40px";
        document.getElementById("logo2").style.fontSize = "35px";
    }
}
