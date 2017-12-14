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
        <h3 class="box-title">OBRAS REGISTRADAS EN SISTEMA</h3>
      </div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
            
            <th> Identificador Obra</th>
            <th> Nombre Obra</th>
            
           

          </thead>
          <tbody>
            <tr>

            </tr>

           
        @foreach($obra as $obra)
            <tr>

              <td>{{$obra->id}}</td>               
            <td>{{$obra->nombre_obra}}</td>

                
               
            

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