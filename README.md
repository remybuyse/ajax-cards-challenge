# Cards Manager

jQuery min 3.1.1
Bootstrap 3.3.7

- Gérer tous les retours du serveurs (erreur ou succès) avec des messages explicites à afficher dans les `.alert`
- Renforcer le sentiment d'activité sur l'application lors des échanges avec le serveur
    - Changement de nom des boutons
    - Animations
    - Activation / Désactivation d'éléments de l'interface
- Gérer la vérification du contenu en **front** et en **back**
    - Vérification des données avant l'exécution SQL (pour limiter la charge du serveur)
    - Une card doit avoir une URL valide et inférieure à 255 caractères
    - Une card doit avoir un titre et inférieur à 80 caractères
    - Quand on souhaite supprimer une card, l'id transmise doit être un nombre > 0

BONUS 1 : Notre système de filtre pourrait être amélioré en limitant la fréquence d'envoi au serveur. Plusieurs solutions, ne déclencher une requête AJAX qu'après plusieurs caractères saisis ou pour les plus aventureux, une petite recherche autour du terme `debounce` sur internet pourrait être envisageable :slightly_smiling_face:

BONUS 2 : Modifier le formulaire de connexion de la boutique Pantouf'land pour qu'il vérifie vos données d'authentification avec le serveur en AJAX :
- Les données sont exactes, vous êtes redirigé sur votre compte client ou backoffice si vous êtes admin
- Les données sont inexactes, le formulaire affiche un message d'erreur et s'anime avec un effet `shake` de jQuery UI (ça devrait vous rappeler quelque chose :slightly_smiling_face: https://github.com/O-clock/challenge-bootstrap-auth  )
