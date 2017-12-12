<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Obra;
use Laracasts\Flash\Flash;
use App\Http\Controllers;
use App\Http\Requests\ObraRequest;


class ObrasController extends Controller
{
    public function index()
    {
        $obras = Obra::orderBy('id', 'ASC')->paginate(0);
        return view('obras.index')->with('obras', $obras);
    }

    public function create()
    {
        return view('obras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obra = new Obra($request->all());
        $obra->save();
        Flash::success('La obra a sido ingresada con exito');
        return redirect()->route('obras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obras = Obra::find($id);
        $obras->delete();
        Flash::error('Obra eliminada');
        return redirect()->route('obras.index');
    }
}
