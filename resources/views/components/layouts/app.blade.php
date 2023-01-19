<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Directory - {{ $title }}</title>
    <meta name="description"  content="{{$metaDescription ?? 'Default meta description'}}">
    @vite(['resources/css/app.css'])
</head>
<body>

<header>
    <x-layouts.navigation />
</header>

{{ $slot }}

<footer>
    <x-layouts.footer />
</footer>

</body>
</html>
