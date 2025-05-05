<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
class DescripcionController extends Controller
{
    public function crear()
    {
        return view('vistas.crear');
    }
    public function leer()
    {
        $productos= Productos::all();
        return view('vistas.leer', compact('productos'));
    }
    public function eliminar()
    {
        $productos= Productos::all();
        return view('vistas.eliminar', compact('productos'));
    }


    public function update(Request $request, Productos $produc)
    {
        $request->validate([
            'nombre'=>'required|string|max:255',
            'descripcion'=>'required|string',
            'autor'=>'required|string|max:255'
        ]);

        $produc->update($request->all());
        return redirect()->back()->with('success', 'Actualizacion realizada!!!');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|string|max:255',
            'descripcion'=>'required|string',
            'autor'=>'required|string|max:255'
        ]);
        $productos = new Productos();
        $productos->nombre =$request->nombre;
        $productos->descripcion =$request->descripcion;
        $productos->autor =$request->autor;

        $productos->save();

        return redirect()->back()->with('success', 'Operacion realizada!!!');
    }
    public function destruir(Request $request){
        $nombre = $request->input('nombre');
        $productos = Productos::where('nombre',$nombre)->first();
        
        if($productos){
            $productos->delete();
            return redirect()->back()->with('success', 'Operacion realizada!!!');
        }else{
            return redirect()->back()->with('error', 'Operacion no realizada!!!');
        }
    }
}