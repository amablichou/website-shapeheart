Utiliser Git Hub + Sublime Text : 
-Ouvrir en local le dossier Shapeheart-Website3 dans sublime Text
-Faire les modifications nécessaires
-Vérifier le site avec MAMP (télécharger MAMP, pointer le dossier où Mamp va chercher le fichier index.html sur le dossier Shapeheart--Website3, une page s'ouvre dans le navigateur, cliquer sur mon site Web)
-Actuliser si besoin dans une fenêtre de navigation privée pour vérifier les changements
-Une fois les changements vérifiés on peut sauver et ajouter les modifications à GitHub

Ajouter les fichiers sur GitHub
-git status pour voir ce qu’il detecte
-git add . pour ajouter les fichiers modifiés
-git commit -am « nomducommit » pour se…pour voir ce qu’il detecte
-git add . pour ajouter les fichiers modifiés
-git commit -am « nomducommit » pour se repérer sur github
-git push



Ajouter un article au blog :

1/ Se rendre sur www.1and1.fr
2/ Cliquer sur "espace client", se connecter (demander les identifiants à Antoine)
3/ Dans la section Hebergement, cliquer sur "Base de données MySQL"
4/ Trouver la ligne dont la description est "Articles" (la seule actuellement)
5/ Cliquer sur phpMyAdmin à droite
6/ Dans le nouvel onglet, cliquer sur db643346146 dans le menu à gauche
7/ Dans la sous-liste, cliquer sur "article", ça fera apparaître la liste des articles existants (possibilité de les modifier)
8/ Dans le menu du haut, cliquer sur "Insérer"
9/ Remplir les éléments comme suit :

id : laisser vide
titrefr : titre de l'article en français
titreen : titre de l'article en anglais
date_article : date de parution
apercufr : ce qui apparaitra avant qu'on clique sur "afficher la suite", en francais
apercuen : idem en anglais
texte1fr : texte avant l'image, en francais
texte1en : idem en anglais
photo : image de l'article, de la forme /img/nom-de-limage.jpg
texte2fr : texte après l'image, en francais
texte2en : idem en anglais

10/ Cliquer sur Executer et enjoy !


Pour ajouter une image :

1/ Répeter les étapes 1 & 2 si nécessaire, sinon retourner simplement dans l'espace client
2/ Dans la section Hebergement, cliquer sur 1&1 WebTransfer
3/ Dans les dossiers, se placer sur /prodv2/img
4/ Cliquer sur l'icône charger (ordinateur avec flèche montante)
5/ Choisissez votre fichier et validez. Enjoy !
