<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<!-- *** HTML Template Meta *** -->
<title>bankinter</title>

<!--Style Sheets-->
<link rel="stylesheet" href="/tv_assets/bankinter/css/style.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="/tv_assets/bankinter/css/animate.css" media="screen" type="text/css" />

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
  background: #ffffff;
  position: fixed;
  bottom: 0;
  width: 100%;
  overflow: hidden;
  padding-left: 100%;
  border-top: 5px solid #1f99d5;
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
  color: #1f99d5;
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

  <video style="width: 97%;position:absolute;right: -210px;" autoplay loop>
    <source src="/tv_assets/bankslide/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <img src="/tv_assets/bankinter/images/main.png" style="position:relative;z-index:99;width: 100%; height: 100%; object-fit: cover; "/>
  <div class="ticker-wrap">
  <div class="ticker"></div>
  </div>
  <script src="/tv_assets/bankinter/jquery.js"></script>
  <script src="/tv_assets/bankinter/jquery-ui/jquery-ui.min.js"></script>
  <script src="/tv_assets/bankinter/telex-master/dist/telex.min.js"></script>
<script>
newsroll();
setInterval(function(){
  newsroll();
}, 300000);
function nowplaying() {
  $.ajax({
    method: "GET",
    url: "/api/nowplaying",
    success: function(data) {
      var gain = JSON.parse(data);
      var videocontainer = document.getElementById('media');
      var videosource = document.getElementById('mp4video');
      var newmp4 = "/storage/"+gain.video.substr(7)
      var newposter = '/tv_assets/bankinter/images/48.jpg';
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
          var newposter = '/tv_assets/bankinter/images/48.jpg';
          videosource.setAttribute('src', newmp4);
          videocontainer.load();
          videocontainer.play();
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
</script>
</body>
