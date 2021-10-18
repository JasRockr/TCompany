<?php

// Validacion para evitar accceso sin envío de parametros correcatmente
if(!isset($_POST['nombre'],$_POST['apellido']))
{
    exit("Ha ocurrido un error!");
}

require_once 'config.php';

$nombre = htmlspecialchars( $_POST['nombre'] );
$apellido = htmlspecialchars($_POST['apellido'] );
$email = htmlspecialchars($_POST['email']);

$productos = ($_POST['productos']);

$pedido_camibuso = htmlspecialchars($_POST['pedido_camibuso']);
$pedido_mug = htmlspecialchars($_POST['pedido_mug']);
$regalo = htmlspecialchars($_POST['regalo']);

$total_pedido = htmlspecialchars($_POST['total_pedido']);

$total_pedido = (int) $total_pedido;
$envio = 0;
$total =  $total_pedido + $envio;

/*
echo '<pre>';
var_dump($_POST);
echo '</pre>';
*/

//Enter the payment method name here
$parameters = array(
	// Insert  the payment method here.
	PayUParameters::PAYMENT_METHOD => "PSE",
	// Enter the name of the country here.
	PayUParameters::COUNTRY => PayUCountries::CO,
);
$array=PayUPayments::getPSEBanks($parameters);
$banks=$array->banks;

foreach ($banks as $bank) {
	$bank->description;
	$bank->pseCode;
}

echo var_dump($banks);
