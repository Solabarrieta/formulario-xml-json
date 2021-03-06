<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <script src='../js/ShowImageInForm.js'></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
    <div class="input-container">
      <label for="correo">Introduce un correo de UPV/EHU: </label>
      <input type ="text" id="email" name="correo">  
      <p id="textEmail"></p>
      </div>
      
      <div class="input-container">
      <label for="enunciado">Enunciado de la pregunta: </label>
      <input type="text" name="enunciado" id="enunciado">
      <p id="textEnunciado"></p>
      </div>

      <div class="input-container">
      <label for="correcta">Respuesta correcta: </label>
      <input type="text" name="correcta" id="correcta">
      <p id="textCorrecta"></p>
      </div>

      <div class="input-container">
      <label for="incorrecta">Respuesta incorrecta: </label>
      <input type="text" name="incorrecta" id="incorrecta">
      <p id="textIncorrecta"></p>
      </div>
      
      <div class="input-container">
      <label for="incorrecta1">Respuesta incorrecta: </label>
      <input type="text" name="incorrecta1" id="incorrecta1">
      <p id="textIncorrecta1"></p>
      </div>
      
      <div class="input-container">
      <label for="incorrecta2">Respuesta incorrecta: </label>
      <input type="text" name="incorrecta2"id="incorrecta2">
      <p id="textIncorrecta2"></p>
      </div>

      <div class="input-container">
      <label for="complejidad">Complejidad</label>
      <select name="complejidad" id="complejidad">
        <option value="1">Baja</option>
        <option value="2">Media</option>
        <option value="3">Alta</option>
      </select>
      <p id="textComplejidad"></p>
      </div>
      
      <div class="input-container">
      <label for="tema">Tema(Subject)*:</label>
      <input type="text" name="tema" id="tema">
      <p id="textTema"></p>
      </div>


      <div class="input-container" id="div-image">
        <input accept="image/png,image/jpeg" type="file" id="inputFile" onclick="previewImage()">
        <p id="textFile"></p>

      </div>
      
      <button type='button' id="boton" onclick="comprobarCamposVacios()">Crear pregunta</button>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
