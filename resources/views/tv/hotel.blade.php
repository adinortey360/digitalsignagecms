<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<!-- *** HTML Template Meta *** -->
<title>Direct</title>

<!--Style Sheets-->
<link rel="stylesheet" href="/tv_assets/direct/css/style.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="/tv_assets/direct/css/animate.css" media="screen" type="text/css" />

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
  background: #000000b8;
  position: fixed;
  bottom: 0;
  width: 100%;
  overflow: hidden;
  padding-left: 100%;
  border-top: 5px solid #ffffff;
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
  color: #ffffff;
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
    <!--<img src="../school-calendar/images/pattern.svg">-->
</div>
</div>

<div id="container-gradient"></div>
<!--Right Images-->
<div id="right-container1" >
    <div class="skew" style="width: 100%;margin-left: 0px;">
      <video id="mp4video" style="width:100%;height: 100%;object-fit: cover;" autoplay loop>
        <source src="/tv_assets/bankslide/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div style="position: fixed;z-index: 9999;background: #0000008a;left: 56px;bottom: 115px;width: 46%;color: #fff;padding: 5px 60px;border-radius: 110px;">
      <div class="line1" id="today" style="width: 200px;">
          <div class="middle">
              <img src="/tv_assets/bankmagic/images/w/09n.svg" style=" width: 130px; ">
          </div>
        </div>

        <p style="     color: #fff;     float: right;     margin-top: -102px;     font-size: 40px; " id="time"></p>
    </div>
