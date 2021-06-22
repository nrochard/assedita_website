<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <a href="{{route('admin.post')}}" class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> Nouvel article
        </a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{route('admin')}}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Tableau de bord
        </a>
        <a href="{{route('admin.users')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Utilisateurs
        </a>
        <a href="{{route('admin.posts')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Articles
        </a>
        <a href="{{route('plans')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Abonnements
        </a>
        <a href="{{route('support')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-cogs mr-3"></i>
            Support
        </a>
        <a href="{{route('calendar')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendrier
        </a>

    </nav>
    <a href="{{route('home')}}" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
        <i class="fas fa-arrow-circle-up mr-3"></i>
        Retour au site
    </a>
</aside>