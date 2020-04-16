<?php

namespace App\Repositories;
use App\ProduitCommande;


//use Your Model

/**
 * Class ProduitCommandeRepository.
 */
class ProduitCommandeRepository extends BaseRepository implements BaseRepositoryInterface
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

            $this->model=new ProduitCommande();
        }


}
