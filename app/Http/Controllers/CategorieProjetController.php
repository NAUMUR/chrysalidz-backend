<?php

namespace App\Http\Controllers;

use App\categorieProjet;
use Illuminate\Http\Request;

class CategorieProjetController extends Controller
{
    public function listeCategorieProjet() {
        $categorie = categorieProjet::all();
        return response()->json($categorie);
    }

    public function addCategorie(Request $request) {

        $categorie = new categorieProjet();
        $categorie->libelle = $request->libelle;
        $categorie->save();

        return response()->json(array('message' => 'categorie ajoutée avec succes ', 'success' => true, 200));
    }

    public function updateCategorie(Request $request)
    {

        $categorie = categorieProjet::find($request->id);
        $categorie->libelle = $request->libelle;
        $categorie->save();

        return response()->json(array('message' => 'categorie mise a jour avec succes ', 'success' => true, 200));
    }
    public function deleteCategorie(Request $request)
    {

        $categorie = categorieProjet::find($request->id);
        $categorie->delete();

        return response()->json(array('message' => 'categorie supprimée avec succes ', 'success' => true, 200));
    }
}
