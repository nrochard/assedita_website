@extends('layouts.default')

@section('content')

@include('partials.navbar')

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="text-3xl font-medium title-font text-gray-900 text-center">Bonjour</h1>
        <h1 class="text-title text-3xl font-medium title-font text-gray-900 mb-12 text-center">Camille Meunier</h1>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/2 w-full">
                <div class="h-full bg-gray-100 p-8 rounded">
                    <a class="inline-flex items-center pb-6">
                        <span class="flex-grow flex flex-col">
                            <span class="text-title title-font text-2xl text-gray-900">Mes informations personnelles</span>

                        </span>
                    </a>
                    <p class="leading-relaxed mb-6"><strong>Nom :</strong> Meunier</p>
                    <p class="leading-relaxed mb-6"><strong>Prénom :</strong> Camille</p>
                    <p class="leading-relaxed mb-6"><strong>Email :</strong> camille.meunier@gmail.com</p>
                    <div class="flex">

                        <button class="btn_green flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Modifier</button>

                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/2 w-full">
                <div class="h-full bg-gray-100 p-8 rounded">
                    <a class="inline-flex items-center pb-6">
                        <span class="flex-grow flex flex-col">
                            <span class="text-title title-font  text-2xl  text-gray-900">Mon abonnement</span>

                        </span>
                    </a>
                    <p class="leading-relaxed mb-6"><strong>État de l'abonnement :</strong> Actif</p>
                    <p class="leading-relaxed mb-6"><strong>Type d'abonnement :</strong> Le Gourmand</p>
                    <p class="leading-relaxed mb-6"><strong>Prix :</strong> : 20€ / mois</p>
                    <div class="flex">
                        <a href="{{ auth()->user()->billingPortalUrl(route('account')) }}" class="btn_green flex mr-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Modfier</a>
                        <button class="btn_green_fill flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Suspendre</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('partials.footer')

@endsection