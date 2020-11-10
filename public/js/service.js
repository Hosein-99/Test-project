$(document).ready(function (){
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