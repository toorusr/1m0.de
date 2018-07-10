@extends('_layouts.master')

@section('body')
    @include('_partials.parallax')
    <div id=content class="border-t-8 border-blue-light">
        <br>
        <h1 class="text-center p20">Attention</h1>
        <p class="text-center text-grey">I am currently editing this article, please try again later.</p>
        <br>
    	@foreach($aboutme as $about)
    	<p class="text-center text-grey">Last Change: {{ $about->last_change }}</p>
    	<section>{{ $about->getContent() }}</section>
    	@endforeach
        <br>
    </div>
@endsection

@section('title')
    About me
@endsection
