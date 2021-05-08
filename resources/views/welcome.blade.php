@extends('layouts.default')

@section('content')

@include('partials.navbar')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="block_welcome relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>

            <main class="mt-10 mx-auto max-w-0xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <p class="name_welcome">ASSEDITA</p>
                    <p class="text_intro mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Nous sommes un restaurant bistronomique situé en plein cœur du 9e arrondissement de Paris. Nous vous accueillons dans un cadre naturel et convivial afin de vous faire découvrir une cuisine inspirée et créative, reflet du travail de nos producteurs et artisans !
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="/carte" class="btn_green w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                Voir la carte
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="/reservation" class="btn_black w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                Réserver
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="../../img/header.JPG" alt="">
    </div>
</div>


<section class="text-gray-600 body-font">
    <div class="container px-5 pt-24 py-6 mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="p-4 lg:w-1/2">
                <img alt="content" class="object-cover object-center h-full w-full" src="../../img/midi.JPG">
            </div>
            <div class="p-4 lg:w-1/2">
                <div id="bg-welcome_block1"  class="h-full bg-welcome_block px-8 pt-16 pb-16 rounded-lg overflow-hidden text-center relative">
                    <h2 class="text_white text-title title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Le midi</h2>
                    <p style="height:230px" class="text text_white leading-relaxed text-base">Le midi nous vous proposons une carte constituée de trois entrées, trois plats et trois desserts : une sélection courte, composée de produits frais, sourcés en circuit court et changeant régulièrement. Pour accompagner votre repas il vous sera proposé différents vins natures et bières artisanales provenant de vignerons et brasseurs soucieux d’offrir un produit naturel, reflet d’une tradition d’artisanat. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container px-5 py-2 pb-24 mx-auto">
        <div class="flex flex-wrap -m-4" id="mobile_reverse">
            <div class="p-4 lg:w-1/2">
                <div id="bg-welcome_block2" class="h-full bg-welcome_block px-8 pt-16 pb-16 rounded-lg overflow-hidden text-center relative">
                    <h2 class="text_white  text-title   title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Le soir</h2>
                    <p class="text_white text black leading-relaxed text-base" style="height:230px">Le soir, on abandonne le traditionnel entrée-plat-dessert pour faire place à un concept bien plus convivial et chaleureux. Venez entre amis vous asseoir autour d’une de nos tables et profiter de nos « Assedita », de délicats mets à partager, tant originaux que réconfortants. Plus de dilemme entre tel ou tel plat, commandez plusieurs assiettes à partager et laissez-vous entraîner dans un moment de découverte ! Votre soirée sera également rythmée par les accords mets-cocktails surprenants de notre mixologue Camille : des mini-cocktails détonants reprenant un élément du plat en question. </p>
                </div>
            </div>
            <div class="p-4 lg:w-1/2">
                <img alt="content" class="object-cover object-center h-full w-full" src="../../img/soir.JPG">
            </div>
        </div>
    </div>
</section>

<!-- <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -mx-4 -mb-10 text-center">
            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg h-80 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="../../img/midi.JPG">
                </div>
                <h2 class="text_orange text-title title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Le midi</h2>
                <p style="height:230px" class="text leading-relaxed text-base">Le midi nous vous proposons une carte constituée de trois entrées, trois plats et trois desserts : une sélection courte, composée de produits frais, sourcés en circuit court et changeant régulièrement. Pour accompagner votre repas il vous sera proposé différents vins natures et bières artisanales provenant de vignerons et brasseurs soucieux d’offrir un produit naturel, reflet d’une tradition d’artisanat. </p>
            </div>
            <div class="text-title sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg h-80 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="../../img/soir.JPG">
                </div>
                <h2 class="text_orange  title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Le soir</h2>
                <p class="text leading-relaxed text-base" style="height:230px">Le soir, on abandonne le traditionnel entrée-plat-dessert pour faire place à un concept bien plus convivial et chaleureux. Venez entre amis vous asseoir autour d’une de nos tables et profiter de nos « Assedita », de délicats mets à partager, tant originaux que réconfortants. Plus de dilemme entre tel ou tel plat, commandez plusieurs assiettes à partager et laissez-vous entraîner dans un moment de découverte ! Votre soirée sera également rythmée par les accords mets-cocktails surprenants de notre mixologue Camille : des mini-cocktails détonants reprenant un élément du plat en question. </p>
            </div>
        </div>
    </div>
</section> -->

<section class="text-gray-600 body-font">
    <div class=" mx-auto flex px-5 py-24 md:flex-row flex-col items-center" style="background-color: #132c1a;">
    <div class="container container_pequenos mx-auto flex ">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="./../img/pequenos.jpg">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="text-title text_white title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">" Des goûts francs et marqués ni plus, ni moins,
                <br class="hidden lg:inline-block">afin de donner à nos produits leurs lettres de noblesse. "
            </h1>
            <p class="text text_white mb-8 leading-relaxed">Les biquinhos aussi appelé les "Chupetinho" de notre maraîcher Pierre GAYET.</p>
            <div class="flex justify-center">
                <button class="btn_white  w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md  bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">Réserver</button>
                <!-- <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button> -->
            </div>
        </div>
        </div>
    </div>
</section>


@include('partials.footer')

@endsection