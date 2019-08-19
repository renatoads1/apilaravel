<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imoveis;
class ImoveisController extends Controller
{
    /* 
    Exibe imoveis
    */
    public function index(){
        $query = Imoveis::all();
        return $query;
        }
    /* 
    cria um imovel de acordo com o request
    */
    public function store(Request $request){
        Imoveis::create($request->all());
    }
    /* 
    *@param int id
    */
    public function show($id){
        return Imoveis::findOrFail($id);
    }
    /* açtera um registro pelo id
    *@param int id
    */
    public function update(Request $request,$id){
        $imoveis =Imoveis::findOrFail($id);
        $imoveis->update($request->all());
    }
    /* deleta um registro pelo i d
    *@param int id
    */
    public function destroy($id){
        $imoveis = Imoveis::findOrFail($id);
        $imoveis->delete();
    }

}
