# Projet1
Projet 1

Objectif : Le  doit être un support pour l'environnement installé sur la VM. Par un pipeline sur Jenkins, le code du site doit être analysé. Il doit aussi y avoir des tests unitaires quant au login et mot de passe. Le but final est donc d'avoir un système d'intégration continu. Créer cet outil sera utile pour de futurs projets car cela permettra de tester rapidement et efficacement son projet.

Schéma d'architecture : 

![schéma_architecture](https://user-images.githubusercontent.com/72738673/138066122-c6cf9e77-2320-4559-aae5-21673249e92b.PNG)

Conception détaillée : La réalisation de ce projet se traduit en deux phases. L'une ou il faut installer l'environnement sur la VM, cela veut dire tous les composants demandés: le serveur d'automatisation Jenkins, le logiciel de vérification du code Sonarqube mais aussi le serveur Nginx. D'autres composants tels que MariaDB ou bien Java seront nécessaires.Par la suite, il faudra faire le mini-site. Ici, le PHP sera utilisé, mais avec aucun framework en vue. Bootstrap sera aussi utilisé pour son aspect CSS et le responsive design. 
Par la suite, on arrive à la deuxième phase, celle ou il faut connecter tous les composants. il faudra pusher le site sur Github. 

Plan de test : Les tests se font à travers le login et le mot de passe du mini-site. Il faut donc faire des tests unitaires sur la base de données

Rapport d'avancement périodiques :

Rapport de tests :

