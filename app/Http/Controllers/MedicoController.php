<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //TRABAJAREMOS EN EL INDEX
    public function index()
    {
        //
        $data['medico']=Medico::paginate(5);
        return view('medico.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // TRABAJAMOS EN EL CREATE
    public function create()
    {
        //
        return view('medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // TRABAJAMOS EN EL STORE
    public function store(Request $request)
    {
        // Todos los datos que se envien se van a recepcionar
        $medicoData = request()->except('_token');
        Medico::insert($medicoData);
        return response()->json($medicoData); //Vamos a retornar los datos que han sido enviados
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // TRABAJAREMOS EN EL EDIT
    public function edit($id)
    {
        //Recuperar los datos
        $medico=Medico::findOrFail($id);
        return view('medio.edit', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // TRABAJAREMOS EN EL UPDATE
    public function update(Request $request, $id)
    {
        //
        $medicoData=request()->except(['_token', '_method']);
        Medico::where('id', '=', $id)->update($medicoData);
        return redirent('medico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // TRABAJAREMOS EN EL DESTROY
    public function destroy($id)
    {
        //
        Medico::destroy($id);
        return redirect('medico');
    }
}
