<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Laracasts\Flash\Flash;

class CategoriaController extends Controller
{
    public function index()
    {

        $categorias = Categoria::all();

        return view('admin.categoria.index')
            ->with('categorias', $categorias);


    }

    public function destroy($id)
    {
        $cat = Categoria::find($id);
        $cat->delete();

        Flash::success('Se ha eliminado la categoria '. $cat->nombre);
        return redirect()->route('categoria.index');
    }

    public function store(Request $request)
    {
        $cat = new Categoria($request->all());

        $cat->save();

        Flash::success('Se ha agregado la nueva categoria '. $cat->nombre);
        return redirect()->route('categoria.index');
    }
}
