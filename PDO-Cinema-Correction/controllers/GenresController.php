<?php

// require 'bdd/DAO.php';

class GenresController {
    
    /**
     * findAll
     *
     * @return void
     */
    public function findAll() {

        $dao = new DAO();
        $sql = "SELECT id_genre, nom_genre
                    FROM genre
                    ORDER BY nom_genre";
        $genres = $dao->executerRequete($sql);
        require 'views/genre/listeGenres.php';
    }
    
    /**
     * findOneById
     *
     * @param  mixed $id
     * @param  mixed $edit
     * @return void
     */
    public function findOneById($id, $edit = false) {

        $dao = new DAO();
        $sql = "SELECT id_genre, nom_genre 
                    FROM genre
                    WHERE id_genre = :id";
        $genre = $dao->executerRequete($sql, [":id" => $id]);

        if(!$edit){
            require 'views/genre/detailGenres.php';
        } else {
            return $genre;
        }
    }
 
    
    /**
     * formAddGenre
     *
     * @return void
     */
    public function formAddGenres() {

        require "views/genre/addGenres.php";
    }
    
    /**
     * formEditGenre
     *
     * @param  mixed $id
     * @return void
     */
    public function formEditGenres($id) {

        $genre = $this->findOneById($id, true);
        require "views/genre/editGenres.php";
    }
    
    /**
     * addGenre
     *
     * @param  mixed $array
     * @return void
     */
    public function addGenres($array) {

        $nom_genre = filter_var ($array["nom_genre"], FILTER_SANITIZE_STRING);

        
        $dao = new DAO();
        $sql = "INSERT INTO genre(nom_genre) 
                    VALUES (:nom_genre)";
        $dao->executerRequete($sql, [
                ":nom_genre" => $nom_genre,
            ]);

        header("Location: index.php?action=listeGenres");
    }
    
    /**
     * editRealisateur
     *
     * @param  mixed $id
     * @param  mixed $array
     * @return void
     */
    public function editGenres($id, $array) {

        $nom_genre = filter_var ($array["nom_genre"], FILTER_SANITIZE_STRING);

        $dao = new DAO();
        $sql = "UPDATE genre 
                    SET nom_genre  = :nom_genre
                    WHERE id_genre  = :id";
        $dao->executerRequete($sql, [
            ":id" => $id,
            ":nom_genre" => $nom_genre,
        ]);

        header("Location: index.php?action=listeGenres");
    }
    
    /**
     * deleteGenre
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteGenres($id) {

        $dao = new DAO();
        $sql = "DELETE FROM genre WHERE id_genre = :id";
        $dao->executerRequete($sql, [
                ":id" => $id
            ]);

        header("Location: index.php?action=listeGenres");
    }
}