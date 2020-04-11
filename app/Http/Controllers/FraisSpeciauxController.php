<?php

namespace App\Http\Controllers;
use App\Repositories\FraisSpeciauxRepository;
use Illuminate\Http\Request;

class FraisSpeciauxController extends Controller
{
     public function __construct()
     {
        $this->service = new FraisSpeciauxRepository();
     }
}
