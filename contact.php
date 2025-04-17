<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="contact.css" />
</head>
<body class="light-mode">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="contact.html">contact</a>
      <button class="navbar-toggler" type="button" >
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="lieux.html">Lieux</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="commerce.html">Commerce</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="acceuil.html">accueil</a>
              </li>
          </ul>
      </div>
      <button id="toggle-button" class="btn btn-outline-secondary ml-auto">Mode Nuit</button>
  </nav>

  <div class="card">
    <h1>Contactez-nous</h1>
    <form action="traitement_contact.php">
      <label for="nom">Nom:</label>
      <input type="text" id="nom" required />

      <label for="prenom">Prénom:</label>
      <input type="text" id="prenom" required />

      <label for="email">Adresse mail:</label>
      <input type="email" id="email" required />

      <label for="type_demande">Type de demande :</label>
      <select id="type_demande" name="type_demande" required>
        <option value="renseignements">Demande de renseignements</option>
        <option value="rendez-vous">Demande de rendez-vous</option>
        <option value="autres">Autres</option>
      </select>

      <label for="commentaire">Commentaire :</label>
      <textarea id="commentaire" required></textarea>

      <button type="submit">Envoyer</button>
    </form>
  </div>

  <script src="contact.js">
  </script>
    <footer class="bg-light text-center py-4">
        <p> 2025 Yaoundé. Tous droits réservés. en route pour la liberte</p>
    </footer>
</body>
</html>