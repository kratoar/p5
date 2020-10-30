# Faille XSS

- Traiter les données avant envoi
- Traiter les données à la réception
- Utiliser des fonctions de traitement et d'échappement des caractères

# Faille CSRF

- Utiliser des jetons
- Demander une confirmation pour chaque action sensible
- Vérifier le referer:
  - JS: document.referrer
  - PHP $_SERVER['HTTP_REFERER']

# Injection SQL

- Sur les champs textuels:
  - mysqli_real_escape_string() pour échapper les caractères spéciaux
- Sur les champs numériques:
  - ctype_digit()
- En général:
  - vérifier chaque champs
  - utiliser des regex
  - utiliser des requêtes paramétrées
  - utiliser des procédures stockées

# Session highjacking

- 

# Upload de scripts PHP

- 