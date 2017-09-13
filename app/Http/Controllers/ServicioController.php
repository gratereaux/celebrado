<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;
use App\Categoria;

class ServicioController extends Controller
{



    public function add($suplidor_id){

        $categorias = Categoria::pluck('nombre', 'id');
        $datos = new Servicio();

        return view('admin.suplidor.servicio')
                ->with('suplidor', $suplidor_id)
                ->with('categorias', $categorias)
                ->with('datos', $datos);

    }

    public function store(Request $request){

        $servicio = new Servicio($request->all());
        $fotos = $request->file('photo');

        if(!count($fotos) > 3)
        {
            Flash::warning('Debe seleccionar 3 imágenes o menos, vuelva a llenar nuevamente');
            return redirect()->route('servicio.add', $servicio->suplidor_id)->withInput($request->all());
        }

        $nombresfotos = array();
        if($request->hasFile('photo'))
        {
            foreach ($fotos as $foto){
                $upload = $foto->move('images/users', $foto->getClientOriginalName());
                array_push($nombresfotos, $foto->getClientOriginalName());
            }
        }


       // $servicio =

        $servicio->fotos = serialize($nombresfotos);
        $servicio->save();



        Flash::success('Se ha agregado el nuevo servicio');
        return redirect()->route('suplidor.show', $servicio->suplidor_id);
        
    }
}
