<!doctype html>
<html lang="en">
<head>

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap_rtl.css">
        <link rel="stylesheet" href="owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://kit.fontawesome.com/54b7eb4c14.js" crossorigin="anonymous"></script>
        <title>صفحه نخست</title>


</head>

<body>
{*-------------------!header-------------------------*}
{include file="header.tpl"}
{*-------------------!body-------------------------*}
<section class="container" id="main-body">
    <div class="row">
        <div class="col-xs-36 col-md-22 main-top-right" >
            {include file="slider_section1.tpl"}
            {include file="section2.tpl"}
            <div class="row">
                <div class="hidden-xs  hidden-ms col-sm-11 mright-top-butt" >

                    {include file="section4.tpl"}
                    {include file="section5.tpl"}
                    {include file="section6.tpl"}
                    {include file="section7.tpl"}
                    {include file="section8.tpl"}
                    {include file="section9.tpl"}
                    {include file="section10.tpl"}
                    {include file="section11.tpl"}
                    {include file="section12.tpl"}
                    {include file="section_tabligh.tpl"}
                    {include file="section13.tpl"}
                </div>
                {include file="section3.tpl"}
            </div>
        </div>
        <div class="col-md-10 hidden-ms hidden-xs hidden-sm   main-top-mid"  >
                {include file="tablighvasat.tpl"}
            <div class="col-xs-35" id="page" >
                {include file="section14_15_16.tpl"}
            </div>
        </div>
        <div class="col-md-4 hidden-ms hidden-xs hidden-sm main-top-left"  style="height: 237px;">
            {include file="tabligh_chap.tpl"}
        </div>
    </div>




    <div class="row main_butt" >
            {include file="section17.tpl"}
            {include file="section18.tpl"}
            {include file="section19.tpl"}
            {include file="section20.tpl"}
    </div>
    <div class="row main_butt_mid" >
        {include file="section21.tpl"}
        {include file="section22.tpl"}
        {include file="section23.tpl"}
        {include file="section24.tpl"}
    </div>
    <div class="row main-butt-butt" >
        {include file="section25.tpl"}
        {include file="section26.tpl"}
        {include file="section27.tpl"}
        {include file="section28.tpl"}
    </div>
</section>
{*-------------------!footer-------------------------*}
<footer class="container-fluid main-Footer" >
        {include file="footer.tpl"}
</footer>

</body>
</html>

