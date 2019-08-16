<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imoveis;
class ImoveisController extends Controller
{
    
    public function index(){
        $lol = Imoveis::all();
        return $lol;
    }


}
