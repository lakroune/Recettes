<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieShare | Recettes Populaires</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .recipe-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .recipe-card:hover {
            transform: translateY(-5px);
        }

        .animate-in {
            animation: fadeIn 0.8s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-[#fafafa] text-[#1a1a1a]">

    <x-header />

    <main class="max-w-7xl mx-auto px-6">
        @isset($recette_jour)
            <section class="py-12 animate-in">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                    <div class="md:col-span-5 space-y-4">
                        <span
                            class="text-[10px] font-bold tracking-[0.2em] text-orange-600 uppercase italic underline decoration-2 underline-offset-4">Recette
                            de jour .</span>
                        <p class="text-gray-500 text-xs leading-relaxed max-w-xs"> Aujourd'hui, nous vous proposons une
                            recette speciale. nous souhaitons vous offrir une experience culinaire uniques.</p>
                        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tighter leading-none">
                            {{ $recette_jour->title_recette }}
                            <br>Premium Edition.
                        </h1>

                        <div class="flex gap-4 pt-2">


                            <button onclick="window.location.href='/recettes/{{ $recette_jour->id }}'"
                                class="bg-black text-white text-[10px] font-bold uppercase tracking-wider px-6 py-3  btn-animate hover:bg-orange-600 ">Découvrir</button>
                        </div>
                    </div>
                    <div class="md:col-span-7">
                        <div class="relative group">
                            <div
                                class="absolute -inset-2 bg-orange-100 rounded-[2rem] -z-10 group-hover:bg-orange-200 transition duration-500">
                            </div>
                            <img src="{{ asset('storage/' . $recette_jour->images[0]->url_image) }}"
                                class="w-full h-[450px] object-cover rounded-[1.5rem] shadow-2xl transition duration-500 group-hover:scale-[1.01]"
                                alt="Hero">
                        </div>
                    </div>
                </div>
            </section>
        @endisset

        <section
            class="mt-12 py-8 border-y border-gray-100 flex flex-wrap justify-around items-center gap-8 animate-in">
            <div class="text-center">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-gray-400 mb-1">Total Recettes</p>
                <h4 class="text-4xl font-black text-black">{{ count($recettes) }} </h4>
            </div>
            <div class="w-px h-10 bg-gray-100 hidden md:block"></div>
            <div class="text-center">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-gray-400 mb-1">Chefs Actifs</p>
                <h4 class="text-4xl font-black text-black">450</h4>
            </div>
            <div class="w-px h-10 bg-gray-100 hidden md:block"></div>
            <div class="text-center">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-gray-400 mb-1">Communauté</p>
                <h4 class="text-4xl font-black text-black">{{ count($visiteurs) }}</h4>
            </div>
        </section>

        <div class="mt-20 mb-10 flex justify-between items-end animate-in">
            <div>
                <span class="text-orange-600 font-bold text-[10px] uppercase tracking-widest">Les plus aimées</span>
                <h2 class="text-3xl font-black tracking-tighter">Recettes Populaires.</h2>
            </div>
            <a href="/recettes"
                class="text-[10px] font-black uppercase tracking-widest border-b-2 border-black pb-1 hover:text-orange-600 hover:border-orange-600 transition">Voir
                tout</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-14 pb-20 animate-in">

            @foreach ($recettes_populaires as $recette)
                <div class="recipe-card group">
                    <div class="relative overflow-hidden rounded-xl bg-gray-200 aspect-video mb-4">
                        <img src="{{ asset('storage/' . $recette->images[0]->url_image) }}"
                            class="w-full h-full object-cover grayscale-[20%] group-hover:grayscale-0 group-hover:scale-105 transition duration-700">
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur px-3 py-1 rounded-full shadow-sm">
                            <span class="text-[9px] font-bold uppercase tracking-tight text-orange-600"><i
                                    class="fa-solid fa-fire mr-1"></i>Tendance</span>
                        </div>
                    </div>
                    <div class="space-y-2 px-1">
                        <div
                            class="flex justify-between items-center text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                            <span>Pâtes • {{ $recette->temp_preparation }} MIN</span>
                            <span class="text-black"><i class="fa-solid fa-star text-orange-500 mr-1"></i>4.9</span>
                        </div>
                        <h3
                            class="text-xl font-extrabold tracking-tight hover:text-orange-600 transition cursor-pointer">
                            <a href=" {{ route('recettes.show', $recette->id) }}">
                                {{ $recette->title_recette }}</a>
                        </h3>
                        <div class="flex justify-between items-center pt-3 border-t border-gray-50">
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-6 h-6 rounded-full bg-black flex items-center justify-center text-[10px] text-white font-bold">
                                    A</div>
                                <span
                                    class="text-[10px] font-bold uppercase text-gray-500">{{ $recette->user->nom . ' ' . $recette->user->prenom }}</span>
                            </div>
                            <div class="flex gap-3 text-gray-300">
                                <span class="text-[10px] font-bold text-gray-400"><i
                                        class="fa-regular fa-heart mr-1"></i>
                                    {{ count($recette->favoris) }}
                                </span>
                                <span class="text-[10px] font-bold text-gray-400"><i
                                        class="fa-regular fa-comment mr-1"></i>
                                    {{ count($recette->commentaires) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach







        </div>
    </main>

</body>

</html>
