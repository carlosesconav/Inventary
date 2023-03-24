<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedores;
use App\Models\report;
use App\Models\inventary;
use Dompdf\Dompdf;  

class ReportController extends Controller
{

    public function index()
    {
        $rep = report::all();
        $s = 0;
        return view('reporte.index')->with(compact('s','rep'));
    }

    public function create()
    {
        $prov = proveedores::all();
        $inv = inventary::all();
        return view('reporte.create')->with(compact('prov','inv'));
    }

    public function store(Request $request)
    {
        $campos = 
        [
           'key_proveedor' => 'required',
           'key_producto' => 'required'
        ];
   
        $mensaje = 
        [
          "required" => "El campo es requerido"
        ];
    
        $this->validate($request,$campos,$mensaje);
   
        $p = new report;
        $p->key_producto = $request->key_producto;
        $p->key_proveedor = $request->key_proveedor;
        $p->save();
   
        return redirect()->route('report.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        report::destroy($id);

        return redirect()->route('report.index');
    }

    public function pdf($id)
    {

        $data = report::findOrFail($id);

        $prov = proveedores::findOrFail($data->key_proveedor);
        $inv = inventary::findOrFail($data->key_producto);

        $html = view('reporte.report', compact('prov', 'inv'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();


        return $dompdf->stream();
    }

}
