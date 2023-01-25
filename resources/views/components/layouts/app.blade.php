<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Directory - {{ $title }}</title>
    <meta name="description"  content="{{$metaDescription ?? 'Default meta description'}}">
    @vite(['resources/css/app.css'])
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>

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
