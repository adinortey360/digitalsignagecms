<!doctype html>
<html>
<head>
<meta charset=utf-8 />
<!-- *** HTML Template Meta *** -->
<title>Welcome</title>

<!-- Style Sheet -->
<link rel="stylesheet" type="text/css" href="/tv_assets/welcome/style.css">
</head>
    <body>
        <iframe id="content" frameBorder="0"></iframe>
        <script>
            (function() {
                var e = document.getElementById('content'),
                    f = function( el, url ) {
                        el.src = url;
                    },
                    urls = ['/tv_assets/welcome/files/index.html'
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
                        setTimeout( arguments.callee, 20000 );
                    })();
            })();
        </script>
    </body>
</html>
