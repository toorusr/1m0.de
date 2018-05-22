@extends('_layouts.master')

@section('body')
    <section class="parallax sm:h-40 min-h-screen"></section>
    <div class="flex justify-center border-t border-black-light">
        <div>
            @component('_components/prevcard')
                @slot('img') https://unsplash.it/804/800 @endslot
                @slot('header') About me @endslot
                @slot('text') Do you want to know more about the person behind the alias 1m0 and toorusr? On this page you can find some facts and stuff about me. @endslot
                @slot('button') Who are you? @endslot
                @slot('buttonclr') blue @endslot
            @endcomponent
            @component('_components/prevcard')
                @slot('img') https://unsplash.it/804/800 @endslot
                @slot('header') Projects @endslot
                @slot('text') Here you can find all of my projects I am currently working on and thoses I have worked on in the past. @endslot
                @slot('button') Show me more @endslot
                @slot('buttonclr') red @endslot
            @endcomponent
            @component('_components/prevcard')
                @slot('img') https://unsplash.it/804/800 @endslot
                @slot('header') Blog @endslot
                @slot('text') Just an senseless text. @endslot
                @slot('button') Lol @endslot
                @slot('buttonclr') green @endslot
            @endcomponent
        </div>
    </div>
@endsection

@section('title')
    Home
@endsection
