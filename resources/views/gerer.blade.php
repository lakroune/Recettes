<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Chef | FoodieShare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
        }

        .row-item {
            border-bottom: 1px solid #f9fafb;
            transition: all 0.3s ease;
        }

        .row-item:hover {
            background-color: #fafafa;
            border-bottom-color: #000;
        }

        .btn-action {
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            transition: all 0.3s;
        }

        .stat-label {
            font-size: 9px;
            font-weight: 800;
            color: #9ca3af;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .stat-count {
            font-weight: 700;
            font-size: 13px;
            color: #000;
        }
    </style>
</head>

<body class="text-[#1a1a1a]">

    <x-header />

    <main class="max-w-6xl mx-auto px-8 py-20">

        <header class="flex flex-col md:flex-row justify-between items-end gap-8 mb-24">
            <div class="space-y-1">
                <h1 class="text-6xl font-extrabold tracking-tighter leading-none">Votre <br>Répertoire.</h1>
                <p class="text-gray-400 text-xs italic mt-4">Gérez vos publications et les retours de la communauté.</p>
            </div>
            <a href="{{ route('recette.store') }}"
                class="bg-black text-white px-10 py-5 text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-orange-600 transition">
                + Ajouter une recette
            </a>
        </header>

        <div class="space-y-2">
            <div class="flex px-4 mb-6 text-[9px] font-bold uppercase tracking-[0.3em] text-gray-300">
                <div class="flex-1">Détails de l'œuvre</div>
                <div class="hidden md:flex w-64 justify-between px-4">
                    <span>Avis</span>
                    <span>Commentaires</span>
                    <span>Likes</span>
                </div>
                <div class="w-40 text-right">Actions</div>
            </div>
            @foreach ($recettes as $recette)
                <div class="row-item flex items-center p-6 gap-6">
                    <div class="flex flex-1 items-center gap-8">
                        <div class="relative w-16 h-20 overflow-hidden">
                           <a href="{{ route('recette.show', $recette->id) }}">
                             <img src="{{ asset('storage/' . $recette->images[0]->url_image) }}"
                                class="w-full h-full object-cover">
                           </a>
                        </div>
                        <div>
                            <h3 class="font-black text-xl tracking-tight">{{ $recette->title_recette }}</h3>
                            <p class="text-[9px] text-gray-400 uppercase tracking-widest mt-1 italic">Posté le
                                {{ $recette->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    <div class="hidden md:flex w-64 justify-between px-4">
                        <div class="text-center">
                            <p class="stat-count">{{ count($recette->favoris) }} </p>
                            <p class="stat-label">★</p>
                        </div>
                        <div class="text-center">
                            <p class="stat-count">{{ count($recette->commentaires) }}</p>
                            <p class="stat-label">Coms</p>
                        </div>
                        <div class="text-center">
                            <p class="stat-count text-orange-600">156</p>
                            <p class="stat-label">Likes</p>
                        </div>
                    </div>

                    <div class="w-40 flex justify-end gap-6">
                        <a href="#"
                            class="btn-action text-black border-b border-transparent hover:border-black">Modifier</a>
                        <button class="btn-action text-gray-300 hover:text-red-500"><i
                                class="fa-solid fa-trash-can"></i></button>
                    </div>
                </div>
            @endforeach




        </div>
    </main>
    <footer class="py-20 text-center">
        <p class="text-[9px] font-black uppercase tracking-[0.5em] text-gray-200">Foodie.Share Internal Studio</p>
    </footer>

</body>

</html>
