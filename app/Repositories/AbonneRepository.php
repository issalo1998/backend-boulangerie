<?php

namespace App\Repositories;
use App\Abonne;
use Illuminate\Support\Facades\DB;

//use Your Model

/**
 * Class AbonneRepository.
 */
class AbonneRepository extends BaseRepository implements BaseRepositoryInterface
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

            $this->model=new Abonne();
    }
}
