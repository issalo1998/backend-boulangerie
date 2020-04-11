<?php

namespace App\Http\Controllers;
use App\Repositories\CommandeRepository;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
     public function __construct()
                {
                   $this->service = new CommandeRepository();
                }
}
