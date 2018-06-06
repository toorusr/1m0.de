@extends('_layouts.master')

@section('body')
    @include('_partials.parallax')
    <div class="flex items-center">
    <form class="w-full max-w-xs" method="POST" name="contact" action="/contact/success.html" netlify>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Full Name
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-purple rounded w-full py-2 px-4 text-grey-darker" type="text" placeholder="Max Mustermann" name="fullName">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                    Email
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-purple rounded w-full py-2 px-4 text-grey-darker" type="email" placeholder="example@1m0.de" name="email">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Data
                </label>
            </div>
            <div class="md:w-2/3">
                <textarea class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-purple rounded w-full py-2 px-4 text-grey-darker" placeholder="Message..." name="data"></textarea>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3"></div>
            <label class="md:w-2/3 block text-grey font-bold">
                <input class="mr-2" type="checkbox" name="bug">
                <span class="text-sm">
                    I've found a bug
                </span>
            </label>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
              <button class="shadow bg-purple hover:bg-purple-light text-white font-bold py-2 px-4 rounded" type="submit">
                Send
              </button>
            </div>
        </div>
</form>
@endsection

@section('title')
    Contact
@endsection
