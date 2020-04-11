<?php

namespace App\Http\Controllers;
use App\Repositories\AbonneRepository;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
     public function __construct()
        {
           $this->service = new AbonneRepository();
        }
}
