<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function liste(){
        $etudiant = Etudiant::all();
        return view('etudiant.liste',[
            'etudiant'=>$etudiant
        ]);
    }

    public function ajoutForm(){
        return view('etudiant.ajout');
    }

    public function add(Request $request){

        //requete pour ajouter les données du formulaire -> BDD
        Etudiant::create($request->all());

        //rediriger vers liste
        return redirect()->route('etudiant.liste');
    }

    public function showModif($id){

        $etudiant = Etudiant::find($id);

        return view('etudiant.modifier',[
            'etudiant' => $etudiant
        ]);
    }

    public function update(Request $request){

        $id = $request->input('id');

        $etudiant = Etudiant::find($id);
        
        $etudiant->update($request->all());
        //redirection
        return redirect()->route('etudiant.liste');

    }

}
