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
    <link rel="stylesheet" href="css/rt.css">
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
    <section class="row rt-main-body">
        <div class="col-xs-36 col-sm-23 rt-right">
            <div class="rtr-header">
                <span>تماس با ما</span>
            </div>
            <section class="col-xs-36 rt-right">
                <div class="rtr-main">
                    <div class="row">
                        <div class="col-xs-36 col-ms-18 col-sm-18">
                            <div class="rtrm-rform text-center">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><span>استان:</span></td>
                                            <td>
                                                <select name="ostan" id="ostan-ha">
                                                    <option value="1"></option>
                                                    <option value="2"></option>
                                                    <option value="3"></option>
                                                    <option value="4"></option>
                                                    <option value="5"></option>
                                                    <option value="6"></option>
                                                    <option value="7"></option>
                                                    <option value="8"></option>
                                                    <option value="9"></option>
                                                    <option value="10"></option>
                                                    <option value="11"></option>
                                                    <option value="12"></option>
                                                    <option value="13"></option>
                                                    <option value="14"></option>
                                                    <option value="15"></option>
                                                    <option value="16"></option>
                                                    <option value="17"></option>
                                                    <option value="18"></option>
                                                    <option value="19"></option>
                                                    <option value="20"></option>
                                                    <option value="21"></option>
                                                    <option value="22"></option>
                                                    <option value="23"></option>
                                                    <option value="24"></option>
                                                    <option value="25"></option>
                                                    <option value="26"></option>
                                                    <option value="27"></option>
                                                    <option value="28"></option>
                                                    <option value="29"></option>
                                                    <option value="30"></option>
                                                    <option value="31"></option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>شهر:</span></td>
                                            <td>
                                                <select name="ostan" id="ostan-ha">
                                                    <option value="1">شهر مورد نظر خود را انتخاب کنید</option>

                                                </select>
                                        </tr>
                                        <tr>
                                            <td><span>تاریخ:</span></td>
                                            <td>
                                                <input type="text" value="1399/8/15" class="date" readonly>
                                                <img src="" alt="" style="cursor: pointer">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td >
                                                <input  type="submit" value="نمایش" class="btn show">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-36 col-ms-18 col-sm-18 ">
                            <div class="rtrm-lfrom">
                                <table>
                                    <tr style="">
                                        <th colspan="2" style="background-color: #1b1b1b;text-align: center;color: white">
                                            اوقات شرعی به افق تهران
                                        </th>
                                    </tr>

                                    <tbody style="text-align: center;color: black">
                                        <tr>
                                            <td>اذان صبح</td>
                                            <td>۰۵:۰۴:۱۰</td>
                                        </tr>
                                        <tr>
                                            <td>طلوع افتاب</td>
                                            <td>۰۶:۳۱:۰۳</td>
                                        </tr>
                                        <tr>
                                            <td>اذان ظهر</td>
                                            <td>۱۱:۴۸:۵۴</td>
                                        </tr>
                                        <tr>
                                            <td>غروب آفتاب</td>
                                            <td>۱۷:۰۵:۰۹</td>
                                        </tr>
                                        <tr>
                                            <td>اذان مغرب</td>
                                            <td>۱۷:۲۳:۰۴</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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