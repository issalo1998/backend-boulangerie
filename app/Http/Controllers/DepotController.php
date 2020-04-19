<?php

namespace App\Http\Controllers;
use App\Repositories\DepotRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepotController extends Controller
{
     public function __construct()
    {
       $this->service = new DepotRepository();
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
            DB::table('depots')->where('id',$id)->update($request->all());
             return Response()->json("Bien modifie",'201');
        }

        public function getdepotmois($id) {
            $qry = "SELECT * from depots as d where MONTH(d.date)=".$id."";
            $data = DB::select($qry);
            return response()->json($data, '200');
         }


}
