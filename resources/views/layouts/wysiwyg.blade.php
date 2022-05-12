<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DSCMS Technology') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/libs/ctools/build/content-tools.min.css"></head>
    <style>/* Alignment styles for images, videos and iframes in editable regions */

/* Center (default) */
[data-editable] iframe,
[data-editable] image,
[data-editable] [data-ce-tag=img],
[data-editable] img,
[data-editable] video {
    clear: both;
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
}

/* Left align */
[data-editable] .align-left {
    clear: initial;
    float: left;
    margin-right: 0.5em;
}

/* Right align */
[data-editable].align-right {
    clear: initial;
    float: right;
    margin-left: 0.5em;
}

/* Alignment styles for text in editable regions */
[data-editable] .text-center {
    text-align: center;
}

[data-editable] .text-left {
    text-align: left;
}

[data-editable] .text-right {
    text-align: right;
}</style>
<body>
        @yield('content')

    <!-- Scripts -->
    <script src="/libs/ctools/build/content-tools.js"></script>
    <script src="/libs/ctools/build/editor.js"></script>
</body>
</html>
