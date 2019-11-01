<?php
try {
    //Primer paso conectarnos a MYSQL
    $db = new PDO('mysql:host=localhost;dbname=movies_db', 'root', '123456',
    //esto muestra los errores con nombres de tablas y campos
    [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //esto codifica para que no tenga errores de acentos
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
        );
} catch (PDOException $e) {
    echo 'No se pudo conectar a la BD';
}
    //segundo crear la sentencia sql
    $sql = 'SELECT * FROM movies';
    //tercero decirle a la conexion que prepare la sentencia SQL
    $stmt = $db->prepare($sql);
    //cuarto ejecutar la sentencia
    $stmt->execute();
    //quinto obtener los datos de esa sentencia
    $datos = $stmt->fetchAll();
    var_dump($datos);


 ?>
