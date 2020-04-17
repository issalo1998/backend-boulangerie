<?php

namespace App\Repositories;
use App\Depot;
use Illuminate\Support\Facades\DB;

//use Your Model

/**
 * Class DepotRepository.
 */
class DepotRepository extends BaseRepository implements BaseRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }

     function __construct(){

             $this->model=new Depot();
        }


}
