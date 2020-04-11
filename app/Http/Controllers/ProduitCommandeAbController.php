<?php

namespace App\Http\Controllers;
use App\Repositories\ProduitCommandeAbRepository;
use Illuminate\Http\Request;

class ProduitCommandeAbController extends Controller
{
     public function __construct()
                {
                   $this->service = new ProduitCommandeAbRepository();
                }
}
