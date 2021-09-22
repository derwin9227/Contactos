<?php

namespace App\Http\Controllers;

use App\Exports\FileExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function index(Contacto $contacto){
        $contacto =  $contacto::paginate(3);
        return view('index', compact('contacto'));
    }

    public function contacto(){
        return view('contactos');
    }
    public function detalle(Contacto $contactos, $id){
        $contacto = $contactos->findOrFail($id);
        return view('contacto.detalle', compact('contacto'));
    }
    public function crear(Request $request, Contacto $contacto){
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'tlf' => 'required',
        ]);
        
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->tlf = $request->tlf;
        $contacto->save();
        return back()->with('mensaje','Guardado con Exito!!!');
    }
    public function editar($id, Contacto $contacto){
        $contacto = $contacto->findOrFail($id);
        return view('contacto.editar', compact('contacto'));
    }
    public function actualizar($id, Contacto $contacto, Request $request){
        $contacto = $contacto->findOrFail($id);
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->tlf = $request->tlf;
        $contacto->save();
        return redirect()->route('index')->with('mensaje', 'Contacto Actualizado');
    }
    public function eliminar($id, Request $request, Contacto $contacto){
        $contacto = $contacto->findOrFail($id);
        $contacto->delete();
        return redirect()->route('index')->with('mensaje', 'Contacto Eliminado');
    }
    public function exportar(){
        return view('contacto.exportar');
    }
    public function exportarDetalle(FileExport $file){
        return $file->download('archivo.csv');
        /* return redirect()->route('index')->with('mensaje','archivo exportado'); */
    }
}
