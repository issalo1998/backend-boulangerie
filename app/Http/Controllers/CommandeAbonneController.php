<?php

namespace App\Http\Controllers;
use App\Repositories\CommandeAbonneRepository;
use Illuminate\Http\Request;

class CommandeAbonneController extends Controller
{
     public function __construct()
                {
                   $this->service = new CommandeAbonneRepository();
                }
}
