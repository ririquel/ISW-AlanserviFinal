
<style type="text/css">
  

body {font-family: Arial, Helvetica, sans-serif;}
table { font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
 font-size: 16px; margin: 1px; width: 750px;
 text-align: left; border-collapse: collapse; }
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


  <br><br>

  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">FACTURAS INGRESADAS A LA FECHA</h3>
      </div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>

            <th WIDTH="5" > N°Factura </th>
            <th> Nombre Proveedor</th>
            <th> Rut Proveedor</th>
            <th WIDTH="80" > Fecha emision</th>
            <th> Neto</th>
            <th WIDTH="30"> Iva</th>
            <th> Valor Total</th>
            <th> Forma de Pago</th>
           

          </thead>
          <tbody>
            <tr>

            </tr>

           
        @foreach($facturas as $factura)
            <tr>
                <td WIDTH="5""> {{$factura->numero_factura}}</td>
                <td>{{$factura->nombre_proveedor}}</td>
                <td>{{$factura->rut_proveedor}}</td>

                <td WIDTH="80" >{{$factura->fecha_emision}}</td>
                <td ALIGN="right">${{number_format($factura->neto, 0, '', '.')}}</td>
                <td ALIGN="right" WIDTH="30">${{number_format($factura->iva, 0, '', '.')}}</td>
                <td ALIGN="right">${{number_format($factura->valor_total, 0, '', '.')}}</td>
                <td>{{$factura->tipo_pago}}</td>
               
            

            </tr>
            @endforeach
          </tbody>
        </table>
        
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">

      </div>
    </div>

  </div>



</body>
</html>


