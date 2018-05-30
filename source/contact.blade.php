@extends('_layouts.master')

@section('body')
    @include('_partials.parallax')
    <form name="contact" netlify>
        <p>
            <label>Name <input type="text" name="name" /></label>
        </p>
        <p>
            <label>Email <input type="email" name="email" /></label>
        </p>
        <p>
            <button type="submit">Send</button>
        </p>
    </form>
@endsection

@section('title')
    Contact
@endsection
