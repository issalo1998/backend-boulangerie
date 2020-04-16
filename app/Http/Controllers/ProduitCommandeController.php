<?php

namespace App\Http\Controllers;
use App\Repositories\ProduitCommandeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitCommandeController extends Controller
{
     public function __construct()
    {
       $this->service = new ProduitCommandeRepository();
    }



        public function index()
        {
            $data = $this->service->all();
            return $data;
        }

        public function store(Request $request){
            $this->service->create($request->all());
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
            DB::table('ProduitCommandes')->where('id',$id)->update($request->all());
             return Response()->json("Bien modifie",'201');
        }

        public function getProduitCommande($id){
           $data = $this->service->getBy('commande_id',$id);
           return $data;
        }


}
