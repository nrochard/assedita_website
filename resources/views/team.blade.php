@extends('layouts.default')

@section('content')

@include('partials.navbar')

<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto pt-12">
        <section class="text-gray-600 body-font">
            <div class="container px-5 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <!-- <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2> -->
                    <h1 class="text-title name_welcome text-2xl font-medium title-font mb-4 text-gray-900">L'Équipe</h1>
                    <div class="line h-1 w-20 bg-indigo-500 rounded" style="margin: 10px auto;"></div>
                    <p class="text lg:w-2/3 mx-auto leading-relaxed text-base">Tous issu de Ferrandi Paris, nos cinq associés s’y sont rencontrés et on y fait leurs armes ensemble. Devenus amis par la suite, ils ont décidé de s’unir autour d’un projet commun qu’ils prennent aujourd’hui plaisir à concrétiser.</p>
                </div>
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex px-5  md:flex-row flex-col items-center">
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                            <img class="object-cover object-center rounded" alt="hero" src="./../img/louis.jpg">
                        </div>
                        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                            <h1 class="text_bold title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Louis
                                <br><span class="text_orange text-title text-gray-400">Chef et Gérant</span>
                            </h1>
                            <p class="text mb-8 leading-relaxed">Louis, originaire de la ville d’Angers, a cuisiné dans de nombreux types de cuisines. En travaillant six mois au Mermoz avec la cheffe Manon Fleury, il a pu développer une grande créativité qu’il retranscrit bien dans nos assiettes. Chez Christopher Coutanceau (***) il s’est armé de précision et de minutie dans ses tâches, de la sélection de ses produits au dressage. Enfin la pratique du Kickboxing au niveau national lui a conféré une véritable âme de compétiteur, une confiance en lui et un sérieux faisant de lui un leader source de motivation.
                                <br />Ah et en cas de baisse de moral de l’équipe, pas de problème, il est très doué dès qu’il s’agit d’envoyer ses meilleurs pas de danse en cuisine.
                            </p>

                        </div>
                    </div>
                </section>
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" id="mobile_reverse">
                        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                            <h1 class="text_bold title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Grégoire
                                <br ><span class="text_orange text-title text-gray-400">Second et Responsable hygiène</span>
                            </h1>
                            <p class="text mb-8 leading-relaxed">Né à Bormes-les-Mimosas dans le Var, Grégoire est un pur produit du sud de la France ! Energique et des plus réactifs, il brille également par sa capacité d’adaptation héritée de ses expériences passées. En effet, ayant travaillé à des postes à responsabilités dans plusieurs cuisines à effectifs réduits, comme par exemple la Maison Hache, il a souvent été confronté à l’imprévu et y réagit toujours avec maîtrise. Son attrait pour la cuisine méditerranéenne offre à nos assiettes un joli rayon de soleil.
                                <br />Si vous n’êtes pas encore convaincus, son humour sans limite quasi-maladif animera services en cuisine, mariages et Bar-mitsvah à merveille !
                            </p>
                        </div>
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                            <img class="object-cover object-center rounded" alt="hero" src="./../img/gregoire.jpg" id="mobile_reverse_team">
                        </div>
                    </div>
                </section>

                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex px-5  md:flex-row flex-col items-center">
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                            <img class="object-cover object-center rounded" alt="hero" src="./../img/pablo.jpg">
                        </div>
                        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                            <h1 class="text_bold title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Pablo
                                <br ><span class="text_orange text-title text-gray-400">Second et Responsable communication</span>
                            </h1>
                            <p class="text mb-8 leading-relaxed">Louis, originaire de la ville d’Angers, a cuisiné dans de nombreux types de cuisines. En travaillant six mois au Mermoz avec la cheffe Manon Fleury, il a pu développer une grande créativité qu’il retranscrit bien dans nos assiettes. Chez Christopher Coutanceau (***) il s’est armé de précision et de minutie dans ses tâches, de la sélection de ses produits au dressage. Enfin la pratique du Kickboxing au niveau national lui a conféré une véritable âme de compétiteur, une confiance en lui et un sérieux faisant de lui un leader source de motivation.
                                <br />Ah et en cas de baisse de moral de l’équipe, pas de problème, il est très doué dès qu’il s’agit d’envoyer ses meilleurs pas de danse en cuisine.
                            </p>

                        </div>
                    </div>
                </section>
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" id="mobile_reverse">>
                        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                            <h1 class="text_bold title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Edouard
                                <br ><span class="text_orange text-title text-gray-400">Responsable salle et gestion RH</span>
                            </h1>
                            <p class="text mb-8 leading-relaxed">Edouard sera responsable du bon déroulé de votre repas. Et pour cela, il n’y a pas de crainte à avoir ! En effet, formé au service haut de gamme dans des établissements cinq étoiles de renom tels que l’Hôtel Bank ou The Landmark London. Son dernier stage en tant qu’assistant de direction du groupe Barrière à Deauville lui a inculqué des notions capitales en pilotage d’entreprise. Habitué à avoir du personnel sous ses ordres, il saura former nos futurs apprentis avec pédagogie. Enfin, grâce à ses connaissances en bières, il a su nous constituer une carte de bières artisanales des plus originales.
                                <br />Si vous n’arrivez plus à entendre votre voisin c’est probablement car Edouard PARLE EXCESSIVEMENT FORT… Un conseil, tendez-lui une bière fraîche, ça marche à tous les coups !
                            </p>
                        </div>
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                            <img class="object-cover object-center rounded" alt="hero" src="./../img/edouard.jpg" id="mobile_reverse_team">
                        </div>
                    </div>
                </section>
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex px-5  md:flex-row flex-col items-center pb-12">
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                            <img class="object-cover object-center rounded" alt="hero" src="./../img/camille.jpg">
                        </div>
                        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                            <h1 class="text_bold title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Camille
                                <br ><span class="text_oranges text-title text-gray-400">Mixologue et responsable bar et stewarding</span>
                            </h1>
                            <p class="text mb-8 leading-relaxed">Camille est notre chimiste, notre savant fou, notre mixologue ! Elle saura vous transporter grâce à des cocktails explosifs. Au travers de ses différentes expériences derrière le bar en France à l’hôtel de Sers ou à Amsterdam au Toren Hotel, Camille a agrandi son éventail de connaissances sur les cocktails, les softs et les vins. Débordante d’énergie et pleine de bonne humeur, elle est un véritable moteur pour l’équipe. Toujours remplies d’idées déconcertantes pour ses cocktails, elle nous pousse toujours à nous dépasser.
                                <br />Néanmoins, ne vous laissez pas avoir par sa petite taille, c’est une véritable pile électrique, pire, une bombe à retardement qui devient incontrôlable une fois son shaker dans les mains !

                            </p>

                        </div>
                    </div>
                </section>
            </div>
        </section>

        <!-- <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed text-lg">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                    <p class="text-gray-500">Senior Product Designer</p>
                </div>
            </div>
        </section> -->
    </div>
</div>


@include('partials.footer')

@endsection