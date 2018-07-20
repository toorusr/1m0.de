<section class="flex justify-center">
<div class="max-w-xl rounded overflow-hidden shadow-lg my-8">
    <img class="w-full h-auto" src="http://labor.mxzl.de/data/img/me.png" alt="Me">
  <div class="px-8 py-8">
    <div class="font-bold text-xl mb-2">{{$title}}</div>
    <section class="flex text-grey-darker text-base">
      {!! html_entity_decode($body) !!}
    </section>
  </div>
  <div class="px-6 py-4">
    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">Last Change: {{$last}}</span>
  </div>
</div>
</section>
