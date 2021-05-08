@extends('layouts.default')

@section('content')

@include('partials.navbar')
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto pt-12 padding-mobile">
    <div class="mt-10 sm:mt-0">
      <div class="flex flex-col text-center w-full mb-20">
        <!-- <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2> -->
        <h1 class="name_welcome text-title text-2xl font-medium title-font mb-4 text-gray-900">La Carte</h1>
        <div class="line h-1 w-20 bg-indigo-500 rounded" style="margin: 10px auto;"></div>
        <p class="text lg:w-2/3 mx-auto leading-relaxed text-base px-3">Nous nous efforçons sans cesse de vous garantir une qualité supérieure dans le sourcing de nos produits. C’est pour cela que nous travaillons en étroite collaboration avec nos producteurs, maraîchers, viticulteurs et brasseurs. Après tout, qui mieux que des professionnels passionnés pour nous trouver des pépites.</p>
      </div>
    </div>
  </div>
</div>

<div id="menu_tabs" class="rounded mx-auto mt-4 mb-24" >
  <!-- Tabs -->
  <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b" style="    display: flex;
    justify-content: center;">
    <li class="text bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#first">Carte du Midi</a></li>
    <li class="text px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">Carte du Soir</a></li>
    <li class="text px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#third">Boissons</a></li>
    <!-- <li class="text px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#fourth">Accords Mets & Vins</a></li> -->
  </ul>

  <!-- Tab Contents -->
  <div id="tab-contents">
    <div id="first" class="p-4">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="../../img/menu-assedita4.png" style="width: 100%;" \>
    </div>
    <div id="second" class="hidden p-4">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="../../img/menu_assedita2.png" style="width: 100%;" \>
    </div>
    <div id="third" class="hidden p-4">
       <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="../../img/menu-assedita6.png" style="width: 100%;" \>
       <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="../../img/menu-assedita7.png" style="width: 100%;" \>
    </div>
    <!-- <div id="fourth" class="hidden p-4">
      Fourth tab
    </div> -->
  </div>
</div>

<script>
  let tabsContainer = document.querySelector("#tabs");

  let tabTogglers = tabsContainer.querySelectorAll("a");
  console.log(tabTogglers);

  tabTogglers.forEach(function(toggler) {
    toggler.addEventListener("click", function(e) {
      e.preventDefault();

      let tabName = this.getAttribute("href");

      let tabContents = document.querySelector("#tab-contents");

      for (let i = 0; i < tabContents.children.length; i++) {

        tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white");
        tabContents.children[i].classList.remove("hidden");
        if ("#" + tabContents.children[i].id === tabName) {
          continue;
        }
        tabContents.children[i].classList.add("hidden");

      }
      e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");
    });
  });

  document.getElementById("default-tab").click();
</script>

@include('partials.footer')

@endsection