<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>{{ Config::get('graham-campbell/core::name') }} - @section('title')
@show</title>
<div id="wrap">
@include('partials.header')
</head>
<body>
@include('partials.navbar')
@section('top')
@show
<div class="container">
@include('partials.notifications')
@section('content')
@show
@include('partials.footer')
@section('bottom')
@show
</body>
</html>
