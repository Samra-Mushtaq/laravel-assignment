<!doctype html>
<html>
<head>
   @include('layouts.head')
</head>
<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('layouts.sidebar')
            <div class="nk-wrap ">
                @include('layouts.header')
                @yield('content')
                @include('layouts.footer')
            </div>
        </div>
    </div>
</body>
</html>