<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//agregamos el modelo
//use App\Models\modeloProductos;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    // esto es para la base de datos
        //$productos = modeloProductos::all();
        //return view('vendedor.productos.indexProductos',compact('productos'));

        return view('vendedor.productos.indexProductos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedor.productos.createProductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //agarra los datos de la base de datos
        //$crearProducto = modeloProductos::create($request->all());
    /*   $imagen= $request->imagen->getClientOriginalName();
         
       $imagen= modeloProductos::create([
             'nombre'=> $request->nombre,
             'imagen'=>$request->file('imagen')->storeAs('public/imagenesProductos',$imagen),
             'precio'=>$request->precio,
             'categoria'=>$request->categoria,
             'descripcion'=>$request->descripcion
             ]);
        return redirect()->route('productos.index');  */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // find te sirve para buscar
        //$idProducto = modeloProductos::find($id);
        //return view('vendedor.productos.listadoProductos',compact('idProducto'));
        return view('vendedor.productos.listadoProductos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //$idEdit = modeloProductos::find($id);
        //return view('vendedor.productos.updateProductos',compact('idEdit'));
        return view('vendedor.productos.updateProductos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$editar= modeloProductos::find($id);
        //$editar-> update($request->all());
        //return redirect()->route('productos.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //busca el elemento de la tabla
        //$eliminarUsuario= modeloProductos::find($id);
        //$eliminarUsuario->delete();
        //return redirect()->route('productos.index');
    }
}
