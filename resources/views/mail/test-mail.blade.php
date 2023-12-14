<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail Test</title>
    @vite(['resources/css/mail.css'])
</head>
<body class="antialiased">
<div class="w-[600px] mx-auto mt-6">
    <div class="bg-black rounded-md text-white p-6 text-center">
        <h1 class="text-3xl font-bold">
            Hello world!
        </h1>
        <p class="text-red-800">Some red text</p>
    </div>
</div>
</body>
</html>
