<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class ClothController extends Controller
{
    public function index(){
        $all_clothes = Cloth::all();
        dd($all_clothes);
    }
}
