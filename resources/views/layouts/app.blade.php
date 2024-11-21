<!DOCTYPE html>
<html lang="{{ config('app.locale') }}"  {{-- prefix="og: http://ogp.me/ns#"--}} >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Title
    </title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <div id="app">
        <x-header />

        <main>
            @yield('content')
        </main>
    
        <x-footer />
    </div>

</body>
</html>