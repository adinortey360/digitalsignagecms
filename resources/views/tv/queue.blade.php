<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Queue</title>

<!--Style Sheets-->
<link rel="stylesheet" href="/tv_assets/queue/css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="/tv_assets/queue/css/animate.css" media="screen" type="text/css" />

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
    <p class="header">QUEUE &nbsp;-&nbsp;&nbsp;<span id="time"></span></p>
</div>

<!--Container For Left Content-->
<div id="container">
    <!--Oct Calendar-->
    <div id="left-content1" class="session" style=" height: 200px; top: 17%; ">

    </div>
    <div id="left-content1" class="queue">

    </div>
</div>

<!--Right Images-->
<div id="right-container1">
    <div class="skew">
        <img src="/tv_assets/queue/images/doctor.jpg" style="object-fit:cover;">
    </div>
</div>

<script src="/tv_assets/queue/jquery.js"></script>
<script>
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


        align += '<div class="event">'+
            '<div class="date">'+
                '<p class="month">#</p>'+
                '<p class="day">'+value.id+'</p>'+
            '</div>'+
            '<div class="description">'+
                '<p class="title">'+value.name+'</p>'+
                '<p class="time">'+position+'</p>'+
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


align += '<div class="event">'+
    '<div class="date">'+
        '<p class="day"><img style=" width: 65px; margin-top: 40px; " src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDU3OS42NjggNTc5LjY2OCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTc5LjY2OCA1NzkuNjY4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGcgaWQ9IldhaXRpbmdfZm9yX1ZhbGlkYXRpb24iPgoJCTxnPgoJCQk8cGF0aCBkPSJNMTE3Ljk5NCwxMTcuMTg1TDgwLjQzLDY1LjUyN0M1MS44NCw5MS4zMiwzMC43NTIsMTI0LjYzMiwxNy40NTYsMTY1LjcxOWw1OC4zNzksMTguOTYzICAgICBDODUuNTE2LDE1Ny44LDk5LjY0OCwxMzUuMzg1LDExNy45OTQsMTE3LjE4NXogTTQzOC40NDMsMjkuMjE3bDEuMzI2LTEuODM0QzQwOC4xMjcsMTMuNDg3LDM3MS4wNzIsNS4wMDQsMzI4LjY5NSwxLjgyNnY2MC4wMzIgICAgIGMyMS4yMTcsMi4xMDcsNDAuODY5LDUuNzc2LDU4LjU2MSwxMS4zODlDMzk1LjE5NSw1Ny4zNzEsNDE3LjM5MSwzMy40NjcsNDM4LjQ0MywyOS4yMTd6IE01OS42MTQsMjg5Ljc5OCAgICAgYzAtMTEuMjgsMC41NjMtMjEuOTk3LDEuMzk5LTMyLjQ0MUwyLjc3OSwyMzguNDY2QzEuMDksMjU0LjgzMiwwLDI3MS43NzksMCwyODkuODM0YzAsMjAuNzI1LDEuNDM1LDQwLjAzNCwzLjY2OSw1OC41MjUgICAgIGw1OC4wNy0xOC44NTRDNjAuNDg2LDMxNi44MjYsNTkuNjE0LDMwMy43NDgsNTkuNjE0LDI4OS43OTh6IE0yNTQuOTMyLDYxLjQwM1YxLjM3MmMtNDIuNzU4LDIuODMzLTc5Ljk3NywxMS4xODktMTExLjk2MywyNC43OTQgICAgIGwzNy42NzIsNTEuODA0QzIwMi41NDcsNjkuNTc3LDIyNy4wNSw2My44MDEsMjU0LjkzMiw2MS40MDN6IE00NjAuODIsNDYzLjI4MmwzNy4yMzYsNTEuMjIzICAgICBjMjcuNzAxLTI0LjcyMSw0OC42NDUtNTYuMTgxLDYyLjE1OC05NS4wODhsLTU4LjM0NC0xOC45NDVDNDkyLjE1NCw0MjUuMzc0LDQ3OC4zNSw0NDYuMTksNDYwLjgyLDQ2My4yODJ6IE01NzkuMTQxLDI3My41NTkgICAgIGMtMTYuNjU2LDQuMTc4LTQzLjI0OCw1LjEyMi01OS40NjksNS4yODZjMC4wOTIsMy42NjksMC4zNDYsNy4xOTMsMC4zNDYsMTAuOTUzYzAsMTMuNDc4LTAuNzgxLDI2LjE1Ni0xLjk2MSwzOC40NTMgICAgIGw1OC4yNywxOC45MDljMi4xMjUtMTguMTA5LDMuMzQyLTM3LjEwOSwzLjM0Mi01Ny4zNDRDNTc5LjY2OCwyODQuMjIxLDU3OS4zMDUsMjc4Ljk5LDU3OS4xNDEsMjczLjU1OXogTTE5Ljc5OSw0MjAuNTk3ICAgICBjMTMuOTMyLDM5LjUyNCwzNS4xNDcsNzEuNzg0LDYzLjg0Nyw5Ni41NDFsMzcuMzQ1LTUxLjM2N2MtMTguMzgyLTE3LjIwMS0zMi40MjMtMzguNzQ0LTQyLjU0MS02NC4yMUwxOS43OTksNDIwLjU5N3ogICAgICBNNTI2LjM1NywxMDkuMzM4Yy00LjM1OS0zLjU0Mi0yNy41NzQtMTIuNzE1LTQyLjgzMi0zLjIxNWMwLDAtMTMuNDIyLDEyLjYyNC0zMy40MjIsMzIuNDA0bC03LjA2NCw5LjczNmwtMS41NjItMS4xNDQgICAgIGMtMTYuNTg0LDE2LjU2NS0zNi40MzgsMzYuODczLTU2LjY3Miw1OC42ODhjLTMzLjUxMiwzNi4xMjgtNjcuNDk4LDgwLjc1Ny05Mi4xMjgsMTE0Ljg1MmwtNDYuNjQ1LTY2LjQwOCAgICAgYy03LjkwMS0yMC45MjUtMjUuMDY2LTMxLjU1MS00Ni4xMzctMjMuNjY4Yy0yMS4wNyw3Ljg0Ny0yMi4yNTEsMzIuNzg2LTE0LjM1LDUzLjcyOWw2MS43MDMsMTI3LjYyICAgICBjMC4wNTUsMC4xMjgsMC4xMjcsMC4yMzYsMC4xODIsMC4zODJjMi4wNTMsNi42MTEsNS42NDksMTIuODQyLDExLjEzNSwxNy44NzNjMTYuNTI5LDE1LjE0OSw0Mi4zMDQsMTQuMTUsNTcuNTYyLTIuMzA3ICAgICBjMCwwLDYwLjUyMS0xMDIuNjYzLDEyNS4yOTUtMTcyLjQ4NWM0Ny42NjItNTEuMzY4LDg5LjA5NC0xMDUuMjc4LDg5LjA5NC0xMDUuMjc4ICAgICBDNTQxLjI4NywxMzIuMTg4LDUzMS4yMjUsMTEzLjMxNiw1MjYuMzU3LDEwOS4zMzh6IE0zMjguNjk1LDUxNy43OTJ2NjAuMTA0YzQwLjYxNS0zLjAzMyw3NS44NTQtMTEuNDYxLDEwNi41NjgtMjQuMzk1ICAgICBMMzk3LjksNTAyLjExN0MzNzcuMzQsNTA5LjgzNiwzNTQuNDcxLDUxNS4yNjgsMzI4LjY5NSw1MTcuNzkyeiBNMTQ3LjA5Miw1NTUuMjY1YzMxLjA2MSwxMi41NTEsNjYuOTM0LDIwLjMwNywxMDcuODU4LDIzLjAzMSAgICAgVjUxOC4yMWMtMjYuMDY1LTIuMjM0LTQ5LjM4OC03LjIxMS03MC4yNC0xNC42NThMMTQ3LjA5Miw1NTUuMjY1eiIgZmlsbD0iI2ZmYzEwNyIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></p>'+
    '</div>'+
    '<div class="description">'+
        '<p class="title" style=" color: #FFC107; ">'+value.name+'</p>'+
        '<p class="time" style=" height: 51px; margin-top: 65px;color: #FFC107; ">IN SESSION: #'+value.code+'</p>'+
    '</div>'+
