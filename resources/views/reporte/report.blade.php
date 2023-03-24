<!DOCTYPE html>
<html>
<head>
	<title>Informacion del producto y proveedor</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		table {
			border-collapse: collapse;
			margin: 20px 0;
		}

		table th,
		table td {
			padding: 10px;
			border: 1px solid #ccc;
		}

		table th {
			background-color: #f5f5f5;
			font-weight: bold;
		}

		h1 {
			font-size: 24px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h1>Informacion del producto</h1>
	<table>
		<tr>
			<th>Nombre</th>
			<td> {{ $inv->name }} </td>
		</tr>
		<tr>
			<th>Categoria</th>
			<td> {{ $inv->category }} </td>
		</tr>
		<tr>
			<th>Precio</th>
			<td> {{ number_format($inv->price,2) }} </td>
		</tr>
        <tr>
			<th>Cantidad</th>
			<td> {{ $inv->amount }} </td>
		</tr>
		<tr>
			<th>Proveedor</th>
			<td> {{ $prov->name }} </td>
		</tr>
		<tr>
			<th>Contacto del proveedor</th>
			<td>
			 	 {{ $prov->email }} <br>
				  {{ $prov->city }}<br>
				  {{ $prov->address }}<br>
			</td>
		</tr>
	</table>
</body>
</html>
