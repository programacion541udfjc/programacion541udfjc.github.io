<?php
	$a = $_POST['num_a'];
	$b = $_POST['num_b'];
	$c = $_POST['num_c'];

	function resolver_ecuacion($a, $b, $c)
	{
		$auxiliar = (pow($b,2)-(4 * $a * $c));
		if($auxiliar >= 0)
		{
			$X1= ((-$b + sqrt($auxiliar))/(2 * $a));
			$X2= ((-$b - sqrt($auxiliar))/(2 * $a));
			
			if($X1 == $X2)
			{
				echo "ecuacion con solución única x: ".$X1."<br>";
			}
			else
			{
				echo "Soluciones de la ecuación: <br> x1: ".$X1."<br>x2: ".$X2."<br>";
			}
		}
		else
		{
			echo "Ecuación con raices imaginarias";
		}
	}

	if($a == '0')
	{
		echo "Error de division por cero";
	}
	elseif($b == '0' || $c == '0')
	{
		resolver_ecuacion($a, $b, $c);
	}
	elseif(empty($a)||empty($b)||empty($c))
	{
		echo "Llene todos los campos";
	}
	else
	{
		resolver_ecuacion($a, $b, $c);
	}






?>