'</div>';

i++;
      });

      $('.session').html('<div class="event">'+
          '<div class="date">'+
              '<p class="day"><img style=" width: 65px; margin-top: 40px; " src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDU3OS42NjggNTc5LjY2OCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTc5LjY2OCA1NzkuNjY4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGcgaWQ9IldhaXRpbmdfZm9yX1ZhbGlkYXRpb24iPgoJCTxnPgoJCQk8cGF0aCBkPSJNMTE3Ljk5NCwxMTcuMTg1TDgwLjQzLDY1LjUyN0M1MS44NCw5MS4zMiwzMC43NTIsMTI0LjYzMiwxNy40NTYsMTY1LjcxOWw1OC4zNzksMTguOTYzICAgICBDODUuNTE2LDE1Ny44LDk5LjY0OCwxMzUuMzg1LDExNy45OTQsMTE3LjE4NXogTTQzOC40NDMsMjkuMjE3bDEuMzI2LTEuODM0QzQwOC4xMjcsMTMuNDg3LDM3MS4wNzIsNS4wMDQsMzI4LjY5NSwxLjgyNnY2MC4wMzIgICAgIGMyMS4yMTcsMi4xMDcsNDAuODY5LDUuNzc2LDU4LjU2MSwxMS4zODlDMzk1LjE5NSw1Ny4zNzEsNDE3LjM5MSwzMy40NjcsNDM4LjQ0MywyOS4yMTd6IE01OS42MTQsMjg5Ljc5OCAgICAgYzAtMTEuMjgsMC41NjMtMjEuOTk3LDEuMzk5LTMyLjQ0MUwyLjc3OSwyMzguNDY2QzEuMDksMjU0LjgzMiwwLDI3MS43NzksMCwyODkuODM0YzAsMjAuNzI1LDEuNDM1LDQwLjAzNCwzLjY2OSw1OC41MjUgICAgIGw1OC4wNy0xOC44NTRDNjAuNDg2LDMxNi44MjYsNTkuNjE0LDMwMy43NDgsNTkuNjE0LDI4OS43OTh6IE0yNTQuOTMyLDYxLjQwM1YxLjM3MmMtNDIuNzU4LDIuODMzLTc5Ljk3NywxMS4xODktMTExLjk2MywyNC43OTQgICAgIGwzNy42NzIsNTEuODA0QzIwMi41NDcsNjkuNTc3LDIyNy4wNSw2My44MDEsMjU0LjkzMiw2MS40MDN6IE00NjAuODIsNDYzLjI4MmwzNy4yMzYsNTEuMjIzICAgICBjMjcuNzAxLTI0LjcyMSw0OC42NDUtNTYuMTgxLDYyLjE1OC05NS4wODhsLTU4LjM0NC0xOC45NDVDNDkyLjE1NCw0MjUuMzc0LDQ3OC4zNSw0NDYuMTksNDYwLjgyLDQ2My4yODJ6IE01NzkuMTQxLDI3My41NTkgICAgIGMtMTYuNjU2LDQuMTc4LTQzLjI0OCw1LjEyMi01OS40NjksNS4yODZjMC4wOTIsMy42NjksMC4zNDYsNy4xOTMsMC4zNDYsMTAuOTUzYzAsMTMuNDc4LTAuNzgxLDI2LjE1Ni0xLjk2MSwzOC40NTMgICAgIGw1OC4yNywxOC45MDljMi4xMjUtMTguMTA5LDMuMzQyLTM3LjEwOSwzLjM0Mi01Ny4zNDRDNTc5LjY2OCwyODQuMjIxLDU3OS4zMDUsMjc4Ljk5LDU3OS4xNDEsMjczLjU1OXogTTE5Ljc5OSw0MjAuNTk3ICAgICBjMTMuOTMyLDM5LjUyNCwzNS4xNDcsNzEuNzg0LDYzLjg0Nyw5Ni41NDFsMzcuMzQ1LTUxLjM2N2MtMTguMzgyLTE3LjIwMS0zMi40MjMtMzguNzQ0LTQyLjU0MS02NC4yMUwxOS43OTksNDIwLjU5N3ogICAgICBNNTI2LjM1NywxMDkuMzM4Yy00LjM1OS0zLjU0Mi0yNy41NzQtMTIuNzE1LTQyLjgzMi0zLjIxNWMwLDAtMTMuNDIyLDEyLjYyNC0zMy40MjIsMzIuNDA0bC03LjA2NCw5LjczNmwtMS41NjItMS4xNDQgICAgIGMtMTYuNTg0LDE2LjU2NS0zNi40MzgsMzYuODczLTU2LjY3Miw1OC42ODhjLTMzLjUxMiwzNi4xMjgtNjcuNDk4LDgwLjc1Ny05Mi4xMjgsMTE0Ljg1MmwtNDYuNjQ1LTY2LjQwOCAgICAgYy03LjkwMS0yMC45MjUtMjUuMDY2LTMxLjU1MS00Ni4xMzctMjMuNjY4Yy0yMS4wNyw3Ljg0Ny0yMi4yNTEsMzIuNzg2LTE0LjM1LDUzLjcyOWw2MS43MDMsMTI3LjYyICAgICBjMC4wNTUsMC4xMjgsMC4xMjcsMC4yMzYsMC4xODIsMC4zODJjMi4wNTMsNi42MTEsNS42NDksMTIuODQyLDExLjEzNSwxNy44NzNjMTYuNTI5LDE1LjE0OSw0Mi4zMDQsMTQuMTUsNTcuNTYyLTIuMzA3ICAgICBjMCwwLDYwLjUyMS0xMDIuNjYzLDEyNS4yOTUtMTcyLjQ4NWM0Ny42NjItNTEuMzY4LDg5LjA5NC0xMDUuMjc4LDg5LjA5NC0xMDUuMjc4ICAgICBDNTQxLjI4NywxMzIuMTg4LDUzMS4yMjUsMTEzLjMxNiw1MjYuMzU3LDEwOS4zMzh6IE0zMjguNjk1LDUxNy43OTJ2NjAuMTA0YzQwLjYxNS0zLjAzMyw3NS44NTQtMTEuNDYxLDEwNi41NjgtMjQuMzk1ICAgICBMMzk3LjksNTAyLjExN0MzNzcuMzQsNTA5LjgzNiwzNTQuNDcxLDUxNS4yNjgsMzI4LjY5NSw1MTcuNzkyeiBNMTQ3LjA5Miw1NTUuMjY1YzMxLjA2MSwxMi41NTEsNjYuOTM0LDIwLjMwNywxMDcuODU4LDIzLjAzMSAgICAgVjUxOC4yMWMtMjYuMDY1LTIuMjM0LTQ5LjM4OC03LjIxMS03MC4yNC0xNC42NThMMTQ3LjA5Miw1NTUuMjY1eiIgZmlsbD0iI2ZmYzEwNyIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></p>'+
          '</div>'+
          '<div class="description">'+
              '<p class="title" style=" color: #FFC107; ">------ ----</p>'+
              '<p class="time" style=" height: 51px; margin-top: 65px;color: #FFC107; ">IN SESSION: #------</p>'+
          '</div>'+
      '</div>');
      if (align !="") {
        $('.session').html(align);
      }

    }
  });
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
