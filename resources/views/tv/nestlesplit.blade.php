<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Queue</title>

<!--Style Sheets-->
<link rel="stylesheet" href="/tv_assets/milomagic/css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="/tv_assets/milomagic/css/animate.css" media="screen" type="text/css" />

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style>
.telex {
  position: fixed;
bottom: 0px;
z-index: 99999;
left: 0px;
width: 100%;
height: 65px;
background: #ffc107;
}
</style>
<style>
      @-webkit-keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
@keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
.ticker-wrap {
  position: fixed;
      bottom: 0px;
      z-index: 99999;
      left: 0px;
      width: 100%;
      height: 65px;
      background: #00ac4d;
      position: fixed;
      bottom: 0;
      width: 100%;
      overflow: hidden;
      padding-left: 100%;
      border-top: 5px solid #f1da00;
}

.ticker {
  display: inline-block;
  height: 4rem;
  line-height: 4rem;
  white-space: nowrap;
  padding-right: 100%;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-name: ticker;
  animation-name: ticker;
  -webkit-animation-duration: 600s;
  animation-duration: 600s;
}
.ticker__item {
  display: inline-block;
  padding: 0 2rem;
  font-size: 2rem;
  color: #f1da00;
}


.zoom {
  animation: scale 40s linear infinite;
}

@keyframes scale {
  50% {
    -webkit-transform:scale(1.2);
    -moz-transform:scale(1.2);
    -ms-transform:scale(1.2);
    -o-transform:scale(1.2);
    transform:scale(1.2);
  }
}

    </style>
</head>

<body>
<!--Background Animation-->
<div id="background-container">
<div id="background">
</div>
</div>

<div id="container-gradient"></div>

<!--Header-->
<div class="cornered">
    <p class="header" style=" padding-top: 15px;margin-left: 6px; ">ORDERS &nbsp;-&nbsp;&nbsp;<span id="time"></span></p>
</div>

<!--Container For Left Content-->
<div id="container">
    <!--Oct Calendar-->
    <div id="left-content1" class="session" style="height: auto;top: calc(8% + 10px);background: #008a3d;left: 0px;padding-left: 1%;z-index: 0;">

    </div>
	<br/>
    <div id="left-content1" class="queue" style="top: calc(26% + 15px);">

    </div>
</div>

<!--Right Images-->
<div id="right-container1">
    <div class="skew" style=" width: 57%;transform: initial; ">
      <video id="media" style="width:100%;object-fit: cover;height: 50vh;border-top-left-radius: 10px;" autoplay controls>
        <source id="mp4video" src="/tv_assets/milomagic/video.mp4" type="video/mp4" style=" width: 190px; ">
        Your browser does not support the video tag.
      </video>


      <img id="bannerads" class="zoom" src="/tv_assets/milomagic/images/1.jpg" style="width:100%;transform: initial;margin-left: 0px;object-fit: cover;height: 50vh;margin-top: -4px;" />
    </div>
</div>
<div style="position: absolute;margin-left: 81%;width: 19%;text-align: center;height: 100%;background: #4b3d30;">
  <div class="line1" id="today"><div class="top">
          <p class="line" style="color:#fff;font-size: 35px;margin-bottom: 0px;">TODAY</p>
      </div>
      <div class="middle">
          <img src="/tv_assets/milomagic/images/w/09n.svg" style=" width: 180px; ">
      </div>
      <div class="bottom">
          <p class="header" style="font-family: 'Bangers', sans-serif;color:#fff;text-align:center;    margin-left: 0px;">------</p>
          <p class="items" style=" font-size: 42px; margin: 0px 0px;color:#fff; ">T -  --.-<sup>°C</sup></p>
    <p class="items" style=" font-size: 42px; margin: 0px 0px;color:#fff; ">H - --%</p>
      </div></div>


      <div>
        <img id="ad1" src="" style="width:100%;margin-top: 38px;"/>
        <img id="ad2" src="" style="width:100%;margin-top: -80px;"/>
      </div>
</div>
<div class="ticker-wrap">
<div class="ticker"></div>
</div>
<script src="/tv_assets/milomagic/jquery.js"></script>
<script src="/tv_assets/milomagic/jquery-ui/jquery-ui.min.js"></script>
<script src="/tv_assets/milomagic/telex-master/dist/telex.min.js"></script>
<script>
newsroll();
showad();
smallads1();
smallads2();
nowplaying();
setInterval(function(){
  getweather();
}, 30000);

setInterval(function(){
  showad();
}, 9500);

setInterval(function(){
  smallads1();
}, 10000);

setInterval(function(){
  smallads2();
}, 15000);

setInterval(function(){
  newsroll();
}, 300000);

window.setInterval(function(){
  getqueue();
  getsession();

  var d = new Date();
  var h = d.getHours();
  var m = d.getMinutes();
  var s = d.getSeconds();

  if (m.toString().length == 1) {
            var m = "0" + m;
        }

  if (s.toString().length == 1) {
            var s = "0" + s;
        }

  document.getElementById("time").innerHTML = h+':'+m+':'+s;
}, 1000);
function getqueue() {
  //document.getElementById('queue').innerHTML = '';
  $.ajax({
    method: "GET",
    url: "/api/queue",
    success: function(data) {
      var align = "";
      var i = 1;
      $.each( data, function( key, value ) {
        if (i == 1) {
          var position = "NEXT IN QUEUE";
        } else {
          var ordinal = ordinal_suffix_of(i);
          var position = ordinal + " IN QUEUE";
        }


        align += '<div class="event" style="margin-top: 10px;">'+
            '<div class="description">'+
                '<p class="title">#'+value.id+' '+value.name+'</p>'+
                '<p class="time" style="margin-top:10px;">'+position+'</p>'+
            '</div>'+
        '</div>';
i++;
      });

      $('.queue').html(align);
    }
  });
}

