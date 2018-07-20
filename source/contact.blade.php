@extends('_layouts.master')

@section('body')
    @include('_partials.parallax')
    <div class="flex justify-center border-t-8 border-purple-light">
        @include('_partials.contactform')
    </div>
@endsection

@section('title')
    Contact
@endsection
