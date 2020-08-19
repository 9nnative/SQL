<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>

    <title><?= $titre ?></title>
</head>
<body>
    <div class ="container">
        <ul>
            <li><a href="index.php?action=Acceuil">Acceuil</a></li>
            <li><a href="index.php?action=listFilms">Liste des films</a></li>        
            <li><a href="index.php?action=listReal">Liste des réalisateurs</a></li>
            <li><a href="index.php?action=listeGenres">Liste des Genres</a></li>
        </ul>
    </div>
    <div class="uk-container uk-container-expand">
        <h1>Gestion films avec PDO</h1>
        <?= $contenu ?>
    </div>
</body>
</html>