function getsession() {
  //document.getElementById('queue').innerHTML = '';
  $.ajax({
    method: "GET",
    url: "/api/session",
    success: function(data) {
      var align = "";
      var i = 1;
      $.each( data, function( key, value ) {


align += '<div class="event" style="margin-top:0px;">'+
    '<div class="description">'+
	'<p class="title">#'+value.id+' '+value.name+'</p>'+
        '<p class="time" style="height: 25px;margin-top: 10px;color: #ffffff;">PROCESSING: #'+value.code+'</p>'+
    '</div>'+
'</div>';

i++;
      });

      $('.session').html('<div class="event" style="margin-top:0px;">'+
          '<div class="description">'+
              '<p class="title" style=" color: #ffffff; ">WAIT...</p>'+
              '<p class="time" style="height: 25px;margin-top: 10px;color: #ffffff;">PROCESSING: #------</p>'+
          '</div>'+
      '</div>');
      if (align !="") {
        $('.session').html(align);
      }

    }
  });
}



function newsroll() {
  $.ajax({
    method: "GET",
    url: "/api/news",
    success: function(data) {
      var align = "";
      $.each( data, function( key, value ) {
        align +='<div class="ticker__item">'+value.title+'</div>'
      });

      $('.ticker').html(align);
    }
  });
}

function getweather() {
  var url = "http://api.openweathermap.org/data/2.5/forecast?q=kasoa,gh&id=524901&appid=3214ade1d53615b807fa1f3e913cb5af";
    $.ajax({
      url: url,
      method: "GET",
      success: function(data) {
        //TODAY'S FORCAST
        $("#today").html('<div class=\"top\">\r\n        <p class=\"line\" style=\"color:#fff;font-size: 35px;margin-bottom: 0px;\">TODAY<\/p>\r\n    <\/div>\r\n    <div class=\"middle\">\r\n        <img src=\"/tv_assets/weather/images/w/'+data.list[0].weather[0].icon+'.svg\" style=\" width: 180px; \">\r\n    <\/div>\r\n    <div class=\"bottom\">\r\n        <p class=\"header\" style=\"font-family: Bangers, sans-serif;color:#fff;text-align:center;    margin-left: 0px;\">'+data.list[0].weather[0].main+'<\/p>\r\n        <p class=\"items\" style=\" font-size: 42px; margin: 0px 0px;color:#fff; \">T -  '+convertKelvinToCelsius(data.list[0].main.temp_min)+'<sup>\u00B0C<\/sup><\/p>\r\n  <p class=\"items\" style=\" font-size: 42px; margin: 0px 0px;color:#fff; \">H - '+data.list[0].main.humidity+'%<\/p>\r\n    <\/div>');
      },
    });
}


function showad() {
  var banner = Math.floor(Math.random() * 6) + 1;
  var bannerurl = '/tv_assets/milomagic/images/'+banner+'.jpg'
  $('#bannerads').attr('src', bannerurl);
}

function smallads1() {
  var banner = Math.floor(Math.random() * 17) + 1;
  var bannerurl = '/tv_assets/milomagic/images/'+banner+'.png'
  $('#ad1').attr('src', bannerurl);
}

function smallads2() {
  var banner2 = Math.floor(Math.random() * 17) + 1;
  var bannerurl2 = '/tv_assets/milomagic/images/'+banner2+'.png'
  $('#ad2').attr('src', bannerurl2);
}

function nowplaying() {
  $.ajax({
    method: "GET",
    url: "/api/nowplaying",
    success: function(data) {
      var gain = JSON.parse(data);
      var videocontainer = document.getElementById('media');
      var videosource = document.getElementById('mp4video');
      var newmp4 = "/storage/"+gain.video.substr(7)
      var newposter = '/tv_assets/milomagic/images/48.jpg';
      videosource.setAttribute('src', newmp4);
      videocontainer.load();
      videocontainer.play();
    }
  });
}

document.getElementById('media').addEventListener('ended',endHandler,false);
    function endHandler(e) {
      $.ajax({
        method: "GET",
        url: "/api/endvideo",
        success: function(data) {
          var gain = JSON.parse(data);
          var videocontainer = document.getElementById('media');
          var videosource = document.getElementById('mp4video');
          var newmp4 = "/storage/"+gain.video.substr(7)
          var newposter = '/tv_assets/milomagic/images/48.jpg';
          videosource.setAttribute('src', newmp4);
          videocontainer.load();
          videocontainer.play();
        }
      });
    }



function convertKelvinToCelsius(kelvin) {
  if (kelvin < (0)) {
    return '-';
  } else {
    return (kelvin-273.15).toFixed(1);
  }
}

function ordinal_suffix_of(i) {
    var j = i % 10,
        k = i % 100;
    if (j == 1 && k != 11) {
        return i + "st";
    }
    if (j == 2 && k != 12) {
        return i + "nd";
    }
    if (j == 3 && k != 13) {
        return i + "rd";
    }
    return i + "th";
}

</script>
</body>
</html>
