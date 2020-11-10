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
    <link rel="stylesheet" href="css/Weather.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/weather.js"></script>
    <script src="https://kit.fontawesome.com/54b7eb4c14.js" crossorigin="anonymous"></script>
    <title>آب و هوا</title>


</head>
<body>
{include file="header.tpl"}
<section class="container">
    <section class="row wt-main-body">
        <div class="col-xs-36 col-sm-23 wt-right">
            <div class="wtr-header">
                <span>آب و هوا</span>
            </div>
            <div id="tst" class="col-xs-36 wtr-main "></div>
            <div class="col-xs-36 wtr-main" >

                <div class="wtrm-top" id="sd">
                    <div class="row">
                        <div class="col-xs-18">
                            <select  id="wt_continent" onchange="countriesOfContinent(this);">
                                <option  value="1" >آسیا</option>
                                <option value="2">استرلیا</option>
                                <option value="3">اروپا</option>
                                <option value="4">آفریقا</option>
                                <option value="6">آمریکای جنوبی</option>
                                <option value="5">آمریکای شمالی</option>
                            </select>

                        </div>
                        <div class="col-xs-18">
                            <select  id="wt_country" onchange="citiesOfCountry(this);">
                                <option selected value="101">ایران</option>
                                <option value="1">افغانستان</option>
                                <option value="11">ارمنستان</option>
                                <option value="15">آذربایجان</option>
                                <option value="18">بنگلادش</option>
                                <option value="37">کامبوج</option>
                                <option value="45">کشور چین</option>
                                <option value="80">گرجستان</option>
                            </select>
                        </div>
                    </div>
                    <div id="wDiv">
                        <div class="row">
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5  wtr-city">
                                <a href="#" onclick="showWeather('2254271')">آبادان</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5  wtr-city" >
                                <a href="" onclick="showweather()">اراک</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="" onclick="showweather()">ارومیه</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="" onclick="showweather()">اصفهان</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="" onclick="showweather()">اهواز</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="" onclick="showweather()">بابل</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="" onclick="showweather()">بابلسر</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="">بجنورد</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="">بناب</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="">بندر انزلی</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="">بندر عباس</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="">قشم</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="">بوشهر</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city">
                                <a href="">بیرجند</a>
                            </div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="col-xs-17 col-sm-11 col-md-7 col-lg-5 wtr-city"></div>
                            <div class="wrapper"></div>

                </div>
                <div class="wrapper"></div>

                </div>

                </div>
                <div class="col-xs-30 col-sm-30 col-md-24 col-lg-24 col-lg-pull-6 col-md-pull-9 col-sm-pull-2 wtr-bott">
                    <div class="wtrb-head">
                        وضعيت آب و هواي شهر
                        <span class="wtrb-city">
                            تهران
                        </span>
                        <span class="wtrb-time" dir="ltr">
                            (۰۲:۳۰ pm)
                        </span>
                    </div>
                    <div style="width: 100%">
                        <div class="col-xs-12 col-ms-7 col-sm-7 wtrb-r">
                            <div class="wtrb-r-in">
                                <span class="wtrb-r-in-1">آخرین بروز رسانی:</span>
                                <span class="wtrb-r-in-2" dir="ltr">۱۳۹۹/۰۸/۱۶</span>
                            </div>
                            <div class="wtrb-r-in">
                                <span class="wtrb-r-in-1">وضعیت:</span>
                                <span class="wtrb-r-in-2" dir="ltr">تمام ابري</span>
                            </div>
                            <div class="wtrb-r-in">
                                <span class="wtrb-r-in-1">سرعت باد:</span>
                                <span class="wtrb-r-in-2" dir="ltr">۷ km/h</span>
                            </div>
                            <div class="wtrb-r-in">
                                <span class="wtrb-r-in-1">رطوبت:</span>
                                <span class="wtrb-r-in-2" dir="ltr">۱۵%</span>
                            </div>
                            <div class="wtrb-r-in">
                                <span class="wtrb-r-in-1">طلوع آفتاب:</span>
                                <span class="wtrb-r-in-2" dir="ltr">۶:۳۳ am</span>
                            </div>
                            <div class="wtrb-r-in">
                                <span class="wtrb-r-in-1">غروب آفتاب:</span>
                                <span class="wtrb-r-in-2" dir="ltr">۵:۰۳ pm</span>
                            </div>
                        </div>
                        <div class="col-xs-30 col-ms-5 col-sm-5 wtrb-l">
                            <div class="wtrb-l-in-t">
                                <div class="wtrb-l-in-1">
                                    <span>۲۱°</span>
                                </div>
                                <div class="wtrb-l-in-2">
                                    <span >کمینه:</span>
                                    <span style="padding: 0 2px" dir="ltr">11°</span>
                                    <span style="margin-right: 10px">بیشینه:</span>
                                    <span style="padding: 0 2px" dir="ltr">23°</span>
                                </div>
                            </div>
                            <div class="wtrb-l-in-b">
                                <div class="wtrb-l-in-b-1">
                                    <span>فردا</span>
                                </div>
                                <div class="wtrb-l-in-b-2">
                                    <span class="wtrb-r-l-in-1">وضعيت:</span>
                                    <span class="wtrb-r-l-in-2" dir="ltr">تمام ابري</span>
                                </div>
                                <div class="wtrb-l-in-b-2">
                                    <span class="wtrb-r-l-in-1">کمینه:</span>
                                    <span class="wtrb-r-l-in-2" dir="ltr">۱۳°</span>
                                </div>
                                <div class="wtrb-l-in-b-2">
                                    <span class="wtrb-r-l-in-1">بیشینه:</span>
                                    <span class="wtrb-r-l-in-2" dir="ltr">۲۲°</span>
                                </div>
                            </div>

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