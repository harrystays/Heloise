<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'My Blog'))</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="Latest blog posts" href="{{ route('post.feed.index') }}" />
</head>
<body>
    <header>
        @include('partials._navbar')
    </header>

    <div class="row flex-spaces flex-center">
        <div class="col col-md-10 child-borders">
            @include('partials._alert')
            @yield ('content')
        </div>
    </div>
    @include('partials._footer')

    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
