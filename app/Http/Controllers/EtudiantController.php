<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
/**
*Ajouter un etudiant
*
*@return sur la vue precedente
*/
    public function add(Request $request)
    { //e
        
        $this->validate($request,[
            'nom'=>'required',
            'prenom'=>'required'
            ]);
        Etudiant::create($request->all());
        #return view('home');
        return back()->with('status',trans('etudiant.msgenregistrementok'));
    }

/**
*Afficher les informations d'un etudiant
*
*param int $id:id de l'etudiant 
*@return view: show
*/
public function show($id)
{
$etudiant= Etudiant::findorfail($id);
return view('etudiant.show',compact('etudiant'));
}
/**
*Afficher le formulaire pour la modification 
*
*param int $id:id de l'etudiant 
*@return view: vue Edit d'etudiant
*/
public function edit($id)
{
$etudiant = Etudiant::findorfail($id);//si l'id n'existe pas,il retourne une erreur 404
return view('etudiant.edit',compact('etudiant'));
}
/**
*valider la modification sur le formulaire
*
*param int $id:(id de l'etudiant),request ce qui a ete poste les inputs 
*@return sur la vue precedente
*/
public function update(Request $request, $id)
{
 $etudiant = Etudiant::findorfail($id);//si l'id n'existe pas,il retourne une erreur 404
 $etudiant->nom=$request->input('nom');
 $etudiant->prenom=$request->input('prenom');
 $etudiant->save();
return back()->with('status',trans('etudiant.msgmiseajourok'));
}
public function destroy(Request $request, $id)
{
    Etudiant::destroy($id);
    return Redirect("/")->with('status',trans('etudiant.msgsupprimerok'));
}
}

