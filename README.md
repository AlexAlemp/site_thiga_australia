Site Thiga Australia

# Installation du plugin instagram

La lib js utilisée pour récupérer les photos instagram est spectagram.js
Pour qu'elle fonctionne il faut spécifier le clientID et l'accesstoker instagram dans le fichier js/script.js
Pour obtenir ces id il faut déclarer un nouveau client en tant que développeur Instagram (dans l'interface des développeurs instagram)

### Bugs résolu

Pour autoriser le client à afficher les photos du feed public il faut activer cette option via le paramètre SCOPE de l'API
L'activation se fait en appeler cet URL : 

``` html
https://api.instagram.com/oauth/authorize/?client_id=CLIENTID&redirect_uri=REDIRECT-URI&response_type=code&scope=basic+public_content+follower_list+comments+relationships+likes
```

