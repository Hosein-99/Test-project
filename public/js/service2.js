$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        rtl:true,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:4000,
        dots:true,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('#icon-bar').click(function(){
        $('.drop-down').slideToggle(300);
    });



    setInterval(function(){
        if($('#link1').hasClass('link1')) {
            $('#link1').removeClass('link1')
            $('#link1').fadeOut()
            $('#link2').addClass('link1')
            $('#link2').fadeIn()
        }
        else if($('#link2').hasClass('link1')) {
            $('#link2').removeClass('link1')
            $('#link2').fadeOut()
            $('#link3').addClass('link1')
            $('#link3').fadeIn()
        }
        else {
            $('#link3').removeClass('link1')
            $('#link3').fadeOut()
            $('#link1').addClass('link1')
            $('#link1').fadeIn()
        }

    }, 4000);
    $('.next').click(function(){
        if($('#link1').hasClass('link1')) {
            $('#link1').removeClass('link1')
            $('#link1').fadeOut(200)
            $('#link2').addClass('link1')
            $('#link2').fadeIn(200)
        }
        else if($('#link2').hasClass('link1')) {
            $('#link2').removeClass('link1')
            $('#link2').fadeOut(400)
            $('#link3').addClass('link1')
            $('#link3').fadeIn(600)
        }
        else {
            $('#link3').removeClass('link1')
            $('#link3').fadeOut()
            $('#link1').addClass('link1')
            $('#link1').fadeIn()
        }
    });
    $('.pre').click(function(){
        if($('#link3').hasClass('link1')) {
            $('#link3').removeClass('link1')
            $('#link3').fadeOut()
            $('#link2').addClass('link1')
            $('#link2').fadeIn()
        }
        else if($('#link2').hasClass('link1')) {
            $('#link2').removeClass('link1')
            $('#link2').fadeOut()
            $('#link1').addClass('link1')
            $('#link1').fadeIn()
        }
        else {
            $('#link1').removeClass('link1')
            $('#link1').fadeOut()
            $('#link3').addClass('link1')
            $('#link3').fadeIn()
        }
    });


    $('#page1').click(function(){
        $(this).css('border-bottom','3px solid red');
        $('#page1').css('color','black');
        $('#page2').css('color','gray');
        $('#page2').css('border-bottom','unset');
        $('#page1').css('font-size','16px');
        $('#page2').css('font-size','15px');


        $('#page-1').fadeIn();
        $('#page-2').hide();

    });
    $('#page2').click(function(){
        $(this).css('border-bottom','3px solid red');
        $('#page2').css('color','black');
        $('#page1').css('color','gray');
        $('#page1').css('border-bottom','unset');
        $('#page2').css('font-size','16px');
        $('#page1').css('font-size','15px');


        $('#page-2').fadeIn();
        $('#page-1').hide();

    });
    $('#page3').click(function(){
        $(this).css('border-bottom','3px solid red');
        $('#page3').css('color','black');
        $('#page4').css('color','gray');
        $('#page4').css('border-bottom','unset');
        $('#page3').css('font-size','16px');
        $('#page4').css('font-size','15px');


        $('#page-3').fadeIn();
        $('#page-4').hide();

    });
    $('#page4').click(function(){
        $('#page4').css('border-bottom','3px solid red');
        $('#page3').css('border-bottom','unset');
        $('#page4').css('color','black');
        $('#page3').css('color','gray');
        $('#page4').css('font-size','16px');
        $('#page3').css('font-size','15px');

        $('#page-4').fadeIn();
        $('#page-3').hide();
    });
    $('.rtab2').click(function(){
        $(this).css('background-color','black');
        $('.rtab1').css('background-color','rgb(179, 172, 172)');
        $('#rtab-1').fadeIn();
        $('#rtab-2').hide();

    });
    $('.rtab1').click(function(){
        $(this).css('background-color','black');
        $('.rtab2').css('background-color','rgb(179, 172, 172)');
        $('#rtab-2').fadeIn();
        $('#rtab-1').hide();

    });
    $('.rtab4').click(function(){
        $(this).css('background-color','black');
        $('.rtab3').css('background-color','rgb(179, 172, 172)');
        $('#rtab-3').fadeIn();
        $('#rtab-4').hide();

    });
    $('.rtab3').click(function(){
        $(this).css('background-color','black');
        $('.rtab4').css('background-color','rgb(179, 172, 172)');
        $('#rtab-4').fadeIn();
        $('#rtab-3').hide();

    });

});