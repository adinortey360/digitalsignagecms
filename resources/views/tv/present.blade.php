<!doctype html>
<html>
<head>
<meta charset=utf-8 />
<title>DSCMS Present</title>

<!-- Style Sheet -->
<link rel="stylesheet" type="text/css" href="/tv_assets/present/style.css">

<!-- Fav Icon -->
</head>
    <body>
        <iframe id="content" frameBorder="0"></iframe>
        <script>
            (function() {
                var e = document.getElementById('content'),
                    f = function( el, url ) {
                        el.src = url;
                    },
                    urls = [
                      @foreach($slides as $slide)
                      '/present/slide/{{ $slide->id }}',
                      @endforeach
                    ],
                    i = 0,
                    l = urls.length;

                    (function rotation() {
                        if ( i != l-1 ) {
                            i++
                        } else {
                            i = 0;
                        }
                        f( e, urls[i] );
                        setTimeout( arguments.callee, 9000 );
                    })();
            })();
        </script>
    </body>
</html>
