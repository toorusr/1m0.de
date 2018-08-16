@extends('_layouts.master')

@section('body')
    @include('_partials.parallax')
    <div class="flex justify-center border-t border-black-light">
        <div>
            @component('_components/prevcard')
                @slot('img') https://1m0.de/data/img/pic/anonym-min.jpg @endslot
                @slot('header') About me @endslot
                @slot('text') Do you want to know more about the person behind the alias 1m0 and toorusr? On this page you can find some facts and stuff about me. @endslot
                @slot('button') Who are you? @endslot
                @slot('buttonclr') blue @endslot
                @slot('link') /aboutme#content @endslot
                @slot('buttonsec')1@endslot
            @endcomponent
            @component('_components/prevcard')
                @slot('img') https://1m0.de/data/img/pic/idea-min.jpg @endslot
                @slot('header') Projects @endslot
                @slot('text') Here you can find all of my projects I am currently working on and thoses I have worked on in the past. @endslot
                @slot('button') Show me more @endslot
                @slot('buttonclr') red @endslot
                @slot('link') /projects#content @endslot
            @endcomponent
            @component('_components/prevcard')
                @slot('img') https://1m0.de/data/img/pic/notes-min.jpg @endslot
                @slot('header') Blog @endslot
                @slot('text') On my blog I will post stuff I do, want to do and think I need to share with the rest of the world. @endslot
                @slot('button') I am curious @endslot
                @slot('buttonclr') green @endslot
                @slot('link') /blog#content @endslot
            @endcomponent
        </div>
    </div>
@endsection

@section('title')
    Home
@endsection
