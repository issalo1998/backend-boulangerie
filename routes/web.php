<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  PROFIL

Route::get('/profil','ProfilController@getProfil');
Route::post('/addprofil','ProfilController@addProfil');
Route::delete('/deleteprofil/{id}','ProfilController@deleteProfil');
Route::patch('/updateprofil/{id}','ProfilController@updateProfil');
Route::get('/getoneprofil/{id}','ProfilController@getOneProfil');

//  UTILISATEUR

Route::get('/user','UtilisateurController@getUser');
Route::post('/adduser','UtilisateurController@addUser');
Route::delete('/deleteuser/{id}','UtilisateurController@deleteUser');
Route::patch('/updateuser/{id}','UtilisateurController@updateUser');
Route::get('/getoneuser/{id}','UtilisateurController@getOneUser');
Route::get('/getprofils','UtilisateurController@getProfils');
Route::get('/getprofil','UtilisateurController@getProfil');
Route::get('/joins','UtilisateurController@join');

//  TYPE DE PRODUIT

Route::get('/type','TypeController@getType');
Route::post('/addtype','TypeController@addType');
Route::delete('/deletetype/{id}','TypeController@deleteType');
Route::patch('/updatetype/{id}','TypeController@updateType');
Route::get('/getonetype/{id}','TypeController@getOneType');

//  PRODUIT
Route::get('/getProduit','ProduitController@getProduit');
Route::get('/produit/{id}','ProduitController@getProduitByType');
Route::post('/addproduit','ProduitController@addProduit');
Route::delete('/deleteproduit/{id}','ProduitController@deleteProduit');
Route::patch('/updateproduit/{id}','ProduitController@updateProduit');
Route::get('/getoneproduit/{id}','ProduitController@getOneProduit');

//  fraisspeciaux
Route::resource('/fraisspeciaux', 'FraisSpeciauxController');
// abonners
Route::resource('/abonnes', 'AbonneController');

//Commande abonner
Route::resource('/commandeabs', 'CommandeAbonneController');
Route::get('/getcommande/{id}','CommandeAbonneController@getcommande');

//facture abonnement 
Route::get('/showPdf/{id}/{id1}', 'FactureController@ShowPdfFactureCommande');


//facturecommande
Route::get('/showcommandePdf', 'FactureController@ShowPdfFactureCommande2');


//Commande abonner produit
Route::resource('/produitcommandeabs', 'ProduitCommandeAbController');
Route::get('/produitcommandeabs/getProdAbbyAbonnement/{id}','ProduitCommandeAbController@getProdAbbyAbonnement');

//VAGUE
Route::get('/getprodbytype/{id}','VagueController@getProdByType');
Route::post('/addvague','VagueController@addVague');
Route::patch('/updatevague/{id}','VagueController@updateVague');
Route::get('/getlastvague','VagueController@getLastVague');
Route::get('/vague/{id}','VagueController@getVague');
Route::post('/addintermediaire','VagueController@addIntermediaire');
Route::delete('/deletevague/{id}','VagueController@deleteVague');
Route::delete('/deleteintermediairebyvague/{id}','VagueController@deleteIntermediaireByVague');
Route::get('/getonevague/{id}','VagueController@getOneVague');
Route::get('/getintermediairesbyvague/{id}','VagueController@getIntermediairesByVague');
Route::get('/getintermediairesdetails/{id}','VagueController@getIntermediairesDetails');
Route::get('/gettypevague/{id}','VagueController@getTypeVague');
Route::get('/getlastreste/{id}','VagueController@getLastReste');
Route::get('/getsommeboul/{horaire}/{date}','VagueController@getSommeBoul');
Route::get('/getsommepat/{horaire}/{date}','VagueController@getSommePat');
Route::get('/getnbre/{id}/{horaire}/{date}/{type}','VagueController@getNbre');
Route::post('/addcaisse','VagueController@addCaisse');
Route::get('/caisse','VagueController@getCaisses');
Route::delete('/deletecaisse/{id}','VagueController@deleteCaisse');
Route::get('/getonecaisse/{id}','VagueController@getOneCaisse');
Route::get('/getcaissebyhoraire/{id}/{horaire}/{date}','VagueController@getCaisseByHoraire');
Route::patch('/updatecaisse/{id}','VagueController@updateCaisse');

