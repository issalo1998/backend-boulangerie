<?php

namespace App\Repositories;
use App\FraisSpeciaux;


class FraisSpeciauxRepository extends BaseRepository  implements BaseRepositoryInterface

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

            $this->model=new FraisSpeciaux();
    }
}
