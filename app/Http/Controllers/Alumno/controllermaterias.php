<?php

namespace App\Http\Controllers\Alumno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\materias;
use App\Http\Requests\materias as materiarequest;

class controllermaterias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $materia;
    public function _construct(materias $materia){
        $this->materia= $materia;
    }

    public function index()
    {
        $materias = materias::all();
        //return $materias;
        return response()->json(['materias'=> $materias]);

        //
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
    public function store(materiaRequests $request){
        $materia = $this->materia->create($request->all());
        return response()->json($materia);
        //return response()->json(new materiaRequests($materia),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $materia = materias::find($id);
        return $materia;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(materiasRequest $request,materias $materia)
    {
        //
        $materia->update($requets->all());
        return response()->json($materia);
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
        $materia = materias:: delete();
        return response()->json('El registro fue eliminado');
    }
}
