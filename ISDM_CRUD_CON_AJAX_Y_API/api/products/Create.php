<?php

require("../..database/connection.php");

//obtener los datos del nuevo producto
$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

//insertar el nuevo producto en la base de datos
$sql = "INSERT INTO products (name, price, stock) VALUES ('$name', $price, $stock)";

if($conn->query($sql)) {
    $response = array(
        'status'=> true,
        'code' => 201, //201 "created"- la solicitud se cumplio y el servidor creo uno nuevo
        'message' =>'',
        'data' => null
    );
} else {
    $response = array(
        'status' =>false,
        'code' => 500, //Error en el servidor
        'message' => 'Error al crear el producto: ' . $conn->error,
        'data' => null
    );
}
?>