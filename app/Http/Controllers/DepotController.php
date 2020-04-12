<?php

namespace App\Http\Controllers;
use App\Repositories\DepotRepository;
use Illuminate\Http\Request;

class DepotController extends Controller
{
     public function __construct()
    {
       $this->service = new DepotRepository();
    }



}
