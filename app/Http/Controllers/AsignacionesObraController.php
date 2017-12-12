<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Material;
use App\Obra;
use Illuminate\Http\Request;
use DB;
=======
use Illuminate\Http\Request;

>>>>>>> origin/master
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AsignacionesObraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $obras = Obra::all();
        return view('asignaciones.asignacionobra', ['obras' => $obras]);
=======
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
    public function store(Request $request)
    {
        //
>>>>>>> origin/master
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  int $id
=======
     * @param  int  $id
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        $mates = Material::leftjoin('obras', 'materiales.obra_id', '=', 'obras.id')
            ->select('materiales.id', 'materiales.nombre', 'materiales.codigo', 'materiales.cantidad', 'materiales.precio_unitario')
            ->where('materiales.obra_id', '=', $id)
            ->getQuery()
            ->get();
        $total = Material::leftjoin('obras', 'materiales.obra_id', '=', 'obras.id')
            ->select(DB::raw('SUM(cantidad*precio_unitario) as asd'))
            ->where('materiales.obra_id', '=', $id)
            ->getQuery()
            ->get();
        return view('asignaciones.asignaobra', ['id' => $id, 'mates' => $mates, 'total' => $total]);
    }

=======
        //
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
    public function update(Request $request, $id)
    {
        //
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
>>>>>>> origin/master
}
