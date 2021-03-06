<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials._head')
</head>
<body>
    <div id="app">
        @include('layouts.partials._navigation')
        
        @yield('content')
        
    </div>
    <!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
    @include('layouts.partials._scripts')
    @yield('scripts')
</body>
</html>
