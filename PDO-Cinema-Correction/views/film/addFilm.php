<?php ob_start(); ?>

<h2>Ajouter un Film</h2>

<form action="index.php?action=addFilmOK" method="POST">
    <label for="nom_Film">Titre du film</label>
    <label for="nom_realisateur">Rélisateur</label>
    <label for="nom_Film">Nom Film</label>
    <input class="uk-input" type="text" name="nom_Film" id="nom_Film">
    <input class="uk-button uk-margin-top" type="submit" value="Ajouter">
</form>

<?php

$titre = "Ajouter un Film";
$contenu = ob_get_clean();
require "views/template.php";