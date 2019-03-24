<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tache;

class TacheController extends Controller
{
// Afficher la liste des tâches
   public function index(){
       return Tache::all();
   }

//    Aficher une seul tâche
   public function show($id){
       return Tache::find($id);
   }

//    Enregistrer un tâche
   public function store(Request $request){
       return Tache::create($request->all());
   }

//    Modifier une tâche
   public function update(Request $request, $id){
     $tache = Tache::findOrFail($id);
     $tache->update($request->all());

     return $tache;
   }

//    Suprimer une tâche
   public function delete(Request $request, $id){
       $tache = Tache::findOrFail($id);
       $tache->delete() ;

       return 204; //Retourne un code 204
   }
}
