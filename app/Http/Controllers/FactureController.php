<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;
use Illuminate\Support\Facades\DB;

class FactureController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param  UserRepository
     * @return void
     */
    public function __construct()
    {
       // $this->service = $service;FactureService $service
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function ShowPdfFactureCommande($id,$id1)
    {
        $qry = 'SELECT * 
        FROM abonnes a
        WHERE a.id = "' . $id. '" ';
        $ab = DB::select($qry);

        $qry2 = 'SELECT a.nombre as nombre,p.libelle as libelle , p.prix as prix
        FROM produit_commande_abs a ,produits p ,commande_abonnes ab
        WHERE ab.id=a.commandeab_id and p.id=a.produit_id and a.commandeab_id = "' . $id1. '" ';
        $abcp = DB::select($qry2);

        $qry1 = 'SELECT * 
        FROM commande_abonnes a
        WHERE a.id = "' . $id1. '" ';
        $abc = DB::select($qry1);
        $nbrright=$abc[0]->nombreticket;
        $nbr=ceil($abc[0]->nombreticket/3);
        
        $qry3 = 'SELECT SUM(a.nombre*p.prix) as somme
        FROM produit_commande_abs a ,produits p
        WHERE p.id=a.produit_id and a.commandeab_id = "' . $id1. '" ';
        $abcp1 = DB::select($qry3);

   
    
        $pdf = PDF::loadView('abonnementpdf', compact('ab', 'abcp','abcp1', 'abc','nbr','nbrright'));
        return $pdf->download();
    }

    public function ShowPdfFactureCommande2($id,$id1,$id2)
    {   
        $nom=$id1;
        $prenom=$id2;
        $qry = 'SELECT * 
        FROM commandes c
        WHERE c.id = "' . $id. '" ';
        $cm = DB::select($qry);

        $qry1 = 'SELECT c.nombre as nombre ,p.libelle as libelle ,p.prix as prix
        FROM produit_commandes c,produits p,commandes cm
        WHERE cm.id=c.commande_id and  p.id=c.produit_id and c.commande_id = "' . $id. '" ';
        $cmp = DB::select($qry1);

        $qry3 = 'SELECT SUM(a.nombre*p.prix) as somme
        FROM produit_commandes a ,produits p
        WHERE p.id=a.produit_id and a.commande_id = "' . $id. '" ';
        $sum = DB::select($qry3);

        $pdf = PDF::loadView('commandepdf', compact('cm', 'cmp','sum','nom','prenom'));
        return $pdf->download();
    }

}
