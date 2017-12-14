<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Obra;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index(){
 return view('reportes.index');
    }


      public function crearPDF($pdf,$tipo)
    {
       


        
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_todas_facturas($tipo){


            $facturas = Factura::paginate(5);
        $view =  \View::make('reporte_todas_facturas')->with('facturas',$facturas)->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);



     
      return $this->crearPDF($pdf,$tipo);

    }

    public function crear_reporte_todas_obras($tipo){

        $obra = Obra::paginate(5);
        $view =  \View::make('reporte_todas_obras')->with('obra',$obra)->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);


     
     return $this->crearPDF($pdf,$tipo);

    }








    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
}