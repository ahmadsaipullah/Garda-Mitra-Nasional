<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/page.css">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    {{ $styles }}

    <title>{{ $title }}</title>
</head>

<body>

    <style>
        body {
           background: rgba(187, 29, 51, 0.08); 
           height:100%";
            font-family: Poppins;
        }

        li {
            margin-left: 50px;
        }

    </style>

    @include('layouts.homepage.navbar')

    <div id="auth">
        {{ $slot }}
    </div>

     @include('layouts.homepage.footer')

    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
