@extends('layouts.presentation')

@section('content')

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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body, html {
      background: #52bf9a; /* Old browsers */
      background: -moz-linear-gradient(-45deg, #52bf9a 0%, #00ba78 100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(-45deg, #52bf9a 0%,#00ba78 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(135deg, #52bf9a 0%,#00ba78 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#52bf9a', endColorstr='#00ba78',GradientType=1 );
      background-size: cover;
    }
    </style>
</head>
<body>
    <div id="app">
        <div style="background: #13a974;position: fixed;left: 0px;top: 0px;height: 100%;width: 390px;">
          <img src="/img/teeth.png" style="width: 230px;display: block;vertical-align: middle;margin: auto;position: absolute;top: 0;left: 0;bottom: 0;right: 0;"/>
        </div>
        <div style="margin-left: 390px;padding: 60px;color: #fff;">
          <h1 style="text-transform: uppercase;font-weight: bold;font-size: 53px;">Good Oral Hygiene</h1>
          <br />
          <p style="font-weight: bold;font-size: 20px;">
            Maintaining good oral health is essential to maintaining good overall health. The goal of proper oral hygiene is to remove or prevent formation and buildup of plaque and tartar, to prevent dental caries and periodontal disease, and to decrease the incidence of halitosis.1-4
            <br />
            <br />
            Results of patient surveys clearly demonstrate that many are unaware of the importance of practicing good oral hygiene and its connection to overall health. For example, results from a May 2012 survey conducted by the American Dental Association regarding oral health found that many people are not certain of basic information regarding proper dental care, recommended replacement time frame for toothbrushes, and causes of dental caries.
          </p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
@endsection
