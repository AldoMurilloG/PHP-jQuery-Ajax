<?php
require("../../database/connection.php");

//Obtener el ID del producto a actualizar y los nuevos datos
$id = $_GET['id'];

$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

//actualizar el producto en la base de datos
$sql = "UPDATE products SET name='$name', price=$price, stock=$stock WHERE id=$id";

if($conn->query($sql)) {
    $response = array(
        'status'=> true,
        'code' => 204, //204 "Resource updated susccesfully"- la solicitud se cumplio y el servidor actualizo el recurso
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

echo json_encode($response);
?>