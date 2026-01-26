    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Favoris | FoodieShare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #fafafa; }
        .glass { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); }
        .recipe-card { transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); }
        .recipe-card:hover { transform: translateY(-8px); }
        .remove-btn { opacity: 0; transition: all 0.3s; }
        .recipe-card:hover .remove-btn { opacity: 1; }
        .badge-premium { background: #000; color: #fff; font-size: 8px; letter-spacing: 0.2em; padding: 4px 10px; }
    </style>
</head>
<body class="text-[#1a1a1a]">

    <nav class="sticky top-0 z-50 glass border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="text-sm font-black tracking-tighter uppercase">Foodie<span class="text-orange-600">.</span>Share</a>
            <div class="flex items-center gap-6">
                <span class="text-[10px] font-bold uppercase tracking-widest text-orange-600 italic">Ma Collection</span>
                <div class="h-9 w-9 rounded-full bg-black text-white flex items-center justify-center text-xs"><i class="fa-solid fa-user"></i></div>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-16">
        <header class="mb-20">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter leading-none mb-4">Mes Recettes<br>Sauvegardées.</h1>
            <div class="flex items-center gap-4">
                <p class="text-gray-400 text-sm italic">Vous avez <span id="fav-count" class="text-black font-bold border-b border-orange-600">3</span> pépites culinaires dans votre collection.</p>
            </div>
        </header>

        <div id="favorites-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            
            <div class="recipe-card group relative">
                <div class="relative aspect-[3/4] overflow-hidden mb-6">
                    <img src="https://images.unsplash.com/photo-1473093226795-af9932fe5856?auto=format&fit=crop&q=80&w=800" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <button onclick="removeFavorite(this)" class="remove-btn absolute top-4 right-4 h-10 w-10 bg-white rounded-full flex items-center justify-center shadow-lg hover:bg-red-50 text-red-500">
                        <i class="fa-solid fa-heart-crack"></i>
                    </button>
                    <div class="absolute bottom-4 left-4">
                        <span class="badge-premium font-bold uppercase">Premium</span>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest text-orange-600">
                        <span>Pasta • Sicile</span>
                        <span>15 MIN</span>
                    </div>
                    <h3 class="text-2xl font-black tracking-tighter leading-tight">Pasta Al Limone Signature</h3>
                    <p class="text-gray-400 text-xs leading-relaxed line-clamp-2 italic">L'équilibre parfait entre le citron bio et le pecorino romano pour une émotion pure.</p>
                </div>
                <a href="#" class="absolute inset-0 z-0"></a>
            </div>

            <div class="recipe-card group relative">
                <div class="relative aspect-[3/4] overflow-hidden mb-6">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&q=80&w=800" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <button onclick="removeFavorite(this)" class="remove-btn absolute top-4 right-4 h-10 w-10 bg-white rounded-full flex items-center justify-center shadow-lg hover:bg-red-50 text-red-500">
                        <i class="fa-solid fa-heart-crack"></i>
                    </button>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest text-orange-600">
                        <span>Salade • Fresh</span>
                        <span>10 MIN</span>
                    </div>
                    <h3 class="text-2xl font-black tracking-tighter leading-tight">Buddha Bowl d'Été</h3>
                    <p class="text-gray-400 text-xs leading-relaxed line-clamp-2 italic">Une explosion de couleurs et de nutriments pour vos déjeuners légers.</p>
                </div>
            </div>

            <div class="recipe-card group relative">
                <div class="relative aspect-[3/4] overflow-hidden mb-6">
                    <img src="https://images.unsplash.com/photo-1551024601-bec78aea704b?auto=format&fit=crop&q=80&w=800" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <button onclick="removeFavorite(this)" class="remove-btn absolute top-4 right-4 h-10 w-10 bg-white rounded-full flex items-center justify-center shadow-lg hover:bg-red-50 text-red-500">
                        <i class="fa-solid fa-heart-crack"></i>
                    </button>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-center text-[10px] font-black uppercase tracking-widest text-orange-600">
                        <span>Dessert • Gourmand</span>
                        <span>45 MIN</span>
                    </div>
                    <h3 class="text-2xl font-black tracking-tighter leading-tight">Donuts Glacés Maison</h3>
                    <p class="text-gray-400 text-xs leading-relaxed line-clamp-2 italic">Moelleux à souhait avec un glaçage miroir à la vanille bourbon.</p>
                </div>
            </div>

        </div>

        <div id="empty-state" class="hidden py-40 text-center">
            <i class="fa-regular fa-heart text-5xl text-gray-200 mb-6 block"></i>
            <h2 class="text-2xl font-black uppercase tracking-tighter">Votre collection est vide</h2>
            <p class="text-gray-400 mt-2 italic text-sm">Explorez nos recettes et cliquez sur le coeur pour les retrouver ici.</p>
            <button class="mt-8 bg-black text-white px-10 py-4 text-[10px] font-bold uppercase tracking-widest hover:bg-orange-600 transition">Explorer les recettes</button>
        </div>
    </main>

    <script>
        function removeFavorite(btn) {
            const card = btn.closest('.recipe-card');
            
            // Animation de sortie
            card.style.opacity = '0';
            card.style.transform = 'scale(0.9)';
            
            setTimeout(() => {
                card.remove();
                updateCount();
            }, 400);
        }

        function updateCount() {
            const grid = document.getElementById('favorites-grid');
            const count = grid.children.length;
            document.getElementById('fav-count').innerText = count;
            
            if (count === 0) {
                document.getElementById('empty-state').classList.remove('hidden');
                grid.classList.add('hidden');
            }
        }
    </script>
</body>
</html>