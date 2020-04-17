<?php

namespace App\Http\Controllers;
use App\Repositories\CommandeRepository;
use Illuminate\Http\Request;
use App\Commande;
use App\ProduitCommande;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
     public function __construct()
    {
       $this->service = new CommandeRepository();
    }



        public function index()
        {
            $data = $this->service->all();
            return $data;
        }

        public function store(Request $request){
            $commande = new Commande();
            $commande->numero = $request->post('numero');
            $commande->date = $request->post('date');
            $commande->save();

             $tabPr = $request->post('tabPr');
             $tabQt = $request->post('tabQt');
             $id = $commande->id;
            for($i=0;$i<count($tabPr);$i++){
                $produitcommande = new ProduitCommande();
                $produitcommande->produit_id = $tabPr[$i];
                $produitcommande->commande_id = $id;
                $produitcommande->nombre = $tabQt[$i];
                $produitcommande->save();
            }

            return Response()->json("Bien cree",'201');
        }

        public function destroy($id){
            $this->service->delete($id);
             return Response()->json("Bien supprime",'201');
        }

        public function show($id){
            $data = $this->service->find($id);
            return $data;
        }

        public function update(Request $request,$id){
            DB::table('Commandes')->where('id',$id)->update($request->all());
             return Response()->json("Bien modifie",'201');
        }


}
