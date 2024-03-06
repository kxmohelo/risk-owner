<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Install Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
</head>
<body>
    <livewire:hello-world />

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
