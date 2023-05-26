<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];

    // Validar y limpiar los datos (puedes agregar más validaciones según tus necesidades)

    // Guardar el chisme en un archivo
    $archivo = "chismes.txt";
    $contenido = "Título: " . $titulo . "\n" . "Descripción: " . $descripcion . "\n\n";
    file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX);

    // Redireccionar al usuario a la página de chismes
    header("Location: pagina_de_chismes.html");
    exit();
}
?>
