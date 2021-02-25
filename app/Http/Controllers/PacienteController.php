<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Genero;
use App\Paciente;
use App\Tipos_documento;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_documentos = Tipos_documento::all();
        $generos = Genero::all();
        $departamentos = Departamento::all();

        return view('pacientes.create', compact('tipos_documentos', 'generos', 'departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();
        $paciente->nombre1 = $request->nombre1;
        $paciente->nombre2 = $request->nombre2;

        $paciente->apellido1 = $request->apellido1;
        $paciente->apellido2 = $request->apellido2;

        $paciente->genero_id = $request->genero_id;
        $paciente->departamento_id = $request->departamento_id;
        $paciente->municipio_id = $request->municipio_id;

        $paciente->tipos_documento_id = $request->tipos_documento_id;
        $paciente->numero_documento = $request->numero_documento;
        $paciente->save();
        return redirect('pacientes')->with('success','Paciente creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        $tipos_documentos = Tipos_documento::all();
        $generos = Genero::all();
        $departamentos = Departamento::all();
        return view('pacientes.edit', compact('tipos_documentos', 'generos', 'departamentos', 'paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $paciente->nombre1 = $request->nombre1;
        $paciente->nombre2 = $request->nombre2;

        $paciente->apellido1 = $request->apellido1;
        $paciente->apellido2 = $request->apellido2;

        $paciente->genero_id = $request->genero_id;
        $paciente->departamento_id = $request->departamento_id;
        $paciente->municipio_id = $request->municipio_id;

        $paciente->tipos_documento_id = $request->tipos_documento_id;
        $paciente->numero_documento = $request->numero_documento;
        $paciente->save();
        return redirect('pacientes')->with('success','Paciente actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect('pacientes')->with('success','Paciente eliminado con exito');


    }
}
