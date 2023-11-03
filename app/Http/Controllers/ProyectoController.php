<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

use Barryvdh\DomPDF\Facade\Pdf;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }
    public function create()
    {
        return view('proyectos.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombreProyecto'          => 'required',
            'fuenteFondos'        => 'required',
            'montoPlanificado'   => 'required',
            'montoPatrocinado'   => 'required',
            'montoFondosPropios'       => 'required'
        ]);
        $proyecto = Proyecto::create($data);
        $proyecto->save();

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente');
 
    }
    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }
    public function update(Request $request, Proyecto $proyecto)
    {
        $data = $request->validate([
            'nombreProyecto'          => 'required',
            'fuenteFondos'        => 'required',
            'montoPlanificado'   => 'required',
            'montoPatrocinado'   => 'required',
            'montoFondosPropios'       => 'required'
        ]);

        $proyecto->update($data);
     //   $proyecto->usuario_modifico = auth()->user()->name;
        $proyecto->save();

        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado exitosamente');

    }
    public function report()
    {
        
        $rutaImage = public_path('img\logo.jpg');
        $proyectos = Proyecto::all();
        
        Pdf::setOption(['dpi' => 50, 'defaultFont' => 'sans-serif']);
        $pdf = Pdf::loadview('proyectos.report',  compact('rutaImage', 'proyectos'));
        $nameFile = 'Pdf_file_' . date("H:i:s") . '.pdf';
        $pdf->setPaper('A4', 'portrait'); 
        $pdf->setOptions([
            "defaultFont" => "Arial", 
            "margin_left" => 0, 
            "margin_right" => 0,
        ]);
        return $pdf->stream($nameFile);
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente');
    }
}
