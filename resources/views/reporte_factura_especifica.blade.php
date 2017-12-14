<style type="text/css">
  

body {font-family: Arial, Helvetica, sans-serif;}
table { font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
 font-size: 16px; margin: 0px; text-align: left; }
th { font-size: 16px; font-weight: normal; padding: 1px; background: #b9c9fe;
 border-top: 4px solid #aabcfe; border-bottom: 1px solid #fff;
 color: #039;
}
td { padding: 8px; background: #e8edff; border-bottom: 1px solid #fff;
 color: #669; border-top: 1px solid transparent;
}
tr:hover td { background: #d0dafd; color: #339; }


</style>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FACTURAS SISTEMA</title>

</head>
<body>

@foreach($factura_especifica as $factura_especifica)
<h1>INFORMACION FACTURA N° {{$factura_especifica->numero_factura}}</h1>

<h4>Datos proveedor</h4>
  <TABLE BORDER class="tabla_1">
 

 
  <TR>
    <TD>Numero factura: </TD> <TD>{{$factura_especifica->numero_factura}}</TD>
  </TR>
  <TR>
    <TD>Nombre Proveedor: </TD> <TD>{{$factura_especifica->nombre_proveedor}}</TD> 
  </TR>
  <TR>
    <TD>Rut Proveedor: </TD> <TD>{{$factura_especifica->rut_proveedor}}</TD> 
  </TR>
  <TR>
    <TD>Fecha emision: </TD> <TD>{{$factura_especifica->fecha_emision}}</TD> 
  </TR>
   
</TABLE>


  <br><br>

  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Detalle de factura</h3>
      </div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>

            <th >Id </th>
            <th> Material</th>
           <th> Codigo</th>
          <th> Cantidad</th>
          <th> Obra asociada</th>

          </thead>
          <tbody>
            <tr>
    
            </tr>
          @foreach($mates as $mates)
            <tr>
                <td>{{$mates->id}}</td>
                <td>{{$mates->nombre}}</td>
                <td>{{$mates->codigo}}</td>

                <td >{{$mates->cantidad}}</td>
                <td >{{$mates->nombre_obra}}</td>
             
               
            

            </tr>
            @endforeach
           
        
          </tbody>
        </table>
        
      </div><!-- /.box-body -->
<br><br>

<TABLE BORDER class="tabla_3">
  <TR>
    <TD>Tipo pago: </TD> <TD>{{$factura_especifica->tipo_pago}}</TD>
  </TR>
  <TR>
    <TD>NETO: </TD> <TD>{{$factura_especifica->neto}}</TD> 
  </TR>
  <TR>
    <TD>IVA: </TD> <TD>{{$factura_especifica->iva}}</TD> 
  </TR>
  <TR>
    <TD>TOTAL: </TD> <TD>{{$factura_especifica->valor_total}}</TD> 
  </TR>
</TABLE>

@endforeach


      <div class="box-footer clearfix">

      </div>
    </div>

  </div>



</body>
</html>


