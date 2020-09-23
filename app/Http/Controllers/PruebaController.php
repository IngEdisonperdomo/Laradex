<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PruebaController extends Controller{

  public function prueba($param){
    return 'estoy dentro de pruebaController recibi este parametro: ' . $param;
  }

}