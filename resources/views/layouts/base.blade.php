<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($name==='Rebecca')
        <h1>Hello Admin!</h1>
        <h1>Hello {{ $name }}</h1>
    @else
        <h1>Hello, User.</h1>
    @endif

    <section>
        Hello, @yield('name').
        @yield('content')
    </section>

</body>
</html>
