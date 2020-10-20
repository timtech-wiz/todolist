<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'TodoList')}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
       @yield('content') 
    </div>
    
    <div class="footer">
        <footer class="text-center">
            copyright 2020 &copy; TodosList
        </footer>
    </div>
    
</body>
</html>