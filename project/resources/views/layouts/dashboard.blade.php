<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="R9nIuIOgs3vinojjbuCgDEAFVoFJjBpqbeZO0k3J">
    <title>@yield('title')</title>
    @stack('styles')

</head>
<body>
@include('layouts.header')
@include('dashboard.notifications.message')
@yield('content')
@include('dashboard.popups.popups')
<div id="toTop">&#8657;</div>
@stack('scripts')
</body>
</html>
