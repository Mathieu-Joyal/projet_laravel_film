<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller {

    /**
     * Affiche les informations de tous les films
     *
     * @return View
     */
    public function index() {

        // Récupération de tous les informations de la table films
        // Retourner la Vue index
        return view("index", [
            "films" => Film::all()
        ]);
    }

    /**
     * Affiche les informations d'un film
     *
     * @param [int] $id
     * @return View
     */
    public function show(int $id){

        // Récupération de tous les informations du film selon l'id
        // Retourner la Vue show ou 404
        return view("films.show", [
            "film" => Film::findOrFail($id)
        ]);
    }

    /**
     * Recherche les informations filtrés par la rechercher
     *
     * @return View
     */
    public function chercher(){

        $search = $_GET["texte"];

        return view("films.chercher", [
            "chercher" => Film::where(strtolower('titre'), 'LIKE', '%'.$search.'%')
            ->get()
        ]);
    }
}
