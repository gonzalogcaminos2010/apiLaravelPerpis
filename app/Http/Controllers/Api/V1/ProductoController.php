<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Resources\V1\ProductosResource;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all products
        $imagen = Producto::all();

        return ProductosResource::collection(Producto::latest()->paginate());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store product with image url
        $producto = $request->all();
        if($imagen = $request->file('image')){
            $rutaGuardaImg = 'imagen/';
            $nombreImagen = $imagen->getClientOriginalName();
            $imagen->move($rutaGuardaImg, $nombreImagen);
            $producto['image'] = $rutaGuardaImg . $nombreImagen;
        }
        Producto::create($producto);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //Show one product
        return new ProductosResource($producto);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //update one product
        $producto->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //delete one product
        $producto->delete();

    }
}
