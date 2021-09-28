$(function () {
    'use strict';
    // Adjust slider height
    var winH = $(window).height(),
        navH = $('.navbar').innerHeight();
    $('.slider , .carousel-item , .head').height(winH - navH);


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

//contact
$(document).ready(function () {
    'use strict';
    $('#con').click(function () {
        $('#contact-info').slideToggle(1000);
    });

});

