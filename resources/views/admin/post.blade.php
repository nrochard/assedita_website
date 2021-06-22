@extends('admin.layouts.default')

@section('content')

@include('admin/partials/menu-desktop')

<div class="w-full flex flex-col h-screen overflow-y-hidden">

    @include('admin/partials/menu-mobile')

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Formulation d'ajout / d'édition des articles</h1>

            @include('partials/message')

            <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow p-6">

                    <div class="flex flex-wrap">
                        <div class="w-full  my-6 pr-0 lg:pr-2">
                            <p class="text-xl pb-6 flex items-center">
                                <i class="fas fa-list mr-3"></i> Formulaire
                            </p>
                            <div class="leading-loose">
                                <form class="p-10 bg-white rounded shadow-xl" method="post" id="post-form">
                                @csrf
                                    <div class="">
                                        <label class="block text-sm text-gray-600" for="title">Titre</label>
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="">
                                    </div>
                                    <div class="mt-2">
                                        <label class="block text-sm text-gray-600" for="short_description">Description</label>
                                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="short_description" name="short_description" type="text" required="">
                                    </div>
                                    <div class="mt-2">
                                        <label class=" block text-sm text-gray-600" for="content">Contenu</label>
                                        <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="content" name="content" rows="6" required=""></textarea>
                                    </div>

                                    <div class="mt-4">
                                        <span class="text-gray-700">Visible ?</span>
                                        <div class="mt-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="isActive" value="1">
                                                <span class="ml-2">Oui</span>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="isActive" value="0">
                                                <span class="ml-2">Non</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>

            </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    @endsection