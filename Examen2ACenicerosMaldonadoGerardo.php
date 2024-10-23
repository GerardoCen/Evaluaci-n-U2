<?php
/* CBTIS 89
Programa que almacena un precio en un arreglo que despues calcula un descuento de IVA a todos los elementos
Examen 
Ceniceros Maldonado Gerardo 
Véronica Martínez Anaya
3A Programación Matutino
*/
$ArrayPrecios = array(400, 200, 100, 70, 50);

$ArrayIVA = array();
foreach ($ArrayaPrecios as $precio) {
	$ArrayIVA[] = $precio * 0.16;
}
$ArraySubtotal = array ();
foreach ($ArrayPrecios => precios) {
	$ArraySubtotal as $subtotal * 0.10;
	$ArrayTotal[] = $subtotal - $ArrayDescuentos;
}
echo "ARREGLO PRECIOS: "
echo "Arreglo IVA:"
echo "Arreglo Subtotal"
echo "Arreglo Descuentos"
echo "Total"