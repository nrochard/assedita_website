@extends('layouts.default')

@section('content')

@include('partials.navbar')


<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col padding-mobile">

    <div class="text-center lg:w-2/3 w-full">
      <h1 class="text-title name_welcome title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Idées & Conseils</h1>
      <div class="line h-1 w-20 bg-indigo-500 rounded" style="margin: 10px auto;"></div>

</section>


<section class="text-gray-600 body-font">
  <div class="container px-5 pb-24 mx-auto">

  @if (!$posts)
    <div class=" text-center py-4 lg:px-4">
      <div style="background-color:rgb(17, 17, 17)" class="p-2 bg-black items-center text-white leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span   class=" flex rounded-full bg-gray-500 uppercase px-2 py-1 text-xs font-bold mr-3">DÉSOLÉ</span>
        <span class="text_bold font-semibold mr-2 text-left flex-auto">Nous n'avons pas d'articles en ligne.</span>
      </div>
    </div>
    @endif

    <div class="flex flex-wrap -m-4">
      <div class="p-4 lg:w-1/3">
        @foreach ($posts as $post)
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">RECETTE</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $post->title }}</h1>
          <p class="text leading-relaxed mb-3"> {{ $post->short_description }} </p>
          <a class="text-link inline-flex items-center">Lire
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>{{ $post->created_at }}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('partials.footer')

@endsection