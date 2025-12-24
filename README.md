# TP-3---Les-formulaires-en-Symfony
1. Objectif
Le but de ce TP est de construire le formulaire suivant en Symfony et de gérer sa soumission.
2. Étapes réalisées
2.1 Création du projet Symfony
Création d’un nouveau projet Symfony.
Premier lancement du serveur local avec le port par défaut.
Erreur rencontrée : le port était déjà occupé.
Solution : changement du port pour accéder au projet via :
http://localhost:8080/
2.2 Création du contrôleur
Création d’un contrôleur nommé FormController pour gérer l’affichage et la soumission du formulaire.
2.3 Création du formulaire
Création d’un dossier Form dans le projet.
Création d’un dossier type dans le projet.
Création du fichier ProduitType.php dans ce dossier.
Ce fichier contient la configuration des champs du formulaire liés à l’entité Produit.
