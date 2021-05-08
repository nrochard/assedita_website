@extends('layouts.default')

@section('content')

@include('partials.navbar')
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto pt-12 padding-mobile">


        <div class="mt-10 sm:mt-0">
            <div class="flex flex-col text-center w-full mb-20">
                <!-- <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2> -->
                <h1 class="name_welcome text-title text-2xl font-medium title-font mb-4 text-gray-900">Réservation</h1>
                <div class="line h-1 w-20 bg-indigo-500 rounded" style="margin: 10px auto;"></div>
                <p class="text lg:w-2/3 mx-auto leading-relaxed text-base px-3">Notre équipe vous accueille du mardi au samedi, le midi de 12h à 14h et le soir de 19h à 22h. N’hésitez pas à nous joindre pour toute précision supplémentaire.</p>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2 pb-24">
                <form action="#" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">Nom</label>
                                    <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Prénom</label>
                                    <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
                                    <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                 <label for="last_name" class="block text-sm font-medium text-gray-700">Date</label>
                                    <input type="text" name="date" placeholder=" " onclick="this.setAttribute('type', 'date');" class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                                    <span class="text-sm text-red-600 hidden" id="error">Date is required</span>
                                </div>



                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Heure</label>
                                    <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>12h</option>
                                        <option>12h30</option>
                                        <option>13h</option>
                                        <option>13h30</option>
                                        <option>14h</option>
                                        <option>19h00</option>
                                        <option>19h30</option>
                                        <option>20h</option>
                                        <option>20h30</option>
                                        <option>21h</option>
                                        <option>21h30</option>
                                        <option>22h</option>
                                    </select>
                                </div>


                            </div>
                        </div>

                        <!-- <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <fieldset>
                                <div>
                                    <legend class="text-base font-medium text-gray-900">Push Notifications</legend>
                                    <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                                </div>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center">
                                        <input id="push_everything" name="push_notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push_everything" class="ml-3 block text-sm font-medium text-gray-700">
                                            Everything
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="push_email" name="push_notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push_email" class="ml-3 block text-sm font-medium text-gray-700">
                                            Same as email
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="push_nothing" name="push_notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push_nothing" class="ml-3 block text-sm font-medium text-gray-700">
                                            No push notifications
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div> -->
                        <div class="px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="btn_green inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Réserver
                            </button>
                        </div>
                    </div>

            </div>
            </form>


        </div>
    </div>
</div>

</div>
</div>

@include('partials.footer')

@endsection