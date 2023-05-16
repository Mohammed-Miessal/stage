<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
////////////////
//////////////////////////////// le code ajouter 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
////////////////////////////////////
///////////////
use App\Models\Utilisateur;

class AjoutEmpController extends Controller
{
 
      ///////////////////////// Pour Afficher les Emps  ////////////////////

       public function index()
       {
           $utilisateurs = Utilisateur::all();
           return view('affichageEmp', compact('utilisateurs'));
       }

       ///////////////////////// Pour creer un nouveau  ////////////////////

        public function createEmp() {
        $utilisateurs = Utilisateur::all();
         return view('ajouterEmp', compact('utilisateurs'));
        
        }


         public function create(Request $request)
       {
        // Valider les données soumises par le formulaire
        $validatedData = $request->validate([

            'identifiant' => 'required',
            // 'type' => 'required|in:Admin,Employer,Commercial,Autre',
            'type' => 'required|in:Employer,Commercial',
            'password' => 'bail|required',
       
        ]);

        // Enregistrer les données dans la base de données

        $utilisateur = new Utilisateur;            
        $utilisateur->identifiant = $validatedData['identifiant'];
        $utilisateur->password = $validatedData['password'];
        $utilisateur->type = $validatedData['type'];
        $utilisateur->save();

        // Rediriger l'utilisateur vers une page de confirmation
      
        return redirect()->route('affichageEmp')->with('success', 'Utilisateur enregistré avec succès !');
    }
    

     ///////////////////////// Pour Modifier un Emp  ////////////////////


    public function editEmp($idToEdit) {
        $utilisateur = Utilisateur::findOrFail($idToEdit);
        return view('modifierEmp', compact('utilisateur'));
    }
    public function updateEmp(Request $req, $id) {

        $validatedData = $req->validate([
            'identifiant' => 'required',
            // 'type' => 'required|in:Admin,Employer,Commercial,Autre',
            'type' => 'required|in:Employer,Commercial',
            'password' => 'required',
        ]);
    
        $updateUtilisateur = Utilisateur::findOrFail($id);
        $updateUtilisateur->identifiant = $validatedData['identifiant'];
        $updateUtilisateur->password = $validatedData['password'];
        $updateUtilisateur->type = $validatedData['type'];
        $updateUtilisateur->save();
    
        return redirect()->route('affichageEmp')->with('success', 'Utilisateur modifier avec succès !');
    }
    
    ///////////////////////// Pour Supprimer un Emp  ////////////////////

    public function confirmDestroyEmp() {
     return view('confirmdestroy')->with('success', 'Utilisateur supprimer avec succès !'); 
    }

    public function destroyEmp($idToDelete) {
     Utilisateur::destroy($idToDelete);
     return Redirect::route('Employer.delete')->with('success', 'Utilisateur supprimer avec succès !');
 }

    ///////////////////////// Pour consulter la page d'acceuil  ////////////////////

    public function menu() {
        return view('menu'); 
   }

    ///////////////////////// Pour consulter la page de connexion  ////////////////////
 
    public function login() {
        return view('loginpage'); 
    }


}
