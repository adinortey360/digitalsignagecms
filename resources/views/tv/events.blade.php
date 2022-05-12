<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset=utf-8 />
<!-- *** HTML Template Meta *** -->
<title>Events</title>
<!--Style Sheet-->
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="/tv_assets/events/events.css">

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Oswald:700,300' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!--Web Components-->
<script src="/tv_assets/events/bower_components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="/tv_assets/events/bower_components/google-sheets/google-sheets.html">
<link rel="import" href="/tv_assets/events/bower_components/polymer/polymer.html">

</head>

<body id="gradient" unresolved>
    <!--Background Animation-->
    <div id="background">
        <img src="/tv_assets/events/images/background-buildings-1920.jpg" style="object-fit:cover;">
    </div>


<!--Header-->
<div id="header">UPCOMING EVENTS</div>

<!--Text Transition-->
<div  id="content">

<!--Information collected from google sheet-->
    <main layout horizontal>


         <section>
           @foreach($events as $event)
           <?php $date=date_create($event->date); ?>
           <div class="slides">
               <h2 class="date">{{ date_format($date,"M d, Y") }}</h2>
               <h2 class="event">{{ $event->title }}</h2>
               <p class="desc">{{ $event->description }}</p>
           </div>
           @endforeach

        </section>

    </main>
</div>

<!--Logo-->
<div  id="logo">
    <img src="/tv_assets/events/images/sample-logo.png"/>
</div>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/tv_assets/events/script.js"></script>
</html>
