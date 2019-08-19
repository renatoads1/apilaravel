<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imoveis extends Model
{
    //para deixar um modelo editaveldevese utilizar 
    protected $fillable = ['id','sap_uf','sap_cidade'];
}
