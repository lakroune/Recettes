**FoodieShare** est une plateforme Fullstack développée sous **Laravel**, conçue pour le partage et la découverte de recettes gastronomiques.

---

##  Objectifs du Projet
Créer un espace interactif permettant aux passionnés de cuisine de publier, filtrer et commenter des recettes tout en suivant des critères de performance rigoureux (Eloquent, Caching, Relations).

##  Fonctionnalités (User Stories)

###  Gestion des Recettes
* **Publication** : Titre, description, ingrédients dynamiques, étapes et images.
* **CRUD Complet** : Modification et suppression des propres recettes de l'utilisateur.
* **Exploration** : Recherche par mot-clé et filtrage par catégories (Entrées, Plats, Desserts, Boissons).

###  Interaction & Social
* **Commentaires** : Système de feedback et lecture des avis communautaires.
* **Favoris (Bonus)** : Gestion d'une collection personnelle de recettes.

###  Statistiques & Mise en avant
* **Insights** : Visualisation du nombre total de recettes.
* **Ranking** : Mise en avant des recettes les plus commentées/notées.
* **Admin Feature (Bonus)** : Sélection manuelle de la "Recette du Jour".

---

##  Stack Technique
* **Framework** : Laravel 10/11
* **Frontend** : Blade, Tailwind CSS (Style Flat/Minimaliste), JS
* **Base de Données** : PostgreSQL
* **UML** : Diagrammes de Cas d'Utilisation, Classe et Séquence.

##  Performance & Optimisation (Critères d'évaluation)
* **Eloquent Optimization** : Utilisation de `Eager Loading` (with) pour éviter le problème N+1.
* **Jointures** : Gestion avancée des relations Many-to-Many (ex: Recettes ↔️ Ingrédients).
* **Caching System** : Implémentation de `Laravel Cache` pour les requêtes fréquentes (ex: Recette du Jour, Statistiques globales) afin de réduire la charge DB.
