@extends('_layouts.blank')

@php
    $page->title = 'Welcome, I am Phil!';
@endphp

@section('body')
    <p class="m-0">
        <span class="text-gray-400 flex-1 typing items-center">Last update: {{ date('r') }} on ttys000</span>
    </p>
    <p class="m-0 mt-2">
        <span class="text-green-400">$</span>
        <span class="flex-1 typing items-center pl-2">find / -iname phikhi</span>
    </p>
    <p class="m-0">
        <span class="text-gray-400 flex-1 typing items-center">/usr/bin/phikhi</span>
    </p>
    <p class="m-0 mt-2">
        <span class="text-green-400">$</span>
        <span class="flex-1 typing items-center pl-2">man phikhi</span>
    </p>
    <p class="m-0 mt-4">
        <span class="text-gray-400 flex-1 typing items-center mb-4">
            NAME
            <p class="pl-8 my-2">Philippe Khill</p>
        </span>
        <span class="text-gray-400 flex-1 typing items-center mb-4">
            SYNOPSIS
            <p class="pl-8 my-2">phikhi {{ '[--lang=<🇫🇷|🇺🇸>] <command> [<args>]' }}</p>
        </span>
        <span class="text-gray-400 flex-1 typing items-center mb-4">
            DESCRIPTION
            <p class="pl-8 my-2">
                CPO; Part time Product Owner / Developer / UI/UX Designer / SysAdmin.<br>
                Call whatever you want : Cameleon, Swiss knife 🇨🇭 or schizophrenic 🥸.<br>
                “We” are sure... I can help.
            </p>
        </span>
        <span class="text-gray-400 flex-1 typing items-center mb-4">
            OPTIONS
            <p class="my-2">
                <p class="pl-8 m-0 mb-2">
                    --twitter<br>
                    <span class="pl-8 my-2"><a href="https://twitter.com/phikhi" title="Twitter" target="_blank" rel="nofollow">https://twitter.com/phikhi</a></span>
                </p>
                <p class="pl-8 m-0">
                    --linked-in<br>
                    <span class="pl-8 my-2"><a href="https://www.linkedin.com/in/phikhi" title="LinkedIn" target="_blank" rel="nofollow">https://www.linkedin.com/in/phikhi</a></span>
                </p>
            </p>
        </span>
        <span class="text-gray-400 flex-1 typing items-center mb-4">
            <p class="my-2">:q</p>
        </span>
        <p class="m-0 mt-2">
            <span class="text-green-400">$</span>
            <span class="flex-1 typing items-center pl-2">mail -s "Say hi!" <span id="mlink"></span> <<< 'your imagination is the limit'</span>
        </p>
    </p>
@endsection
