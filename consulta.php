<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener el parámetro 'nombre' enviado por GET
    $nombre = $_GET['nombre'];

    // Validar que el parámetro 'nombre' no esté vacío
    if (empty($nombre)) {
        http_response_code(400); // Solicitud incorrecta
        echo json_encode("Debe ingresar un nombre");
        exit;
    }

    // Realizar alguna acción con el nombre recibido
    $saludo = "¡Hola, $nombre! Esta es una respuesta desde PHP";

    // Devolver la respuesta en formato JSON
    echo json_encode($saludo);
} else {
    http_response_code(405); // Método no permitido
    echo json_encode("Método no permitido");
}
?>
