<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suplidor;
use App\Categoria;
use App\Suplidor_Categoria;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class SuplidorController extends Controller
{
    public function index()
    {

        $suplidores = Suplidor::all()->sortByDesc('id');
        $categorias = Categoria::pluck('nombre')->toArray();

        return view('admin.suplidor.index')
                                ->with('suplidores', $suplidores)
                                ->with('categorias', $categorias);


    }

    public function create()
    {
        $cat = Categoria::pluck('nombre', 'id');
        return view('admin.suplidor.form')->with('cats', $cat);
    }

    public function store(Request $request)
    {
        $suplidor = new Suplidor($request->all());

        //File image upload
        $imageName = $request->file('image')->getClientOriginalName() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(base_path() . '/public/images/avatar', $imageName);


        $final = $suplidor->save();

        if ($final){
            foreach ($request->categorias as $cat)
            {
                $cat_sup = new Suplidor_Categoria();
                $cat_sup->id_suplidor = $suplidor->id;
                $cat_sup->id_categoria = $cat;
                $cat_sup->save();
            }

            Flash::success('Se ha agregado el suplidor '. $suplidor->nombre);
            return redirect()->route('suplidor.index');
        }

    }

    public function destroy($id)
    {
        $suplidor = Suplidor::find($id);
        $titulo = $suplidor->nombre;

        $supcat = Suplidor_Categoria::where('id_suplidor', $id);

        $suplidor->delete();
        $supcat->delete();

        Flash::error("El suplidor ".$titulo." ha sido eliminado de manera exitosa!");

        return redirect()->route('suplidor.index');
    }

    public function edit($id)
    {
        $suplidor = Suplidor::find($id);
        $supcat = Suplidor::find($id)->categoriasporsuplidor;
        $cat = Categoria::pluck('nombre', 'id');

        $lists = array();

        foreach($supcat as $cats)
        {
            array_push($lists, $cats->id_categoria);
        }

        return view('admin.suplidor.edit')
                        ->with('cats', $cat)
                        ->with('suplidor', $suplidor)
                        ->with('categorias', $lists);
    }

    public function show($id)
    {
        $suplidor = Suplidor::find($id);

        return view('admin.suplidor.profile')
                ->with('suplidor', $suplidor);
    }
}
