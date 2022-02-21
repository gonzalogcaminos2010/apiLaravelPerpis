<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate();

        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        return view('producto.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //save image path




        $producto = $request->all();
        if($imagen = $request->file('image')){
         $rutaGuardaImg = 'imagen/';
         $imagenProducto = date('YmdHis') . $imagen->getClientOriginalName();
         $imagen->move($rutaGuardaImg, $imagenProducto);
         $producto['image'] = "$imagenProducto";
        }
        Producto::create($producto);
        //var_dump($producto['image']);

        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (Producto::where('id', $id)->exists()) {
            $producto = Producto::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($producto, 200);
          } else {
            return response()->json([
              "message" => "Producto not found"
            ], 404);
          }
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);

        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        if (Producto::where('id', $id)->exists()) {
            $producto = Producto::find($id);
            $producto->nombre = is_null($request->nombre) ? $producto->nombre : $request->nombre;
            $producto->descripcion = is_null($request->descripcion) ? $producto->descripcion : $request->nombre;
            $producto->precio = is_null($request->precio) ? $producto->precio : $request->precio;
            $producto->image = is_null($request->image) ? $producto->image : $request->image;
            $producto->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Producto not found"
            ], 404);

        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
}
