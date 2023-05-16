<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjoutEmpController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

///////////////////////////////// Afficher la page de connexion /////////////////////////////////

Route::get("/",[AjoutEmpController::class,"login"]);

///////////////////////////////// Afficher les Emps /////////////////////////////////

Route::get("/afficher",[AjoutEmpController::class,"index"])->name('affichageEmp');

//////////////////////////////// Ajouter un nouveau Emp /////////////////////////////////


Route::get("/ajouter",[AjoutEmpController::class,"createEmp"])->name('Employe.create');
Route::post("/ajouter",[AjoutEmpController::class,"create"])->name('ajouterEmp');


//////////////////////////////// Stocker un nouveau Emp /////////////////////////////////


Route::get('/Employe/{id}/edit', [AjoutEmpController::class, 'editEmp']);
Route::post('/Employe/{id}/update', [AjoutEmpController::class, 'updateEmp'])->name('Employer.update');


//////////////////////////////// Supprimer un  Emp /////////////////////////////////

Route::get('/confirmdeleteEmp',[AjoutEmpController::class,"confirmDestroyEmp"])->name('Employer.delete');
Route::get('/Employe/{id}/destroy', [AjoutEmpController::class, 'destroyEmp'])->name('Employer.destroy');

///////////////////////////////// Afficher la page menu /////////////////////////////////

Route::get("/menu",[AjoutEmpController::class,"menu"])->name('menu');

