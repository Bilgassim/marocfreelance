<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Freelance App')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-lg font-semibold text-gray-900">Freelance App</a>
            <nav class="space-x-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900">Accueil</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-gray-900">À propos</a>
                <a href="{{ route('services') }}" class="text-gray-700 hover:text-gray-900">Services</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-gray-900">Contact</a>
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">Connexion</a>
                <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900">Inscription</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-6 py-8">
        <section class="text-center my-12">
            <h1 class="text-4xl font-bold text-gray-900">Trouvez le freelance parfait pour votre projet</h1>
            <p class="mt-4 text-gray-600">Recherchez parmi des milliers de freelancers qualifiés pour trouver celui qui correspond à vos besoins.</p>
            <a href="{{ route('register') }}" class="mt-6 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Commencez maintenant</a>
        </section>

        <section class="my-12">
            <h2 class="text-2xl font-bold text-gray-900">Fonctionnalités Principales</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-xl font-semibold text-gray-900">Recherche de freelancers</h3>
                    <p class="mt-2 text-gray-600">Trouvez des freelancers qualifiés pour tous vos projets.</p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-xl font-semibold text-gray-900">Publication de projets</h3>
                    <p class="mt-2 text-gray-600">Publiez vos projets et recevez des propositions de freelancers.</p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-xl font-semibold text-gray-900">Paiements sécurisés</h3>
                    <p class="mt-2 text-gray-600">Effectuez des paiements sécurisés directement sur la plateforme.</p>
                </div>
            </div>
        </section>

        <section class="my-12">
            <h2 class="text-2xl font-bold text-gray-900">Témoignages</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <div class="bg-white p-6 rounded shadow">
                    <p class="text-gray-600">"Cette plateforme m'a permis de trouver des clients rapidement et facilement. Je la recommande vivement!"</p>
                    <p class="mt-4 text-gray-900 font-semibold">- Freelancer satisfait</p>
                </div>
                <div class="bg-white p-6 rounded shadow">
                    <p class="text-gray-600">"J'ai trouvé le freelance parfait pour mon projet en quelques minutes. Très satisfait du service."</p>
                    <p class="mt-4 text-gray-900 font-semibold">- Utilisateur satisfait</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto px-6 py-4">
            <p class="text-gray-700">© 2024 Freelance App. Tous droits réservés.</p>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-gray-700 hover:text-gray-900">Politique de confidentialité</a></li>
                <li><a href="#" class="text-gray-700 hover:text-gray-900">Conditions d'utilisation</a></li>
                <li><a href="#" class="text-gray-700 hover:text-gray-900">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
