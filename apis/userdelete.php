<?php


// La respuesta del PHP será en formato JSON
header('Content-Type: application/json; charset=utf-8');

if ($_GET) {

    try {

        include_once('conexion.php');

        $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

        if ($user_id){
            $query = "DELETE FROM usuarios WHERE id = $user_id";
            $accion = "elimino";
        }

        $result = $connect->query($query);

        $response = [
            'success' => false,
            'message' => ''
        ];

        if ($result === TRUE) {
            $response['success'] = true;
            $response['message'] = "El usuario '$user_name' se $accion con éxito";
    
            echo json_encode($response);
        } else {
            $response['message'] = mysqli_error($connect);

            echo json_encode($response);
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    echo 'SIN ACCESO A LA API';
}
