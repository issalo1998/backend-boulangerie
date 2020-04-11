<?php

namespace App\Http\Controllers;
use App\Repositories\HistoriqueRepository;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
     public function __construct()
                {
                   $this->service = new HistoriqueRepository();
                }
}
