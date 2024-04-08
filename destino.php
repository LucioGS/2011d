<html>
<head>
</head>
<body>
<?php

	$la_fecha = $_POST["fecha"];
	$la_fecha_timestamp = strtotime($la_fecha);

	echo "Fecha recibida: $la_fecha </br>";
	echo "Fecha timestamp: $la_fecha_timestamp </br>";
	echo "Fecha normal: " . date("d/m/Y", $la_fecha_timestamp) . "</br>";
	echo "Sólo año: " . date("Y", $la_fecha_timestamp) . "</br>";
	echo "Sólo mes: " . date("m", $la_fecha_timestamp) . "</br>";
	echo "Sólo mes: " . date("M", $la_fecha_timestamp) . "</br>";
	echo "Personalizada 1: " . date("d", $la_fecha_timestamp) . " de " . date("M", $la_fecha_timestamp) . " del año " . date("Y", $la_fecha_timestamp) ."</br>";

	$dia_semana = date("w", $la_fecha_timestamp);
	$mes = date("n", $la_fecha_timestamp);
	
	switch ($dia_semana){
		case 1: $dia_semana_letras = "Lunes"; break;
		case 2: $dia_semana_letras = "Martes"; break;
		case 3: $dia_semana_letras = "Miércoles"; break;
		case 4: $dia_semana_letras = "Jueves"; break;
		case 5: $dia_semana_letras = "Viernes"; break;
		case 6: $dia_semana_letras = "Sábado"; break;
		case 0: $dia_semana_letras = "Domingo"; break;
	}

	switch ($mes){
		case 1: $mes_letras = "Enero"; break;
		case 2: $mes_letras = "Febrero"; break;
		case 3: $mes_letras = "Marzo"; break;
		case 4: $mes_letras = "Abril"; break;
		case 5: $mes_letras = "Mayo"; break;
		case 6: $mes_letras = "Junio"; break;
		case 7: $mes_letras = "Julio"; break;
		case 8: $mes_letras = "Agosto"; break;
		case 9: $mes_letras = "Septiembre"; break;
		case 10: $mes_letras = "Octubre"; break;
		case 11: $mes_letras = "Noviembre"; break;
		case 12: $mes_letras = "Diciembre"; break;
	}

	echo "Personalizada 2: " . $dia_semana_letras . ", " . date("d", $la_fecha_timestamp) . " de " . $mes_letras . " del año " . date("Y", $la_fecha_timestamp) ."</br>";
	
?>
</body>
</html>

