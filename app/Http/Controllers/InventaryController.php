<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\inventary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class InventaryController extends Controller
{

    public function index()
    {
        $inv = inventary::all();
        $s=0;
        return view('inventary.index')->with(compact('inv','s'));
    }

    public function create()
    {
        $cat = category::all();
        return view('inventary.create')->with(compact('cat'));
    }

    public function store(Request $request)
    {
        
        $inv = request()->except('_token');

        if ($request->hasFile('photo')) {
            $inv['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        inventary::insert($inv);

        return redirect()->route('proveedor.item.index');
    }

    public function show($id)
    {
        $inv = inventary::findOrFail($id);
        return view('inventary.check')->with(compact('inv'));
    }

    public function edit($id)
    {
        $cat = category::all();
        $inv = inventary::findOrFail($id);
        return view('inventary.edit')->with(compact('inv','cat'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->except(['_token', '_method']);

        if($request->hasFile('photo')){

            $inv = inventary::findOrFail($id);
            Storage::delete('public/'.$inv->photo);

            $data['photo']=$request->file('photo')->store('uploads','public');

        }

        inventary::where('id','=',$id)->update($data);

        return redirect()->route('proveedor.item.index');
    }

    public function destroy($id)
    {
        $inv= inventary::findOrFail($id);

        if(Storage::delete('public/'.$inv->photo)){
            inventary::destroy($id);
        }

        return redirect()->route('proveedor.item.index');
    }

    public function state($id)
    {
        $inv = request()->except(['_token', '_method']);
        inventary::where('id','=',$id)->update($inv);

        return redirect()->route('proveedor.item.index');

    }
}
