<?php

namespace App\Http\Controllers;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;

class TypeController extends Controller
{
            public function __construct()
                {
                   $this->service = new TypeRepository();
                }


            function getType(){
                return $this->service->getType();
            }

            function addType(Request $request){
                return $this->service->addType($request->all());
            }

            function deleteType(Request $request){
                $id=$request->id;
                return $this->service->deleteType($id);
            }

            function updateType(Request $request){
                $id=$request->id;
                return $this->service->updateType($id,$request->all());
            }

            function getOneType(Request $request){
                $id=$request->id;
                 return $this->service->getOneType($id);
                 }
}
