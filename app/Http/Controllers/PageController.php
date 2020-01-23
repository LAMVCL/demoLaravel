<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function inicio(){
        $notas = App\Nota::paginate(5);
        return view('welcome',compact('notas'));
    }

    public function crear(Request $solicitud){
        //return $solicitud->all();

        //Validar campos requeridos.
        $solicitud->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaNueva = new App\Nota;
        $notaNueva->nombre = $solicitud->nombre;
        $notaNueva->descripcion = $solicitud->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota agregada');
    }

    public function editar($id){
        //Recibimos un id el cual será buscado en nuestra BD notas
        $nota = App\Nota::findOrFail($id);
        //De ser encontrado, nos enviará a la vista editar, con la información de nuestra Nota del id enviado.
        return view('notas.editar', compact('nota'));
    }

    //FUNCION ESPECIFICA DE ACTUALIZAR, FUNCIONA CON PUT
    public function update(Request $solicitud, $id){
        $notaUpdate = App\Nota::findOrFail($id);

        $notaUpdate->nombre = $solicitud->nombre;
        $notaUpdate->descripcion = $solicitud->descripcion;

        $notaUpdate->save();

        return back()->with('mensaje','Nota actualizada');
    }

    public function eliminar($id){
        $notaEliminar = App\Nota::findOrFail($id);
        //se borra.
        $notaEliminar->delete();
        return back()->with('mensaje','Nota eliminada');
    }

    public function detalle($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle',compact('nota'));
    }

    public function fotos(){
        return view('fotos');
    }

    public function noticias(){
        return view('blog');
    }

    public function nosotros($nombre = null){
        $equipo = ['ignacio','juanito','pedrito'];
        //return view('nosotros', ['equipo'=>$equipo, 'nombre'=>$nombre]);

        //Segunda manera de pasar un array a blade.
        return view('nosotros',compact('equipo','nombre'));
    }
}
