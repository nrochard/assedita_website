@extends('layouts.default')

@section('content')

@include('partials.navbar')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">

            @if ($errors->any())
            <div style="margin-top: 20px" class="" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </span>
            </div>
            @endif


            <h1 class="text_bold text-3xl font-medium title-font text-gray-900 text-center">Bonjour</h1>
            <h1 class="text-title text-3xl font-medium title-font text-gray-900 mb-12 text-center">{{ $user->name }}</h1>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full bg-gray-100 p-8 rounded" style="background-color: white; border-radius:10px">
                        <a class="inline-flex items-center pb-6">
                            <span class="flex-grow flex flex-col">
                                <span class="text-title title-font text-2xl text-gray-900">Mes informations personnelles</span>

                            </span>
                        </a>
                        <p class="text_bold leading-relaxed mb-6"><strong>Nom :</strong> {{ $user->name }}</p>
                        <p class="text_bold leading-relaxed mb-6"><strong>Email :</strong> {{ $user->email }}</p>
                        <div class="flex">

                            <button class="modal-open btn_green flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Modifier</button>

                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full bg-gray-100 p-8 rounded" style="background-color: white; border-radius:10px">
                        <a class="inline-flex items-center pb-6">
                            <span class="flex-grow flex flex-col">
                                <span class="text-title title-font  text-2xl  text-gray-900">Mon abonnement</span>

                            </span>
                        </a>
                        <p class="text_bold leading-relaxed mb-6"><strong>État de l'abonnement :</strong> Actif</p>
                        <p class="text_bold leading-relaxed mb-6"><strong>Type d'abonnement :</strong> Le Gourmand</p>
                        <p class="text_bold leading-relaxed mb-6"><strong>Prix :</strong> : 20€ / mois</p>
                        <div class="flex">

                            <button class="btn_green_fill flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Suspendre</button>
                        </div>
                    </div>
                </div>

                @if ($user->isAdmin == 1)
                <a href="{{route('admin')}}" class="btn_green flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Administrer le site</a>
                @endif
            </div>
        </div>

        <!--Modal-->
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div class="modal-container bg-white w-11/12  mx-auto rounded shadow-lg z-50 overflow-y-auto">

                <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                    <span class="text-sm">(Esc)</span>
                </div>

                <!-- Add margin if you want to see some of the overlay behind the modal-->
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                        </div>
                    </div>

                    <!--Body-->
                    <div class="container px-5 py-4 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                            <h1 class="text-title sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Modifier vos informations personnelles</h1>
                            <p class="text lg:w-2/3 mx-auto leading-relaxed text-base">Veuillez remplir les champs que vous souhaitez modifier.</p>
                        </div>

                        <form method="post" id="user-form">
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">

                                @csrf
                                <div class="relative mb-4">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Nom</label>
                                    <input type="text" id="name" name="name" value="{{ $user->name }}" class=" w-full bg-white rounded border border-grey-300 focus:border-grey-500 focus:ring-2 focus:ring-grey-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm text-gray-600">Adresse mail</label>
                                    <input type="email" id="email" name="email" value="{{ $user->email }}" class="w-full bg-white rounded border border-grey-300 focus:border-grey-500 focus:ring-2 focus:ring-grey-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                <div class="relative mb-4">
                                    <label for="password" class="leading-7 text-sm text-gray-600">Mot de passe</label>
                                    <input type="password" id="password" name="password" class="w-full bg-white rounded border border-grey-300 focus:border-grey-500 focus:ring-2 focus:ring-grey-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <p class="text-xs text-gray-500 mt-3">Si vous souhaitez modifier votre mot de passe, remplissez le champs. Sinon, laisser vide.</p>
                                </div>

                            </div>
                    </div>

                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <button class="modal-close btn_green_fill px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Fermer</button>
                        <button type="submit" class="btn_green px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Enregistrer</button>
                    </div>
                    </form>

                </div>

    </section>
</x-app-layout>

<script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event) {
            event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };


    function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }
</script>

@include('partials.footer')

@endsection