<?php

namespace App\Repositories;
use App\ProduitCommandeAb;
use Illuminate\Support\Facades\DB;

//use Your Model

/**
 * Class ProduitCommandeAbRepository.
 */
class ProduitCommandeAbRepository extends BaseRepository  implements BaseRepositoryInterface
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

            $this->model=new ProduitCommandeAb();
    }
}
