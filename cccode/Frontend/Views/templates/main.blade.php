<!doctype html>
<html lang="en">
<head>
    <title> DORE || {{ $title or '' }}</title>
    @include('includes.scripts_top')
    @include('includes.scripts_search')
    @stack('head')
</head>
    @include('cpn.comment_fb')
<body>
    @include('layout.header_home_content')

    <div class="section wb">

            {{--Slider--}}
            @includeWhen([$hasSlider],'layout.slider')
            {{--Content--}}
            @yield('content')
            {{-- Sidebar--}}
            @yield('sidebar')

    </div>

</body>
    @include('includes.scripts_bottom')
    @stack('tail')
</html>