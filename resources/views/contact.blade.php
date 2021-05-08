@extends('layouts.default')

@section('content')

@include('partials.navbar')


<img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="../../img/team.jpg" style="width: 100%;" \>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col padding-mobile">

    <div class="text-center lg:w-2/3 w-full">
      <h1 class="text-title name_welcome title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Contact & Accès</h1>
      <div class="line h-1 w-20 bg-indigo-500 rounded" style="margin: 10px auto;"></div>
      <p class="text mt-8 mb-8 leading-relaxed">Restaurant Assedita</p>
      <p class="text mb-8 leading-relaxed">9 Boulevard de Clichy 75009 PARIS</p>
      <p class="text mb-8 leading-relaxed">06 72 74 51 03</p>
      <p class="text mb-8 leading-relaxed">contact@assedita.com</p>
      <p class="text mb-8 leading-relaxed"><svg style="display:inline" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg> @assedita.restaurant</p>
    </div>
  </div>
</section>


<section class="text-gray-600 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.690710868159!2d2.3316879160321253!3d48.88317237928994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e4f14534763%3A0x9037c0cce2b81872!2s49%20Boulevard%20de%20Clichy%2C%2075009%20Paris!5e0!3m2!1sfr!2sfr!4v1620417219088!5m2!1sfr!2sfr" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>

  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contact</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Notre équipe sera heureuse de répondre à vos questions.</p>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="btn_green text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Envoyer</button>
      <!-- <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p> -->
    </div>
  </div>
</section>

@include('partials.footer')

@endsection