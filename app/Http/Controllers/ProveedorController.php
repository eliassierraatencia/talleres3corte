<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller
{

    public function index()
    {
        return csrf_token();
    }
   
    public function store(ProveedorRequest $request)
    {

        $proveedor = $request->all();
        return $proveedor;

    }
}
