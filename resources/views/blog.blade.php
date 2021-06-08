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
    <div class="flex flex-wrap -m-4">
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">RECETTE</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Le Bœuf Bourguignon</h1>
          <p class="text leading-relaxed mb-3">Chaque cuisinier a sa propre recette de bœuf bourguignon. Avec cette recette, nous voulons revenir aux origines du bœuf bourguignon qui, comme son nom l’indique, vient tout droit de la Bourgogne. Un subtil mariage entre le vin rouge, ses tanins et ses notes fruitées et la viande, sa texture fondante et ses arômes. Quelques aromates et légumes viennent appuyer l’union de ces saveurs. </p>
          <a class="text-link inline-flex items-center">Lire
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>300
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6
            </span>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">RECETTE</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Le Bœuf Bourguignon</h1>
          <p class="text leading-relaxed mb-3">Chaque cuisinier a sa propre recette de bœuf bourguignon. Avec cette recette, nous voulons revenir aux origines du bœuf bourguignon qui, comme son nom l’indique, vient tout droit de la Bourgogne. Un subtil mariage entre le vin rouge, ses tanins et ses notes fruitées et la viande, sa texture fondante et ses arômes. Quelques aromates et légumes viennent appuyer l’union de ces saveurs. </p>
          <a class="text-link inline-flex items-center">Lire
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>300
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6
            </span>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">RECETTE</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Le Bœuf Bourguignon</h1>
          <p class="text leading-relaxed mb-3">Chaque cuisinier a sa propre recette de bœuf bourguignon. Avec cette recette, nous voulons revenir aux origines du bœuf bourguignon qui, comme son nom l’indique, vient tout droit de la Bourgogne. Un subtil mariage entre le vin rouge, ses tanins et ses notes fruitées et la viande, sa texture fondante et ses arômes. Quelques aromates et légumes viennent appuyer l’union de ces saveurs. </p>
          <a class="text-link inline-flex items-center">Lire
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>300
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('partials.footer')

@endsection