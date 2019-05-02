<?php 
	//variable numérica
	$numero=5;
	echo "Esto es un número: $numero <br> ";
	var_dump($numero);echo "<br><br>";

	//cadena
	$numero='ITI';
	echo "Esto es una cadena: $numero <br> ";
	var_dump($numero);echo "<br><br>";

	//Boolean
	$numero=true;
	echo "Esto es un boolean: $numero <br> ";
	var_dump($numero);echo "<br><br>";

	//Arreglos unidimensionales
	$colores=array('rojo','verde','amarillo');
	echo "Esto es un array: array:$colores[2] <br> ";
	var_dump($colores);echo "<br><br>";


	//Arreglo con propiedades
	$arregloVerduras=array('verdura1'=>'lechuga','verdura2'=>'cebolla');
	echo "Esto es un número: $arregloVerduras[verdura1] <br> ";
	var_dump($arregloVerduras);echo "<br><br>";

	//Variables tipo objeto
	$frutas=(object)['fruta1'=>'pera','fruta2'=>'manzana'];
	echo "Fruta: $frutas->fruta1 <br><br>";
	var_dump($frutas);echo'<br><br>';


	#########################################################################################################
	#Funciones PHP

	//Función sin parámetros
	function saludo(){
		echo "<br><br>Hola!<br><br>";
	}
	//Función con parámetros
	function adios($nombre){
		echo "<br>Adiós $nombre<br>";
	}
	saludo();
	adios('Luis');
?>