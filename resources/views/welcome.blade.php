<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
{{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @cookieconsentscripts
</head>
<body class="h-full antialiased text-gray-900 dark:text-gray-100 dark:bg-neutral-900">
<div class="h-full font-sans mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    <div class="h-full mx-auto max-w-3xl flex flex-col justify-center text-center lg:text-left">
        <h1 class="font-light text-5xl">👋🏼, I'm <span class="font-bold">phil</span></h1>

        <p class="text-neutral-500 mt-2 text-2xl">CTO/CPO @<a href="https://galee.io" title="Galee.io" target="_blank" rel="noopener nofollow">galee.io</p>

        <div class="flex justify-center lg:justify-start gap-x-4 -ml-3 mt-12 text-neutral-500 dark:text-neutral-100">
            <a href="https://linkedin.com/in/phikhi" title="LinkedIn" class="hover:opacity-50 transition-opacity" target="_blank" rel="noopener noreferrer">
                <x-fab-linkedin-in />
                <span class="sr-only">LinkedIn</span>
            </a>
            <a href="https://x.com/phikhi" title="X / Twitter" class="hover:opacity-50 transition-opacity" target="_blank" rel="noopener noreferrer">
                <x-fab-x-twitter />
                <span class="sr-only">X / Twitter</span>
            </a>
            <a href="https://github.com/phikhi" title="Github" class="hover:opacity-50 transition-opacity" target="_blank" rel="noopener noreferrer">
                <x-fab-github />
                <span class="sr-only">Github</span>
            </a>
            <a href="https://www.youtube.com/@phikhi_" title="Youtube" class="hover:opacity-50 transition-opacity" target="_blank" rel="noopener noreferrer">
                <x-fab-youtube />
                <span class="sr-only">Youtube</span>
            </a>
        </div>

        <nav role="navigation" class="flex flex-col gap-y-2 mt-24 text-2xl font-light">
        <span><a href="#" class="text-pink-500 hover:text-white hover:bg-pink-500 rounded p-1 transition-colors">
                <span class="font-semibold">about</span>://</a></span>
            <span><a href="#" class="text-pink-500 hover:text-white hover:bg-pink-500 rounded p-1 transition-colors">what.<span class="font-semibold">i.do</span></a></span>
            <span><a href="#" class="text-pink-500 hover:text-white hover:bg-pink-500 rounded p-1 transition-colors">what.<span class="font-semibold">i.write</span></a></span>
            <span><a href="#" class="text-pink-500 hover:text-white hover:bg-pink-500 rounded p-1 transition-colors">/?<span class="font-semibold">lets-chat</span>=true</a></span>
        </nav>
    </div>

</div>

@livewireScripts
@cookieconsentview
</body>
</html>
