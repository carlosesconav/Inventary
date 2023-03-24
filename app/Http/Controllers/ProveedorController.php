<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedores;
use Illuminate\Support\Facades\DB;


class ProveedorController extends Controller
{

    public function index()
    {
        $prov = proveedores::all();
        $s = 0;
        return view('proveedores.index')->with(compact('prov','s'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $campos = 
     [
        'name' => 'required',
        'email' => 'required',
        'city' => 'required',
        'address' => 'required'
     ];

     $mensaje = 
     [
       "required" => "El campo es requerido"
     ];
 
     $this->validate($request,$campos,$mensaje);

     $p = new proveedores;
     $p->name = $request->name;
     $p->email = $request->email;
     $p->city = $request->city;
     $p->address = $request->address;
     $p->save();

     return redirect()->route('cliente.item.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $prov = proveedores::findOrFail($id);
        return view('proveedores.edit')->with(compact('prov'));
    }

    public function update(Request $request, $id)
    {
        $prov = request()->except(['_token', '_method']);
        proveedores::where('id','=',$id)->update($prov);

        return redirect()->route('cliente.item.index');
    
    }

    public function destroy($id)
    {
        proveedores::destroy($id);

        return redirect()->route('cliente.item.index');
    }
}
