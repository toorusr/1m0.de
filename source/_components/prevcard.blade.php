<section class="m-2 leading-normal flex">
    <div class="max-w-lg shadow-lg rounded overflow-hidden m-4 sm:flex">
        <div class="h-48 sm:h-auto sm:w-48 md:w-64 flex-none bg-cover bg-center rounded rounded-t sm:rounded sm:rounded-l text-center overflow-hidden" style="background-image: url('{{$img}}')">
        </div>
        <div class="px-6 py-4">
            <h2 class="mb-2 font-black">{{$header}}</h2>
            <p class="mb-4 text-grey-dark text-sm">{{$text}}</p>
            <a href="{{$link or ''}}"><button class="px-6 py-3 bg-{{$buttonclr}} hover:bg-{{$buttonclr}}-light text-white font-bold rounded-full mt-1 mb-2" onclick="">{{$button}}</button></a>
        </div>
    </div>
</section>
