<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
    <div id="app">
        @include('layouts.navbar')

        @yield('content')
    </div>

    <!-- Scripts -->
    
    @include('layouts.scripts')


</body>
</html>
