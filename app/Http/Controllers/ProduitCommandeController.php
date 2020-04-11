<?php

namespace App\Http\Controllers;
use App\Repositories\ProduitCommandeRepository;
use Illuminate\Http\Request;

class ProduitCommandeController extends Controller
{
     public function __construct()
        {
           $this->service = new ProduitCommandeRepository();
        }
}
