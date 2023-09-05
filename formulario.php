<!DOCTYPE html>
<?php require('conexion.php'); ?>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactame</title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
    <div class="nav"> 
        <a  class="naviAnchor" href="index.html">Index</a>
        <a class="naviAnchor" href="formulario.php">Formulario</a>
    </div>
    <main>
      <h1>Formulario</h1>
      <h2>Rellene los campos siguientes</h2>
      <form action="store.php" method="POST" id="formularioIndex">
        <fieldset>
          <legend>Nombre:</legend>
          <label for="nombre">Nombre:</label>
          <input
            type="text"
            id="nombreForm"
            name="nombre"
            placeholder="Ingrese su nombre"
            required
          />
        </fieldset>
        <fieldset>
          <legend>Correo:</legend>
          <label for="correo">Proporcione su correo:</label>
          <input
            type="email"
            id="correoForm"
            name="correo"
            placeholder="Ingrese su correo"
            required
          />
        </fieldset>
        <fieldset>
          <legend>Genero:</legend>
          <input
            type="radio"
            id="generoHombreForm"
            name="genero"
            value="hombre"
            checked
          />
          <label for="generoHombreForm">Hombre</label>
          <input
            type="radio"
            id="generoMujerForm"
            name="genero"
            value="mujer"
          />
          <label for="generoMujerForm">Mujer</label>
          <input
            type="radio"
            id="generoOtroForm"
            name="genero"
            value="otro"
          />
          <label for="generoOtroForm">Otro</label>
        </fieldset>
        <fieldset>
          <legend>Contraseña:</legend>
          <label for="contrasenia">Proporcione su contraseña:</label>
          <input
            type="password"
            id="contrasenia"
            name="contrasenia"
            required
          />
        </fieldset>
        <fieldset>
          <legend>Comentarios:</legend>
          <label for="comentarios">Proporcione sus comentarios:</label>
          <textarea id="comentariosForm" name="comentarios"></textarea>
        </fieldset>
        <fieldset>
          <legend>Ciudad:</legend>
          <label for="ciudad">Seleccione su ciudad:</label>
          <select id="ciudad" name="ciudad" form="formularioIndex">
            <option value="guadalajara">Guadalajara</option>
            <option value="zapopan">Zapopan</option>
            <option value="tonala">Tonalá</option>
            <option value="otra">Otra</option>
          </select>
        </fieldset>
        <fieldset>
          <legend>¿Te interesa contratarme?</legend>
          <label for="contratacion">Estoy interesado en contratarte</label>
          <input
            type="checkbox"
            id="contratacionForm"
            name="contratacion"
            form="formularioIndex"
          />
        </fieldset>
        <button type="submit">Enviar</button>
      </form>
    </main>
    <div class="footer">
      <section id="contacto">
        <p> <b>Contactame: <a href="mailto:saag1602@gmail.com">saag1602@gmail.com</a></b></p>
      </section>
    </div>
    <?php
                    //------------------------------------//
            //--- Aplicable a Sentencia SELECT ---//
            
            $sql = "SELECT * FROM usuario";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Configura los resultados como un arreglo asociativo
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // $stmt->fetchAll() Obtiene el arreglo asociativo
            echo "<ul>";
            foreach ($stmt->fetchAll() as $row) {
                echo "<li>" . $row['id'] . " - " . $row['nombre'] . " " . $row['correo'] . " " . $row['genero'] . " " . $row['contraseña'] . " " . $row['comentario'] . " "
                . $row['ciudad'] . " " . $row['contratacion'] ."</li>";
            }
            echo "</ul>";
    ?>
  </body>
</html>