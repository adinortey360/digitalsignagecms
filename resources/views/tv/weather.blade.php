<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Weather</title>
<!--Style Sheets-->
<link rel="stylesheet" href="/tv_assets/weather/style.css" media="screen" type="text/css" />

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<!-- Background SVG File -->
<div id="background">
    <img src="images/background.jpg">
</div>
<div id="container-gradient">
</div>

<div class="line1" id="today"><div class="top">
        <p class="line">TODAY</p>
    </div>
    <div class="middle">
        <img src="/tv_assets/weather/images/w/09n.svg">
    </div>
    <div class="bottom">
        <p class="header" style="font-family: 'Bangers', sans-serif;">------</p>
        <p class="items" style=" font-size: 42px; margin: 0px 0px; ">T -  --.-<sup>°C</sup></p>
  <p class="items" style=" font-size: 42px; margin: 0px 0px; ">H - --%</p>
    </div></div>

<!--Line 2-->
<div class="line2" id="tomorrow"><div class="top">
        <p class="line">TOMORROW</p>
    </div>
    <div class="middle">
        <img src="/tv_assets/weather/images/w/09n.svg">
    </div>
    <div class="bottom">
        <p class="header">------</p>
        <p class="items" style=" font-size: 42px; margin: 0px 0px; ">T -  --.--<sup>°C</sup></p>
  <p class="items" style=" font-size: 42px; margin: 0px 0px; ">H - --%</p>
    </div></div>

<!--Line 3-->
<div class="line3" id="next"><div class="top">
        <p class="line">NEXT</p>
    </div>
    <div class="middle">
        <img src="/tv_assets/weather/images/w/09n.svg">
    </div>
    <div class="bottom">
        <p class="header">------</p>
        <p class="items" style=" font-size: 42px; margin: 0px 0px; ">T -  --.-<sup>°C</sup></p>
  <p class="items" style=" font-size: 42px; margin: 0px 0px; ">H - --%</p>
    </div></div>


<p style="color: #fff;position: absolute;bottom: 0px;font-size: 46px;text-align: center;box-shadow: 1px 1px 1px 4px #333;display: block;width: 100%;font-weight: bold;background: #56a0eecc;padding: 11px;margin: 0px;">
  <img src="/tv_assets/weather/images/calendar-with-a-clock-time-tools.svg" style=" width: 41px; " /> <span id="date"></span>
</p>
<script src="/tv_assets/weather/jquery.js"></script>
<script>
  getweather();
  setInterval(function(){
    var d = new Date();
    document.getElementById("date").innerHTML = d.toUTCString();
  }, 500);

  setInterval(function(){
    getweather();
  }, 30000);

  function getweather() {
    var url = "http://api.openweathermap.org/data/2.5/forecast?q=kasoa,gh&id=524901&appid=3214ade1d53615b807fa1f3e913cb5af";
      $.ajax({
        url: url,
        method: "GET",
        success: function(data) {
          //TODAY'S FORCAST
          console.log(data.list[0].weather);
          $("#today").html('<div class=\"top\">\r\n        <p class=\"line\">TODAY<\/p>\r\n    <\/div>\r\n    <div class=\"middle\">\r\n        <img src=\"/tv_assets/weather/images/w/'+data.list[0].weather[0].icon+'.svg\">\r\n    <\/div>\r\n    <div class=\"bottom\">\r\n        <p class=\"header\">'+data.list[0].weather[0].main+'<\/p>\r\n        <p class=\"items\" style=\" font-size: 42px; margin: 0px 0px; \">T -  '+convertKelvinToCelsius(data.list[0].main.temp_min)+'<sup>\u00B0C<\/sup><\/p>\r\n  <p class=\"items\" style=\" font-size: 42px; margin: 0px 0px; \">H - '+data.list[0].main.humidity+'%<\/p>\r\n    <\/div>');


          $("#tomorrow").html('<div class=\"top\">\r\n        <p class=\"line\">TOMORROW<\/p>\r\n    <\/div>\r\n    <div class=\"middle\">\r\n        <img src=\"/tv_assets/weather/images/w/'+data.list[1].weather[0].icon+'.svg\">\r\n    <\/div>\r\n    <div class=\"bottom\">\r\n        <p class=\"header\">'+data.list[1].weather[0].main+'<\/p>\r\n        <p class=\"items\" style=\" font-size: 42px; margin: 0px 0px; \">T -  '+convertKelvinToCelsius(data.list[1].main.temp_min)+'<sup>\u00B0C<\/sup><\/p>\r\n  <p class=\"items\" style=\" font-size: 42px; margin: 0px 0px; \">H - '+data.list[1].main.humidity+'%<\/p>\r\n    <\/div>');


          $("#next").html('<div class=\"top\">\r\n        <p class=\"line\">NEXT<\/p>\r\n    <\/div>\r\n    <div class=\"middle\">\r\n        <img src=\"/tv_assets/weather/images/w/'+data.list[2].weather[0].icon+'.svg\">\r\n    <\/div>\r\n    <div class=\"bottom\">\r\n        <p class=\"header\">'+data.list[2].weather[0].main+'<\/p>\r\n        <p class=\"items\" style=\" font-size: 42px; margin: 0px 0px; \">T -  '+convertKelvinToCelsius(data.list[2].main.temp_min)+'<sup>\u00B0C<\/sup><\/p>\r\n  <p class=\"items\" style=\" font-size: 42px; margin: 0px 0px; \">H - '+data.list[2].main.humidity+'%<\/p>\r\n    <\/div>');
        },
      });
  }




    function convertKelvinToCelsius(kelvin) {
    	if (kelvin < (0)) {
    		return '-';
    	} else {
    		return (kelvin-273.15).toFixed(1);
    	}
    }

</script>
</body>
</html>
