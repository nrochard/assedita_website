@extends('layouts.default')

@section('content')

@include('partials.navbar')


<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col padding-mobile">

    <div class="text-center lg:w-2/3 w-full">
      <h1 class="text-title name_welcome title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Assedita</h1>
      <div class="line h-1 w-20 bg-indigo-500 rounded" style="margin: 10px auto;"></div>

</section>

<section class="text-gray-600 body-font">
  <div class="container px-5 pb-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/2">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <div class="p-6">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Connexion</h1>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Mot de passe</label>
              <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="flex items-center flex-wrap ">
              <a href="/admin" class="btn_green w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                Se connecter
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/2">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/721x401" alt="blog"> -->
          <div class="p-6">
            <!-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2> -->
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Inscription</h1>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <p class="text leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            <div class="flex items-center flex-wrap">
              <a href="/admin" class="btn_green w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                S'inscrire
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="mt-5 pb-24 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
  <div class="mt-3 sm:mt-0 sm:ml-3">
    <a href="/admin" class="btn_green w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
      Admin
    </a>
  </div>

</div>
@include('partials.footer')

@endsection