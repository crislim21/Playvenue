<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlayVenue | {{ $title }}</title>

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    {{-- custom --}}
    <link rel="stylesheet" href="/css/custom.css">
    
</head>

<body>

    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    {{-- jQuery --}}
    <script src="/js/jquery-3.6.1.min.js"></script>

    {{-- custom js --}}
    <script src="/js/custom.js"></script>

</body>
</html>
