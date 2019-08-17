<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imoveis;
class ImoveisController extends Controller
{
    
    public function index(Request $request){

        if($request->has('filter')){
            $query = Imoveis::query();

            $filters = explode(',',$request->input('filter'));
            foreach($filters as $filter){
                list($criteria,$value) = explode(':',$filter);
                $query->where($criteria,$value);
            }
        }else{
            $query = Imoveis::all();

        }


       return $query;
    }


}
