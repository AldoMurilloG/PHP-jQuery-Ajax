<?php
require("../..database/connection.php");

//Obtener el ID del producto a eliminar
$id = $_POST['id'];

//Eliminar el producto de la base de datos
$sql="DELETE FROM products WHERE id=$id";

if($conn->query($sql)) {
    $response =array (
        'status' => true,
        'code' => 204, //204 "No content" - El servidor cumplia con la solicitud pero no devolvera ningun contenido.
        'message' => 'Producto eliminado existosamente.',
        'data' => null
    );
} else {
    $response = array(
        'status' =>false,
        'code' => 500, //Error en el servidor
        'message' => 'Error al eliminar el producto: ' . $conn->error,
        'data' => null
    );
}

echo json_encode($response);
?>