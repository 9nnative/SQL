<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>

    <title><?= $titre ?></title>
</head>
<body>
    <nav class="uk-navbar-container" uk-navbar>
        <ul class="uk-navbar-nav">
            <li><a href="index.php?action=listFilms">Liste des films</a></li>        
            <li><a href="index.php?action=listReal">Liste des réalisateurs</a></li>
            <li><a href="index.php?action=listeGenres">Liste des Genres</a></li>
        </ul>
    </nav>
    <div class="uk-container uk-container-expand">
        <h1>Gestion films avec PDO</h1>
        <?= $contenu ?>
    </div>
</body>
</html>