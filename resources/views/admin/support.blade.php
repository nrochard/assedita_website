
    @extends('admin.layouts.default')       

@section('content')

@include('admin/partials/menu-desktop')

<div class="w-full flex flex-col h-screen overflow-y-hidden">
    
@include('admin/partials/menu-mobile')
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Support</h1>

                <div class="w-full mt-6" x-data="{ openTab: 1 }">
                    <div>
                        <ul class="flex border-b">
                            <li class="-mb-px mr-1" @click="openTab = 1">
                                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-black font-semibold' : 'text-black hover:text-gray-500'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Par mail</a>
                            </li>
                            <li class="mr-1" @click="openTab = 2">
                                <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-black font-semibold' : 'text-black hover:text-gray-500'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Par téléphone</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-6">
                        <div id="" class="" x-show="openTab === 1">
                            developpeur@assedita.com
                        </div>
                        <div id="" class="" x-show="openTab === 2">
                            Pour toute urgence : 06 39 92 09 49 
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