<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail Test</title>
    @vite('resources/css/mail.css')
    {{--
        You can replace the above vite call with a direct link to the CSS file, and while some
        is ported into the style tags, other parts aren't

        <link rel="stylesheet" href="./build/assets/mail-32b9dd76.css">
    --}}
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
