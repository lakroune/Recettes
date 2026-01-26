<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier | FoodieShare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #fafafa; }
        .input-flat { background: transparent; border-bottom: 2px solid #e5e7eb; transition: border-color 0.3s ease; }
        .input-flat:focus { outline: none; border-color: #ea580c; }
        .btn-black { background: #000; color: #fff; padding: 1rem 2rem; text-transform: uppercase; font-size: 10px; font-weight: 800; letter-spacing: 0.2em; transition: all 0.3s; }
        .btn-black:hover { background: #ea580c; }
        .img-edit-container { position: relative; overflow: hidden; }
        .img-edit-container:hover .overlay-edit { opacity: 1; }
        .overlay-edit { opacity: 0; background: rgba(0,0,0,0.5); transition: opacity 0.3s; display: flex; align-items: center; justify-content: center; position: absolute; inset: 0; }
    </style>
</head>
<body class="text-[#1a1a1a]">

    <nav class="h-16 flex items-center px-8 border-b border-gray-100 bg-white/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto w-full flex justify-between items-center">
            <a href="#" class="text-sm font-black tracking-tighter uppercase">Foodie<span class="text-orange-600">.</span>Share</a>
            <a href="mes-favoris.html" class="text-[9px] font-bold uppercase tracking-widest text-gray-400 hover:text-black">Annuler</a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-20">
        <header class="mb-16">
            <span class="text-[10px] font-bold tracking-[0.4em] text-orange-600 uppercase italic">Édition de Recette</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mt-4 leading-none">Ajustez votre <br>Création.</h1>
        </header>

        <form class="grid grid-cols-1 lg:grid-cols-12 gap-20">
            
            <div class="lg:col-span-7 space-y-16">
                
                <section class="space-y-8">
                    <input type="text" value="Tagine de Coquelets aux Olives" class="input-flat w-full py-4 text-4xl font-black tracking-tighter">
                    
                    <div class="grid grid-cols-3 gap-10">
                        <div class="flex flex-col">
                            <label class="text-[9px] font-bold uppercase text-gray-400 mb-2">Temps (min)</label>
                            <input type="number" value="45" class="input-flat py-2 font-bold italic text-orange-600">
                        </div>
                        <div class="flex flex-col">
                            <label class="text-[9px] font-bold uppercase text-gray-400 mb-2">Difficulté</label>
                            <select class="input-flat py-2 font-bold italic bg-transparent">
                                <option>Facile</option>
                                <option selected>Moyen</option>
                                <option>Expert</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-[9px] font-bold uppercase text-gray-400 mb-2">Calories</label>
                            <input type="number" value="520" class="input-flat py-2 font-bold italic">
                        </div>
                    </div>
                </section>

                <section>
                    <h2 class="text-xl font-black uppercase tracking-tighter mb-8 border-b-2 border-black pb-2">Ingrédients</h2>
                    <div id="ingredientsList" class="space-y-6 mb-6">
                        <div class="flex items-end gap-4">
                            <div class="flex-1"><input type="text" value="Coquelets fermiers" class="input-flat w-full py-2 text-sm"></div>
                            <div class="w-20"><input type="number" value="2" class="input-flat w-full py-2 text-sm font-bold"></div>
                            <div class="w-24">
                                <select class="input-flat w-full py-2 text-[10px] font-bold uppercase bg-transparent">
                                    <option value="pcs" selected>Pcs</option>
                                    <option value="g">g</option><option value="kg">kg</option>
                                </select>
                            </div>
                            <button type="button" onclick="this.parentElement.remove()" class="pb-2 text-gray-300 hover:text-red-500"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="flex items-end gap-4">
                            <div class="flex-1"><input type="text" value="Olives violettes" class="input-flat w-full py-2 text-sm"></div>
                            <div class="w-20"><input type="number" value="150" class="input-flat w-full py-2 text-sm font-bold"></div>
                            <div class="w-24">
                                <select class="input-flat w-full py-2 text-[10px] font-bold uppercase bg-transparent">
                                    <option value="g" selected>g</option><option value="pcs">Pcs</option>
                                </select>
                            </div>
                            <button type="button" onclick="this.parentElement.remove()" class="pb-2 text-gray-300 hover:text-red-500"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                    <button type="button" onclick="addIngredient()" class="text-[10px] font-bold uppercase tracking-[0.2em] text-orange-600">+ Ajouter un ingrédient</button>
                </section>

                <div class="pt-10 flex flex-col md:flex-row gap-4">
                    <button type="submit" class="btn-black flex-1">Sauvegarder les modifications</button>
                    <button type="button" class="border border-red-100 text-red-500 px-8 py-4 text-[10px] font-bold uppercase tracking-widest hover:bg-red-50 transition">Supprimer la recette</button>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="sticky top-28 space-y-12">
                    
                    <div>
                        <label class="text-[10px] font-bold uppercase tracking-widest text-black mb-4 block">Image de Couverture</label>
                        <div class="img-edit-container aspect-[3/4] bg-gray-50 border border-gray-100">
                            <img id="mainPreview" src="https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover">
                            <div class="overlay-edit">
                                <label class="cursor-pointer text-white text-[10px] font-bold uppercase tracking-[0.2em] border border-white px-4 py-2 hover:bg-white hover:text-black transition">
                                    Remplacer
                                    <input type="file" class="hidden" onchange="previewImg(this, 'mainPreview')">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="text-[10px] font-bold uppercase tracking-widest text-black mb-4 block">Galerie (Optionnelle)</label>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="img-edit-container aspect-square bg-gray-100">
                                <img id="sec1" src="https://images.unsplash.com/photo-1514326640560-7d063ef2aed5?q=80&w=400" class="w-full h-full object-cover">
                                <div class="overlay-edit">
                                    <input type="file" class="absolute inset-0 opacity-0 cursor-pointer" onchange="previewImg(this, 'sec1')">
                                    <i class="fa-solid fa-pen text-white text-xs"></i>
                                </div>
                            </div>
                            <div class="aspect-square border-2 border-dashed border-gray-200 flex items-center justify-center hover:border-orange-600 transition group cursor-pointer">
                                <i class="fa-solid fa-plus text-gray-200 group-hover:text-orange-600"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </main>

    <script>
        function addIngredient() {
            const container = document.getElementById('ingredientsList');
            const div = document.createElement('div');
            div.className = "flex items-end gap-4";
            div.innerHTML = `
                <div class="flex-1"><input type="text" placeholder="Ingrédient" class="input-flat w-full py-2 text-sm"></div>
                <div class="w-20"><input type="number" placeholder="0" class="input-flat w-full py-2 text-sm font-bold"></div>
                <div class="w-24">
                    <select class="input-flat w-full py-2 text-[10px] font-bold uppercase bg-transparent">
                        <option value="g">g</option><option value="kg">kg</option><option value="ml">ml</option><option value="l">l</option><option value="pcs">Pcs</option>
                    </select>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="pb-2 text-gray-300 hover:text-red-500 transition"><i class="fa-solid fa-xmark"></i></button>
            `;
            container.appendChild(div);
        }

        function previewImg(input, targetId) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = e => document.getElementById(targetId).src = e.target.result;
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>