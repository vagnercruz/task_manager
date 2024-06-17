<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>
</head>
<body>
    <div class="ui container">
        @yield('content')
    </div>
</body>
</html>
