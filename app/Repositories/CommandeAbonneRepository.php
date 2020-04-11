<?php

namespace App\Repositories;
use App\CommandeAbonne;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CommandeAbonneRepository.
 */
class CommandeAbonneRepository extends BaseRepository
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

            $this->model=new CommandeAbonne();
    }
}
