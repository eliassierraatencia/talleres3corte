<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Proveedor as ProveedorResource;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Http\Resources\Producto as ProductoResource;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return ProveedorResource::collection($proveedores);
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return new ProductoResource($producto);
    }
}
