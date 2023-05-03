<!DOCTYPE html>

<html>
	<head>
	     <title>
		Calculadora Cuadratica
	     </title>
	     <style type="text/css">
		table,tr,td,th
		{
		 border: 1px solid;
		 text-align: center;
		}
		input
		{
		 text-align: center;
		}
	     </style>
	</head>

	<body>
		<center>	
		<form action="calculadora.php" method="POST">
		     <h2>Calculadora Ecuaci&oacuten Cuadratica </h2>
		     <table>
			   <tr>
				<th><label>A</label></th>
				<th><label>B</label></th>
				<th><label>C</label></th>
			   </tr>
			   <tr>
				<td><input type="text" name="num_a"><label>x<sup>2</sup></label></td>
				<td><input type="text" name="num_b"><label>x</label></td>
				<td><input type="text" name="num_c"></td>
			   </tr>
			   <tr>
				<td colspan="4"><input type="submit" name="enviar" value="calcular"> </td>
			   </tr>
		     </table>			
		</form>
		</center>
	</body>





</html>