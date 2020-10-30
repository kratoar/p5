# Déroulé du projet

## 0 - Projection

- Réflexion sur le but, le sujet et ses limites
****
## 1 - Prévision

- Prévision des besoins techniques
- Prévision des besoins matériels (icônes, librairies graphiques)
- Liste des issues
- Établissement d'une chronologie
****
## 2 - Préparation

- Création d'un repository git
- Installation des dépendances
- Rédaction d'un fichier d'installation
****
## 3 - Production

Le temps notifié est le temps de code, prenant en compte le temps nécessaire à l'obtention d'un code fonctionnel. N'est donc pas compté le respect des PSR et il peut être estimé jusqu'à 20% du temps d'un ticket pour l'obtention d'un code sain.

- <span style="color:#34c924">[FRONT]</span> - Création aspect page d'accueil avec charte graphique - <span style="color:red">**8h / 1d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Création header - <span style="color:orange">**4h / 0.5d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Création banner - <span style="color:orange">**2h / 0.25d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Création footer - <span style="color:orange">**2h / 0.25d**</span>
- <span style="color:#536289">[BACK]</span> - Posts - <span style="color:red">**2h / 0.25d**</span>
  - <span style="color:#536289">[BACK]</span> - Création table posts - <span style="color:orange">**1h / 0.125d**</span>
  - <span style="color:#536289">[BACK]</span> - Création table users - <span style="color:orange">**1h / 0.125d**</span>
  - <span style="color:#536289">[BACK]</span> - Création d'un jeu de données de test avec Faker et gravatar
- <span style="color:#34c924">[FRONT]</span> - Création page compte - <span style="color:red">**2h / 0.25d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Onglet informations - <span style="color:orange">**2h / 0.25d**</span>
    - <span style="color:#34c924">[FRONT]</span> - Modale changement pseudo - <span style="color:orange">**1h / 0.125d**</span>
    - <span style="color:#34c924">[FRONT]</span> - Modale changement avatar - <span style="color:orange">**1h / 0.125d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Onglets paramètres
  - <span style="color:#34c924">[FRONT]</span> - Onglet commentaires
- <span style="color:#34c924">[FRONT]</span> - Création page ajout post - <span style="color:red">**6h / 0.75d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Création formulaire - <span style="color:orange">**2h / 0.25d**</span>
  - <span style="color:#536289">[BACK]</span> - Traitement de la requête - <span style="color:orange">**4h / 0.5d**</span>
- <span style="color:#34c924">[FRONT]</span> - Création page posts - <span style="color:red">**4h / 0.5d**</span>
  - <span style="color:#536289">[BACK]</span> - Requête de chargement lazy-loading - <span style="color:orange">**2h / 0.25d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Création hook lazy-loading - <span style="color:orange">**2h / 0.25d**</span>
- <span style="color:#34c924">[FRONT]</span> - Création page modification post administrateur - <span style="color:red">**4h / 0.5d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Création formulaire - <span style="color:orange">**2h / 0.25d**</span>
  - <span style="color:#536289">[BACK]</span> - Traitement de la requête - <span style="color:orange">**2h / 0.25d**</span>
- <span style="color:#34c924">[FRONT]</span> - Création page suppression posts administrateur - <span style="color:red">**4h / 0.5d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Création formulaire - <span style="color:orange">**2h / 0.25d**</span>
  - <span style="color:#536289">[BACK]</span> - Traitement de la requête - <span style="color:orange">**2h / 0.25d**</span>
- <span style="color:#34c924">[FRONT]</span> - Création modale suppresion / modification post utilisateur - <span style="color:red">**6h / 0.75d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Création modale - <span style="color:orange">**2h / 0.25d**</span>
  - <span style="color:#536289">[BACK]</span> - Traitement de la requête - <span style="color:orange">**4h / 0.5d**</span>
- <span style="color:#34c924">[FRONT]</span> - Création style graphique posts - <span style="color:red">**6h / 0.75d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Page d'accueil - <span style="color:orange">**2h / 0.25d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Page posts - <span style="color:orange">**2h / 0.25d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Page modification de post - <span style="color:orange">**2h / 0.25d**</span>
  - <span style="color:#34c924">[FRONT]</span> - Page suppression de post - <span style="color:orange">**-h / -d**</span>
- <span style="color:#ffe436">[GENERAL]</span> - Review PSR - <span style="color:red">**16h / 2d**</span>
  - Review pour chaque ticket
  - Review finale