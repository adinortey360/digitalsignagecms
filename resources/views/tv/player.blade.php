<!doctype html>
<html>
<head>
<meta charset=utf-8 />
<!-- *** HTML Template Meta *** -->
<title>DSCMS Player</title>

<!-- Style Sheet -->
<style>
body {
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(47,36,1,1) 35%, rgba(0,0,0,1) 100%);
}
</style>
</head>
    <body>
       <div style=" max-width: 660px; margin: 120px auto; ">
            <h2 style="color:#fff;font-family: Helvetica;font-weight: bolder;font-size: 60px;text-align: center;margin-bottom: 10px;">DSCMS Player</h2>
            <p style="color:#fff;font-family: Arial;text-align: center;font-size: 19px;">Please select your the screen for display.</p>
            <br> <br>
            <select id="linksel" style=" width: 100%; font-size: 33px; font-weight: bold; font-family: Helvetica; padding: 11px; background: #00000059; border: none; color: #fff; border-radius: 5px; ">
            <option>Select screen</option>
            @foreach($links as $link)
                <option value="{{ $link->uri }}">{{ $link->title }}</option>
            @endforeach
            </select>
            <br>
            <button onclick="goToScreen()" style=" display: block; width: 100%; font-size: 40px; font-weight: bold; background: #00000059; border: none; color: #fff; margin-top: 24px; border: none; border-radius: 4px; padding: 9px; ">Setup screen</button>
       </div>

       <script>
        function goToScreen() {
            if(document.getElementById("linksel").value != "Select screen" && document.getElementById("linksel").value != "") {
                var linkuri = document.getElementById("linksel").value;
            window.location.href = '/tv/'+linkuri;
            }
        }
       </script>
    </body>
</html>
