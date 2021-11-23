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


// Aos animation
AOS.init({
    easing: 'ease-out-back',
    duration: 3000
});

window.addEventListener("DOMContentLoader", function() {
    var form =document.getElementById("form");
    var status =document.getElementById("status");
    function success (){
        form.reset();
        status.classList.add('success');
        status.innerHTML="Send Successfuly";
    }
    function error(){
        status.classList.add('error');
        status.innerHTML="something get rong. please try again";
    }
    form.addEventListener("submit",function(ev) {
        ev.preventDefault();
        var data =new FormData(form);
        ajax(form.method, form.action , data , success, error);
    });
});
function ajax (method , url , data , success , error){
    var xhr = new XMLHttpRequest();
    xhr.open(method,url);
    xhr.setRequestHeader("Accept","application/json");
    xhr.onreadystatechange=function() {
        if(xhr.readyState !== XMLHttpRequest.DONE) return;
        if (xhr.status === 200) {
            success(xhr.response, xhr.responseType);
        } else {
            error (xhr.status , xhr.response , xhr.responseType);
        }
    };
    xhr.send(data);
}