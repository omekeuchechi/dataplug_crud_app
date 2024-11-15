<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}">
</head>
<body>
    @include('component.adminsidebar')
    @include('component.interface')
    @include('component.admintxt')
    @include('component.values')
    @include('component.board')

    {{-- the more content side --}}
<div class="app">
    @yield('content')
</div>
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/script.js') }}"></script>
</body>
</html>