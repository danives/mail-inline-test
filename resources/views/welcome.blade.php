<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mail Test</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="w-[600px] mx-auto mt-6">
            <div class="bg-black rounded-md text-white p-6 text-center">
                <h1 class="text-3xl font-bold">
                    Hello world!
                </h1>
                <p>Some Text</p>
            </div>
        </div>

        <form method="post" action="{{ route('mail') }}">
            @csrf
            <div class="flex gap-1 items-center justify-center mt-8">
                <input class="border-gray-400 px-2 py-1 border rounded" type="email" name="email" placeholder="Email Address"/>
                <input class="border-gray-400 border bg-green-100 px-2 py-1 rounded" type="submit" value="Send Test Email"/>
            </div>
            @if (session()->get('message'))
                <div class="text-center mt-3">
                    <p>{{ session()->get('message') }}</p>
                </div>
            @endif
        </form>
    </body>
</html>
