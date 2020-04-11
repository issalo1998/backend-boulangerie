<?php

namespace App\Http\Controllers;
use App\Repositories\FarineRepository;
use Illuminate\Http\Request;

class FarineController extends Controller
{
     public function __construct()
                {
                   $this->service = new FarineRepository();
                }
}
