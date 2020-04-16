<?php

namespace App\Repositories;
use App\Commande;


//use Your Model

/**
 * Class CommandeRepository.
 */
class CommandeRepository extends BaseRepository implements BaseRepositoryInterface
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

            $this->model=new Commande();
        }


}
