<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
{

    public function store(ProductoRequest $request)
    {

        $producto = $request->all();
        return $producto;
        
    }
   

}
