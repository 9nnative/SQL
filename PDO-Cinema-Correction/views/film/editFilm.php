<?php 
    ob_start(); 
    $detailFilm = $film->fetch();
?>

<h2>Editer un film</h2>

<form action="index.php?action=editFilmOK&id=<?= $detailFilm["id_film"] ?>" method="POST">
    <label for="nom_film">Nom Genre</label>
    <input 
        class="uk-input" 
        type="text" 
        name="nom_film" 
        id="nom_film" 
        value=<?= $detailGenre["nom_film"] ?>
        
    >
    <input class="uk-button uk-margin-top" type="submit" value="Modifier">
</form>

<?php

$titre = "Ajouter un film";
$contenu = ob_get_clean();
require "views/template.php";