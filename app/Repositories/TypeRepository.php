<?php

namespace App\Repositories;
use App\Type;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TypeRepository.
 */
class TypeRepository extends BaseRepository
{

    public function model(){
          //  return Type::class;
      }

    function __construct(){

        $this->model=new Type();
    }


        function getType(){
            $data = DB::table('types')->orderBy('types.id','desc')->get();
            return $data;
        }

        function addType($data){
            DB::table('types')->insert($data);
        }

        function deleteType($id){
            DB::table('types')->where('id',$id)->delete();
        }

        function updateType($id,$data){
            DB::table('types')->where('id',$id)->update($data);
        }

        function getOneType($id){
            $data = DB::table('types')->where('id',$id)->get();
            return $data;
        }
}
