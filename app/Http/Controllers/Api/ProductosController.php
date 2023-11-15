<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
	    $productos = Productos::all();
	    return $productos;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
	    $productos = new Productos();
	    $productos->nombre = #request->nombre;
	    $productos->precio = #request->precio;
	    $productos->cantidad = #request->cantidad;
	    $productos->marca = #request->marca;

	    $productos->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
	    $productos = Productos::find($id);
	    return $productos;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
	    $productos = Productos::findOrFail($request->id);
	    $productos->nombre = #request->nombre;
	    $productos->precio = #request->precio;
	    $productos->cantidad = #request->cantidad;
	    $productos->marca = #request->marca;

		$productos->save();
	    return $productos;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
	    $productos = Productos::destroy($id);
	    return $productos;
    }
}
