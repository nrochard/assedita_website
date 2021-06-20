<nav class="navbar nav flex flex-wrap items-center justify-between px-4">
  <div class="flex flex-no-shrink items-center mr-6 py-3 text-grey-darkest">
  <a href="{{ route('home')}}" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold"><img src="../../img/logo_white.png" width="100" height="100" class="d-inline-block align-top" alt=""></a>
  </div>

  <input class="menu-btn hidden" type="checkbox" id="menu-btn">
  <label class="menu-icon block cursor-pointer md:hidden px-2 py-4 relative select-none" for="menu-btn">
    <span class="navicon bg-grey-darkest flex items-center relative"></span>
  </label>

  <ul class="menu border-b md:border-none flex justify-end list-reset m-0 w-full md:w-auto">

  <li class=" md:border-none">
    
    </li>
    <li class="border-t md:border-none">
      <a href="/restaurant" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold">Le Restaurant</a>
    </li>
    
    <li class="border-t md:border-none">
      <a href="/carte" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">La Carte</a>
    </li>
    
    <li class="border-t md:border-none">
      <a href="/equipe" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">L'Équipe</a>
    </li>

    <li class="border-t md:border-none">
      <a href="/reservation" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Réservation</a>
    </li>

    <li class="border-t md:border-none">
      <a href="/contact" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Contact & Accès</a>
    </li>

    <li class="border-t md:border-none">
      <a href="/blog" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Idées & Conseils</a>
    </li>

    <li class="border-t md:border-none">
      <a href="/abonnement" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Abonnement</a>
    </li>
<!-- 
    <li class="border-t md:border-none">
      <a href="/login" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker"> <img alt="gallery" style="width:30px; margin-top:-5px" src="./../picto/account.svg"></a>
    </li> -->

    <li class="dropdown inline-block relative" style="margin-top: 3px; margin-left: 10px;">
      <button class="bg-white text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
        <span class="mr-1">Mon compte</span>
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
      </button>
      <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
        <li class=""><a class="bg-white hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap" href="/login">Se connecter</a></li>
        <li class=""><a class="bg-white hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap" href="/register">S'inscire</a></li>
      </ul>
    </li>
    
  </ul>
</nav>
