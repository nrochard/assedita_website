@extends('layouts.default')

@section('content')

@include('partials.navbar')

<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">

<section class="text-gray-600 body-font">
  <div class="pt-24 flex flex-col text-center w-full mb-20">
    <h1 class="name_welcome text-title text-2xl font-medium title-font mb-4 text-gray-900">La Carte</h1>
    <div class="line h-1 w-20 bg-indigo-500 rounded" style="margin: 10px auto;"></div>
    <p class="text lg:w-2/3 mx-auto leading-relaxed text-base">Nous nous efforçons sans cesse de vous garantir une qualité supérieure dans le sourcing de nos produits. C’est pour cela que nous travaillons en étroite collaboration avec nos producteurs, maraîchers, viticulteurs et brasseurs. Après tout, qui mieux que des professionnels passionnés pour vous trouver des pépites.</p>
  </div>
  <div class="container px-5 mx-auto flex flex-wrap flex-col">
    <div class="flex mx-auto flex-wrap mb-20">
      <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium bg-gray-100 inline-flex items-center leading-none border-indigo-500 text-indigo-500 tracking-wider rounded-t">
        Carte du midi
      </a>
      <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 hover:text-gray-900 tracking-wider">
        Carte du soir
      </a>
      <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 hover:text-gray-900 tracking-wider">
        Accords mets / cocktails
      </a>
      <a class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 hover:text-gray-900 tracking-wider">
        Carte des boissons
      </a>
    </div>
    <div class="container mx-auto flex px-5  md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Entrées
        </h1>
        <p class="mb-8 leading-relaxed">Déclinaison de betterave, crème réduite au foin et chapelure torréfiée. 9e </p>
        <p class="mb-8 leading-relaxed">Tomates anciennes marinées, coques, amandes fraîches et huile d’olive au thym. 11e</p>
        <p class="mb-8 leading-relaxed">
          Carpaccio de mulet noir, mélasse de grenade, pickles de fraise, main de bouddha. 10e
        </p>
      </div>
    </div>
  </div>
</section>


@include('partials.footer')

@endsection