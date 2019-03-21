<?php

namespace App\Http\Controllers\cubo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CuboUpdateRequest;
use Illuminate\Support\Facades\DB;
use App\cube;

class CuboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cubo.formulario')->with('info', 'Valores del cubo ingresados con exito, ahora oprima FUNCIONAR PARA VER LAS RESPUESTAS');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $T = DB::table('cubes')->pluck('T')->last();
        $N = DB::table('cubes')->pluck('N')->last();
        $M = DB::table('cubes')->pluck('M')->last();
        $W = DB::table('cubes')->pluck('W')->last();
        $V1 = DB::table('cubes')->pluck('v1')->last();

        for ($i = 1; $M; $i++) {
            
        }

        return view('cubo.queris', compact('T','N','M','W','V1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {   
        $id1 = DB::table('cubes')->pluck('id')->first();
        if (! $id1==null){
            $borrar = cube::find($id1)->delete();
        }
        $id = DB::table('cubes')->pluck('id')->last();
        $cero = 0;
    
        $newcubo = DB::table('cubes')
        ->where('id', $id)
        ->insert([
            'T' => $cero,
            'N' => $cero,
            'M' => $cero,
            'W' => $cero,
            'V1' => $cero,
        ]);  
        return back()->with('info', 'Matriz reestablecida a 0, INGRESE NUEVOS VALORES');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CuboUpdateRequest $request)
    {
        // dd($M);
        $cubo = cube::create($request->all());
        $id1 = DB::table('cubes')->pluck('id')->last();

        $T = DB::table('cubes')->pluck('T')->last();
        $N = DB::table('cubes')->pluck('N')->last();
        $M = DB::table('cubes')->pluck('M')->last();
        $W = DB::table('cubes')->pluck('W')->last();
        $V1 = DB::table('cubes')->pluck('v1')->last();

        if ($V1 > $N){
            $borrar = cube::find($id1)->delete();
            return back()->with('info', 'La coordenada no esta dentro del rango de la matriz, recuerde que V1 y V2 deben ser menores que N, INGRESE NUEVOS VALORES');
        }
        else{
            return back()->with('info', 'Valores del cubo ingresados con exito, ahora oprima FUNCIONAR PARA VER LAS RESPUESTAS');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}