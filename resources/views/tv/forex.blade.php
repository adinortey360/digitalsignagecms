<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<!-- *** HTML Template Meta *** -->
<title>forex</title>

<!--Style Sheets-->
<link rel="stylesheet" href="/tv_assets/forex/css/style.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="/tv_assets/forex/css/animate.css" media="screen" type="text/css" />

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
  background: #71297d;
  position: fixed;
  bottom: 0;
  width: 100%;
  overflow: hidden;
  padding-left: 100%;
  border-top: 5px solid #6f2a7a;
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
    <style>
    body {
      margin: 0;
    }
    </style>
</head>
<body>
<img style="
    position: absolute;
    z-index: 100;
    left: 53%;
    width: 88px;
    margin-top: 86px;
" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDU2LjYwNiw3OS4zNDdMMzgxLjY1Myw0LjM5NEMzNzguODQsMS41ODEsMzc1LjAyNSwwLDM3MS4wNDcsMEgxNDAuOTUzYy0zLjk3OCwwLTcuNzkzLDEuNTgxLTEwLjYwNiw0LjM5NCAgICBMNTUuMzk0LDc5LjM0N0M1Mi41ODEsODIuMTYsNTEsODUuOTc1LDUxLDg5Ljk1M3YyMDkuMjI2YzAsMjUuOTkzLDYuNjA5LDUxLjc3NywxOS4xMTMsNzQuNTY0ICAgIGMxMi41MDQsMjIuNzg4LDMwLjcwMiw0Mi4yMTIsNTIuNjI2LDU2LjE3NWwxMjUuMjAzLDc5LjczNEMyNTAuNCw1MTEuMjE3LDI1My4yLDUxMiwyNTYsNTEyczUuNi0wLjc4Myw4LjA1OC0yLjM0OCAgICBsMTI1LjIwMi03OS43MzRjMjEuOTI1LTEzLjk2Miw0MC4xMjMtMzMuMzg3LDUyLjYyNy01Ni4xNzVDNDU0LjM5MSwzNTAuOTU2LDQ2MSwzMjUuMTcxLDQ2MSwyOTkuMTc5Vjg5Ljk1MyAgICBDNDYxLDg1Ljk3NSw0NTkuNDE5LDgyLjE2LDQ1Ni42MDYsNzkuMzQ3eiBNMzY3LjAzNywyMTUuMzg2bC00MS4zNDcsNDQuOTI2bDcuMDEzLDYwLjYxOWMwLjYyMyw1LjM3OC0xLjcwMiwxMC42NzQtNi4wOCwxMy44NTcgICAgYy00LjM2NywzLjE3NC0xMC4xMTksMy43NjYtMTUuMDU3LDEuNTA5TDI1NiwzMTAuODkzbC01NS41NjYsMjUuNDA0Yy00LjkyMywyLjI1LTEwLjY3OCwxLjY3NC0xNS4wNTctMS41MDkgICAgYy00LjM3OC0zLjE4My02LjcwMy04LjQ3OS02LjA4LTEzLjg1N2w3LjAxMy02MC42MTlsLTQxLjM0Ny00NC45MjZjLTMuNjY4LTMuOTg1LTQuOTAyLTkuNjM5LTMuMjI5LTE0Ljc5MSAgICBjMS42NzMtNS4xNTIsNS45OTMtOS4wMDEsMTEuMzAzLTEwLjA3MWw1OS44OTktMTIuMDczbDMwLjAwMS01My4xNjhjMi42Ni00LjcxMyw3LjY1Mi03LjYyOCwxMy4wNjQtNy42MjggICAgczEwLjQwNCwyLjkxNSwxMy4wNjQsNy42MjhsMzAuMDAxLDUzLjE2OGw1OS44OTksMTIuMDczYzUuMzEsMS4wNyw5LjYzLDQuOTE5LDExLjMwMywxMC4wNzEgICAgQzM3MS45NDEsMjA1Ljc0NywzNzAuNzA1LDIxMS40MDEsMzY3LjAzNywyMTUuMzg2eiIgZmlsbD0iIzZmMmE3YSIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
  <video id="mp4video" style="width: 42%;position:absolute;left: 0px;" autoplay loop>
    <source src="/tv_assets/bankslide/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <img id="bannerads" class="" src="/tv_assets/forex/images/1.jpg" style="width: 42%;transform: initial;margin-left: 0px;object-fit: cover;height: 592px;margin-top: -5px;position: absolute;bottom: 71px;" />
  <img src="/tv_assets/forex/images/main.png" style="position:relative;z-index:99;width: 100%; height: 100%; object-fit: cover; "/>

<iframe style="position: absolute;z-index: 100;top: 0px;width: 31%;right: 0px;height: calc(93% + 3px);" src="https://investingwidgets.com/live-currency-cross-rates?theme=lightTheme&roundedCorners=true&pairs=1,3,2,4,7,5,8,6,9,10,49,11,1638,100,1722,1808,1809,2129" width="100%" height="100%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Powered by <a href="https://www.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=LIVE_CURRENCY_X_RATES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>
  <div class="ticker-wrap">
  <div class="ticker"></div>
  </div>
  <script src="/tv_assets/forex/jquery.js"></script>
  <script src="/tv_assets/forex/jquery-ui/jquery-ui.min.js"></script>
  <script src="/tv_assets/forex/telex-master/dist/telex.min.js"></script>
<script>
newsroll();

setInterval(function(){
  newsroll();
}, 300000);

showad();
setInterval(function(){
  showad();
}, 9000);

function nowplaying() {
  $.ajax({
    method: "GET",
    url: "/api/nowplaying",
    success: function(data) {
      var gain = JSON.parse(data);
      var videocontainer = document.getElementById('media');
      var videosource = document.getElementById('mp4video');
      var newmp4 = "/storage/"+gain.video.substr(7)
      var newposter = '/tv_assets/forex/images/48.jpg';
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
          var newposter = '/tv_assets/forex/images/48.jpg';
          videosource.setAttribute('src', newmp4);
          videocontainer.load();
          videocontainer.play();
        }
      });
    }


    function showad() {
      var banner = Math.floor(Math.random() * 6) + 1;
      var bannerurl = '/tv_assets/forex/images/'+banner+'.jpg'
      $('#bannerads').attr('src', bannerurl);
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
</script>
</body>
