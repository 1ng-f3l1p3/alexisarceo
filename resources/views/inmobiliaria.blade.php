<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InmoLaravel - Encuentra tu hogar ideal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F2EEE4] font-sans">
    <div class="min-h-screen flex flex-col">
        @include('components.header')
        @include('components.hero')
        @include('components.properties')
        @include('components.stats')
        @include('components.testimonials')
        @include('components.footer')
    </div>
</body>
</html>