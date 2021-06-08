@extends('layouts.default')

@section('content')

@include('partials.navbar')

<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-20 mx-auto flex flex-wrap">
                <div class="flex flex-wrap w-full mb-20">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="text-title  name_welcome sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Le Restaurant</h1>
                        <div class="line h-1 w-20 bg-indigo-500 rounded"></div>
                    </div>
                    <p class="text lg:w-1/2 w-full leading-relaxed text-gray-500">Nous sommes un restaurant bistronomique situé en plein cœur du 9e arrondissement de Paris. Nous vous accueillons dans un cadre naturel et convivial afin de vous faire découvrir une cuisine inspirée et créative, reflet du travail de nos producteurs et artisans !</p>
                </div>
                <div class="flex flex-wrap md:-m-2 -m-1">
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="./../img/1.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="/../img/2.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="/../img/3.jpg">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="./../img/34.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="/../img/5.jpg">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="/../img/6.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="text-center mb-20">
                        <h1 class="text-title name_welcome sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Nos valeurs</h1>
                        <!-- <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Simplicité, transparence et goût… A la manière d’un vin nature, notre cuisine est sans filtre ni artifice.</p> -->
                        <div class="flex mt-6 justify-center">
                            <div class="line w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                        </div>
                    </div>
                    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                        <div class="p-4 md:w-1/4 flex flex-col text-center items-center">
                            <div class="picto_bg w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                                <img alt="gallery" class="w-full object-cover h-full object-center block" src="./../picto/leaf.svg">
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-title text-gray-900 text-lg title-font font-medium mb-3">Naturalité </h2>
                                <p class="leading-relaxed text-base">Simplicité, transparence et goût… A la manière d’un vin nature, notre cuisine est sans filtre ni artifice.</p>
                                <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a> -->
                            </div>
                        </div>
                        <div class="p-4 md:w-1/4 flex flex-col text-center items-center">
                            <div class="picto_bg w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="./../picto/couteau.svg">
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-title text-gray-900 text-lg title-font font-medium mb-3">Artisanat</h2>
                                <p class="text leading-relaxed text-base">Nous prenons soin de travailler avec des artisans partageant notre passion. Comme en cuisine, la qualité de leurs créations provient en partie de leur amour pour leur métier.</p>
                                <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a> -->
                            </div>
                        </div>
                        <div class="p-4 md:w-1/4 flex flex-col text-center items-center">
                            <div class="picto_bg w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                                <img alt="gallery" class="w-full object-cover h-full object-center block" src="./../picto/vine.svg">
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-title text-gray-900 text-lg title-font font-medium mb-3">Convivialité </h2>
                                <p class="text leading-relaxed text-base">Lorsque l’on va au restaurant, on y vient pour un moment de détente et d’émerveillement, pas pour être accueilli froidement comme à l’entrée d’une banque ! </p>
                                <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a> -->
                            </div>
                        </div>
                        <div class="p-4 md:w-1/4 flex flex-col text-center items-center">
                            <div class="picto_bg w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="./../picto/worldwide.svg">
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-title text-gray-900 text-lg title-font font-medium mb-3">Découverte</h2>
                                <p class="text leading-relaxed text-base"> Qu’elle est belle cette sensation : goûter une saveur inconnue. Ce dont il s’agissait, on ne le sait pas encore… mais qu’est-ce que c’était bon !</p>
                                <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <button class="btn_green flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Réserver</button>
                </div>
            </section>
    </div>
</div>


@include('partials.footer')

@endsection