var Country;
var city;
function countriesOfContinent(cn){

    $.ajax({
        method: "POST",
        url: "http://www.mednews.ir/fa/weather/countries" + '/' + cn.value,
        data: { continentid:cn.value }
    })
        .done(function(result) {
            $('.wether_continent').removeAttr("selected")
            $('#sd').html(result);



        });


}
function citiesOfCountry(ct){
    Country = document.querySelector(".weather_continent").value;
    $.ajax({
        method: "POST",
        url: "http://www.mednews.ir/fa/weather/cities/" + ct.value +"/" + Country,
        data: { counrtyid:ct.value , continentid: Country  }
    })
        .done(function(mfg) {
            $('#sd').html(mfg);
        });
}

function showWeather(sw){
    $.ajax({
        method: "POST",
        url: "https://www.yjc.ir/fa/weather/" + sw,
        data: { wcode : sw }
    })
        .done(function( sfg) {
            $('.wtr-bott').html(sfg);
        })
}
