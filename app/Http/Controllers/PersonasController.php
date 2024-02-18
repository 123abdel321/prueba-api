<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Prueba::get()
        ]);
    }

    public function create(Request $request)
    {
        $prueba = Prueba::create($request->all());

        return response()->json([
            'data' => $prueba
        ]);
    }

    public function update(Request $request)
    {
        $prueba = Prueba::where('id', $request->get('id'))
            ->update([
                'nombre' => $request->get('nombre'),
                'apellido' => $request->get('apellido'),
                'cedula' => $request->get('cedula'),
            ]);

        return response()->json([
            'data' => $prueba
        ]);
    }

    public function delete(Request $request)
    {
        Prueba::where('id', $request->get('id'))->delete();
        
        return response()->json([
            'data' => true
        ]);
    }
}