</div>
<!--Container For Left Content-->
<div id="container" >
    <!--Oct Calendar-->
    <div id="left-content1" style="top: 0px;left: 60%;height: 100%;width: 40%;background: #00000094;">
      <div style=" padding: 80px; ">
        <p style="text-transform:uppercase;color: #fff;font-size: 60px;margin-bottom: 20px;text-align:center;">
          Welcome back Adolph!
        </p>
        <p style=" color: #fff; font-size: 30px; ">
          I'm Sophia, your personal assistant. I can help.
        </p>
        <br />
        <p style="color: #fff;font-size: 34px;text-transform: uppercase;text-align:center;">
          Place an order | Get cleaning
        </p>
        <br />
        <p style="font-size: 35px;color: #fff;text-align:center;">
          <img style="width:35px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxLjQxMyA1MS40MTMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxLjQxMyA1MS40MTM7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjUuOTg5LDEyLjI3NGM4LjY2MywwLjA4NSwxNC4wOS0wLjQ1NCwxNC44MjMsOS4xNDhoMTAuNTY0YzAtMTQuODc1LTEyLjk3My0xNi44OC0yNS42NjItMTYuODggICAgYy0xMi42OSwwLTI1LjY2MiwyLjAwNS0yNS42NjIsMTYuODhoMTAuNDgyQzExLjM0NSwxMS42MzcsMTcuMzk4LDEyLjE5LDI1Ljk4OSwxMi4yNzR6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPHBhdGggZD0iTTUuMjkxLDI2LjIwNGMyLjU3MywwLDQuNzE0LDAuMTU0LDUuMTktMi4zNzdjMC4wNjQtMC4zNDQsMC4xMDEtMC43MzQsMC4xMDEtMS4xODVIMTAuNDZIMCAgICBDMCwyNi40MDcsMi4zNjksMjYuMjA0LDUuMjkxLDI2LjIwNHoiIGZpbGw9IiNGRkZGRkYiLz4KCQk8cGF0aCBkPSJNNDAuODgsMjIuNjQyaC0wLjA5OWMwLDAuNDU0LDAuMDM5LDAuODQ1LDAuMTEyLDEuMTg1YzAuNTAyLDIuMzM0LDIuNjQsMi4xODksNS4yMDQsMi4xODkgICAgYzIuOTM2LDAsNS4zMTYsMC4xOTMsNS4zMTYtMy4zNzRINDAuODh6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPHBhdGggZD0iTTM1LjcxOSwyMC4wNzh2LTEuNDk2YzAtMC42NjktMC43NzEtMC43MTEtMS43MjMtMC43MTFoLTEuNTU1Yy0wLjk1MSwwLTEuNzIyLDAuMDQyLTEuNzIyLDAuNzExICAgIHYxLjI4OXYxaC0xMXYtMXYtMS4yODljMC0wLjY2OS0wLjc3MS0wLjcxMS0xLjcyMi0wLjcxMWgtMS41NTZjLTAuOTUxLDAtMS43MjIsMC4wNDItMS43MjIsMC43MTF2MS40OTZ2MS4zMDYgICAgQzEyLjIxMywyMy45ODgsNC4wMTMsMzUuMDczLDMuNzE1LDM2LjQxNWwwLjAwNCw4Ljk1NWMwLDAuODI3LDAuNjczLDEuNSwxLjUsMS41aDQwYzAuODI3LDAsMS41LTAuNjczLDEuNS0xLjV2LTkgICAgYy0wLjI5NS0xLjMwMy04LjQ5My0xMi4zODMtMTEtMTQuOTg3VjIwLjA3OHogTTE5LjE3NywzNy42MmMtMC44MDUsMC0xLjQ1OC0wLjY1Mi0xLjQ1OC0xLjQ1OHMwLjY1My0xLjQ1OCwxLjQ1OC0xLjQ1OCAgICBzMS40NTgsMC42NTIsMS40NTgsMS40NThTMTkuOTgyLDM3LjYyLDE5LjE3NywzNy42MnogTTE5LjE3NywzMi42MmMtMC44MDUsMC0xLjQ1OC0wLjY1Mi0xLjQ1OC0xLjQ1OHMwLjY1My0xLjQ1OCwxLjQ1OC0xLjQ1OCAgICBzMS40NTgsMC42NTIsMS40NTgsMS40NThTMTkuOTgyLDMyLjYyLDE5LjE3NywzMi42MnogTTE5LjE3NywyNy42MjFjLTAuODA1LDAtMS40NTgtMC42NTItMS40NTgtMS40NTggICAgYzAtMC44MDUsMC42NTMtMS40NTgsMS40NTgtMS40NThzMS40NTgsMC42NTMsMS40NTgsMS40NThDMjAuNjM1LDI2Ljk2OSwxOS45ODIsMjcuNjIxLDE5LjE3NywyNy42MjF6IE0yNS4xNzcsMzcuNjIgICAgYy0wLjgwNSwwLTEuNDU4LTAuNjUyLTEuNDU4LTEuNDU4czAuNjUzLTEuNDU4LDEuNDU4LTEuNDU4YzAuODA2LDAsMS40NTgsMC42NTIsMS40NTgsMS40NThTMjUuOTgzLDM3LjYyLDI1LjE3NywzNy42MnogICAgIE0yNS4xNzcsMzIuNjJjLTAuODA1LDAtMS40NTgtMC42NTItMS40NTgtMS40NThzMC42NTMtMS40NTgsMS40NTgtMS40NThjMC44MDYsMCwxLjQ1OCwwLjY1MiwxLjQ1OCwxLjQ1OCAgICBTMjUuOTgzLDMyLjYyLDI1LjE3NywzMi42MnogTTI1LjE3NywyNy42MjFjLTAuODA1LDAtMS40NTgtMC42NTItMS40NTgtMS40NThjMC0wLjgwNSwwLjY1My0xLjQ1OCwxLjQ1OC0xLjQ1OCAgICBjMC44MDYsMCwxLjQ1OCwwLjY1MywxLjQ1OCwxLjQ1OEMyNi42MzUsMjYuOTY5LDI1Ljk4MywyNy42MjEsMjUuMTc3LDI3LjYyMXogTTMxLjE3NywzNy42MmMtMC44MDYsMC0xLjQ1OC0wLjY1Mi0xLjQ1OC0xLjQ1OCAgICBzMC42NTItMS40NTgsMS40NTgtMS40NThzMS40NTgsMC42NTIsMS40NTgsMS40NThTMzEuOTgzLDM3LjYyLDMxLjE3NywzNy42MnogTTMxLjE3NywzMi42MmMtMC44MDYsMC0xLjQ1OC0wLjY1Mi0xLjQ1OC0xLjQ1OCAgICBzMC42NTItMS40NTgsMS40NTgtMS40NThzMS40NTgsMC42NTIsMS40NTgsMS40NThTMzEuOTgzLDMyLjYyLDMxLjE3NywzMi42MnogTTMxLjE3NywyNy42MjFjLTAuODA2LDAtMS40NTgtMC42NTItMS40NTgtMS40NTggICAgYzAtMC44MDUsMC42NTItMS40NTgsMS40NTgtMS40NThzMS40NTgsMC42NTMsMS40NTgsMS40NThDMzIuNjM1LDI2Ljk2OSwzMS45ODMsMjcuNjIxLDMxLjE3NywyNy42MjF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /> <span>+233-20-000-1234</span>
        </p>
      </div>
    </div>
</div>


<div class="ticker-wrap">
<div class="ticker"></div>
</div>
<!--Footer Icons-->
<script src="/tv_assets/bankmagic/jquery.js"></script>
<script src="/tv_assets/bankmagic/jquery-ui/jquery-ui.min.js"></script>
<script>
nowplaying();
newsroll();
setInterval(function(){
  newsroll();
}, 300000);
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

setInterval(function(){
  getweather();
}, 10000);


window.setInterval(function(){
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


function nowplaying() {
  $.ajax({
    method: "GET",
    url: "/api/nowplaying",
    success: function(data) {
      var gain = JSON.parse(data);
      var videocontainer = document.getElementById('media');
      var videosource = document.getElementById('mp4video');
      var newmp4 = "/storage/"+gain.video.substr(7)
      var newposter = '/tv_assets/bankmagic/images/48.jpg';
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
          var newposter = '/tv_assets/bankmagic/images/48.jpg';
          videosource.setAttribute('src', newmp4);
          videocontainer.load();
          videocontainer.play();
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
            $("#today").html('<div class=\"top\">\r\n  <\/div>\r\n    <div class=\"middle\">\r\n        <img src=\"/tv_assets/weather/images/w/'+data.list[0].weather[0].icon+'.svg\" style=\" width: 130px; \">\r\n    <\/div>\r\n<\/div>');
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
