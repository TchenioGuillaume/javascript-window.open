<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script>
      var prenom = prompt("Entrer votre prenom. Si vous cliquez sur 'annuler', la page se fermera automatiquement");
      if (prenom) {
        alert("Bonjour " + prenom + ". Vous allez etre rediriger vers la page de la NASA")
        window.open("https://tchenioguillaume.fr/PHP/index.php")
      }
      else {
        alert("Vous avez annuler. La page va se fermer automatiquement")
        window.close()
      }



    </script>
  </body>
</html>
