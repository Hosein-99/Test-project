<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap_rtl.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/service2.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/service2.js"></script>
    <script src="https://kit.fontawesome.com/54b7eb4c14.js" crossorigin="anonymous"></script>
    <title>صفحه سرویس</title>
</head>
<body>
{include file="header.tpl"}
    <div class="container">
        <section class="row main_salamat">
            <div class="col-xs-36 col-md-31 col-lg-32">
                <div class="row">
                    <div class="col-xs-36 col-sm-24 col-md-24 marin-right-top">
                        <div class="col-xs-36 col-md-12 col-lg-12 right-part">
                            {include file="section4.tpl"}
                            {include file="section5.tpl"}
                            {include file="section6.tpl"}
                            {include file="section7.tpl"}
                        </div>
                        <div class="col-xs-36 col-md-24 col-lg-24 mid-part">
                            {include file="slider-section1-salamat.tpl"}
                            {include file="section2_salamat.tpl"}
                            {include file="section3_salamat.tpl"}
                        </div>
                    </div>
                </div>
                    <div class="col-xs-36 col-sm-12 col-md-12 left-part">

                        {include file="section14.tpl"}
                        <div class="hidden-xs">
                            {include file="tablighvasat.tpl"}
                        </div>

                        {include file="section-lable.tpl"}
                        {include file="section15.tpl"}
                        {include file="section16.tpl"}
                    </div>

            </div>

        </section>
    </div>


<footer class="container-fluid main-Footer" >
    {include file="footer.tpl"}
</footer>
</body>
</html>