<?php

namespace App\Repositories;
use App\Historique;
use Illuminate\Support\Facades\DB;

//use Your Model

/**
 * Class HistoriqueRepository.
 */
class HistoriqueRepository extends BaseRepository implements BaseRepositoryInterface
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

             $this->model=new Historique();
        }


}
