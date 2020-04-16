<?php

namespace App\Repositories;
use App\Farine;


//use Your Model

/**
 * Class FarineRepository.
 */
class FarineRepository extends BaseRepository implements BaseRepositoryInterface
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

            $this->model=new Farine();
        }


}
