<?php

namespace App\Repositories;
use App\FraisSpeciaux;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class FraixSpeciauxRepository.
 */
class FraixSpeciauxRepository extends BaseRepository
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
