<?php

require_once "controllers/FilmController.php";
require_once "controllers/RealisateurController.php";
require_once "controllers/GenresController.php";

$ctrlFilm = new FilmController(); 
$ctrlRealisateur = new RealisateurController();
$ctrlGenres = new GenresController();

if(isset($_GET['action'])){

    switch($_GET['action']){
        case "listFilms" : $ctrlFilm->findAll(); break;
        case "detailFilm" : $ctrlFilm->findOneById($_GET['id']); break;
        case "addFilm": $ctrlFilm->formAddFilm(); break;
        case "addFilmOK": $ctrlFilm->addFilm($_POST); break;
        case "editFilm": $ctrlFilm->formEditFilm($_GET['id']); break;
        case "editFilmOK": $ctrlFilm->editFilm($_GET['id'], $_POST); break;
        case "deleteFilm": $ctrlFilm->deleteFilm($_GET['id']); break;

        case "listReal" : $ctrlRealisateur->findAll(); break;
        case "detailReal" : $ctrlRealisateur->findOneById($_GET['id']); break;
        case "addRealisateur": $ctrlRealisateur->formAddRealisateur(); break;
        case "addRealisateurOK": $ctrlRealisateur->addRealisateur($_POST); break;
        case "editRealisateur": $ctrlRealisateur->formEditRealisateur($_GET['id']); break;
        case "editRealisateurOK": $ctrlRealisateur->editRealisateur($_GET['id'], $_POST); break;
        case "deleteRealisateur": $ctrlRealisateur->deleteRealisateur($_GET['id']); break;


        case "listeGenres" : $ctrlGenres->findAll(); break;
        case "detailGenres" : $ctrlGenres->findOneById($_GET['id']); break;
        case "addGenres": $ctrlGenres->formAddGenres(); break;
        case "addGenresOK": $ctrlGenres->addGenres($_POST); break;
        case "editGenres": $ctrlGenres->formEditGenres($_GET['id']); break;
        case "editGenresOK": $ctrlGenres->editGenres($_GET['id'], $_POST); break;
        case "deleteGenres": $ctrlGenres->deleteGenres($_GET['id']); break;
    }
}else {
    $ctrlFilm->findAll();
}