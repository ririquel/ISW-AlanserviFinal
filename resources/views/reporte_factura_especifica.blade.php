<style type="text/css">
  

body {font-family: Arial, Helvetica, sans-serif;}
table { font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
 font-size: 16px; margin: 1px; text-align: left; }
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


<h1>INFORMACION FACTURA N°</h1>

<h4>Datos proveedor</h4>
  <TABLE BORDER class="tabla_1">
  <TR>
    <TD>Numero factura: </TD> <TD>aca va el numero de factura</TD>
  </TR>
  <TR>
    <TD>Nombre Proveedor: </TD> <TD>aca va el nombre del proveedor</TD> 
  </TR>
  <TR>
    <TD>Rut Proveedor: </TD> <TD>aca va el rut del proveedor</TD> 
  </TR>
  <TR>
    <TD>Fecha emision: </TD> <TD>aca va la fecha de emision</TD> 
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
          <th> obra asociada</th>

          </thead>
          <tbody>
            <tr>

            </tr>

           
        @foreach($facturas as $factura)
            <tr>
                <td > aca va el id</td>
                <td>aca el material</td>
                <td>aca va el codigo</td>
                <td>aca va la cantidad</td>
                <td>aca va la obra asociada</td>
            

            </tr>
            @endforeach
          </tbody>
        </table>
        
      </div><!-- /.box-body -->
<br><br>

<TABLE BORDER class="tabla_3">
  <TR>
    <TD>Tipo pago: </TD> <TD>aca va el tipo de pago</TD>
  </TR>
  <TR>
    <TD>NETO: </TD> <TD>aca va el netor</TD> 
  </TR>
  <TR>
    <TD>IVA: </TD> <TD>aca va el iva</TD> 
  </TR>
  <TR>
    <TD>TOTAL: </TD> <TD>aca va la el total</TD> 
  </TR>
</TABLE>




      <div class="box-footer clearfix">

      </div>
    </div>

  </div>



</body>
</html>


