@extends('_layouts.master')

@section('body')
    @include('_partials.parallax')
    <div id=content class="border-t-8 border-blue-light">
    	@foreach($aboutme as $about)
        @component('_components/articlecard')
            @slot('title') About me @endslot
            @slot('body') {{ $about->getContent() }} @endslot
            @slot('last') {{ $about->last_change }} @endslot
        @endcomponent
        @endforeach
    </div>
@endsection

@section('title')
    About me
@endsection
