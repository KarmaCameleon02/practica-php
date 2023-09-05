<?php
    include('conexion.php');
    echo "entro a storephp";
    if(!empty($_POST['nombre'])&&!empty($_POST['correo'])){
        echo "intenta insertar";
        
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $genero = $_POST['genero'];
        $contrasenia = $_POST['contrasenia'];
        $comentarios = $_POST['comentarios'];
        $ciudad = $_POST['ciudad'];
        if(isset($_POST['contratacion'])){
            $contratacion = "SI";
          }
          else{
            $contratacion = "NO";
          }
          echo "inserted successfully";
          $sql = "INSERT INTO usuario (nombre, correo, genero, contraseña, comentario, ciudad, contratacion) 
          VALUES (
            '$nombre', '$correo', '$genero',
            '$contrasenia', '$comentarios','$ciudad',
            '$contratacion')";
        echo "inserted successfully2";
        $conn->exec($sql);
        header('location: formulario.php');
    }
?>