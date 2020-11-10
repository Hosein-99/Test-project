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
    <link rel="stylesheet" href="css/Archive.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/54b7eb4c14.js" crossorigin="anonymous"></script>
    <title>صفحه نخست</title>


</head>
<body>
{include file="header.tpl"}
<section class="container">
    <section class="row ar-main-body">
        <div class="col-xs-36 col-sm-23 ar-right">
            <div class="arr-header">
                <span>آرشیو</span>
            </div>
            <div class="col-xs-36 arr-main">
                <div class="arrm-form" >
                    <div>
                        <form action="" method="post" style="display: inline">
                            <div class="row form-top">
                                <div class="col-xs-36">
                                    <span class="form-lable">سرویس:</span>
                                    <select name="ar-form-1" id="ar-form-1">
                                        <option value="0">همه</option>
                                        <option value="1">صفحه نخست</option>
                                        <option value="2">سلامت</option>
                                        <option value="3">اجتماعی</option>
                                        <option value="4">علمی</option>
                                        <option value="5">اقتصاد</option>
                                    </select>
                                </div>
                                <div class="col-xs-36 col-sm-18">
                                    <span class="form-lable">موضوع:</span>
                                    <select name="ar-form-1" id="ar-form-2">
                                        <option value="0">همه</option>
                                    </select>
                                </div>
                                <div class="col-xs-36 col-sm-18">
                                    <span class="form-lable">قسمت:</span>
                                    <select name="ar-form-1" id="ar-form-3">
                                        <option value="0">همه</option>
                                    </select>
                                </div>
                                <div class="col-xs-36 col-sm-18">
                                    <span class="form-lable">از تاریخ:</span>
                                    <input type="text" value="1396/10/24" dir="ltr">
                                </div>
                                <div class="col-xs-36 col-sm-18">
                                    <span class="form-lable">تا تاریخ:</span>
                                    <input type="text" value="1399/08/16" dir="ltr">
                                </div>
                                <div class="col-xs-36 col-sm-18 col-md-12">
                                    <span class="form-lable">تعداد نتایج:</span>
                                    <select name="ar-form-1" id="ar-form-3">
                                        <option value="0">20</option>
                                        <option value="0">50</option>
                                        <option value="0">100</option>
                                    </select>
                                </div>
                                <div class="col-xs-36 col-sm-18 col-md-11 pull-left" style="text-align: left">
                                    <input type="submit" value="نمایش" dir="rtl">
                                </div>
                                <div class="wrapper"></div>
                            </div>
                        </form>
                        <div class="pages">
                            <span>صفحه 1 از 52</span>
                            <a href=""><i class="fa fa-caret-right"></i></a>
                        </div>
                        <div class="arrm-news">
                            {foreach $section3 as $news}
                                {if $news@index eq 20}
                                    {break}
                                {/if}
                                <div class="arrmn-in">
                                    <i class="fa fa-square"></i>
                                    <a href="">
                                        <span>{$news.titr}</span>
                                    </a>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-36 col-sm-13 col-md-9 rt-left">
            {include file="tablighvasat.tpl"}
            {include file="section16.tpl"}
        </div>
    </section>
</section>
<footer class="container-fluid main-Footer" >
    {include file="footer.tpl"}
</footer>

</body>
</html>