<!DOCTYPE html>
<html>
<head>
<title> Compras </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#tabla').DataTable();
    } );
  </script> 
</head>
<body>

<div class="container">
<section class="content-header">
	<h1>
		Compras
	</h1>
</section>
    <div class="table-responsive">
        <table id ="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th># Detalle Compra</th>
                    <th># Compra</th>
                    <th># Categoria</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($compras as $compra)
                <tr>
                    <td>{{ $compra->id }}</td>
                    <td>{{ $compra['Id_Compra'] }}</td>
                    <td>{{ $compra['Id_Categoria'] }}</td>
                    <td>{{ $compra['Nombre'] }}</td>
                    <td>{{ $compra['Precio'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</section>
</body>
</html>


