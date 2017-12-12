@extends('layouts.app')

@section('title','Crear Factura')


@section('content')
    {!! Form::open(['route' => 'material.store','class'=>'form-horizontal']) !!}

    <div class="container-fluid">
        <div class="from--group">
            <fieldset>

                <!-- Text input-->
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre Material',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-5">
                        {!! Form::text('nombre', null,['class'=>'form-control']) !!}
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    {!! Form::label('codigo', 'Codigo',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-5">
                        {!! Form::text('codigo', null,['class'=>'form-control']) !!}
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    {!! Form::label('cantidad', 'Cantidad',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-5">
                        {!! Form::number('cantidad', null,['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="from--group">
                    {!! Form::label('obra_id','Obra asociada') !!}
                    {!! Form::select('obra_id', $bras, null, ['class' => 'form-control', 'placeholder' => 'seleccione la obra asociada', 'required']) !!}
                </div>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for=""></label>
                    <div class="col-md-5">
                        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}

                    </div>

                </div>


            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
