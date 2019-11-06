<?php
//conexion BD
$mysqli = new mysqli("localhost", "root") or die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($mysqli,"mysql") or die(mysqli_error($mysqli));
?>
<h2>Añadir un comentario</h2>
<form method="POST" action="practica5.php">
    <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre" /><br>
    <label for="comentario">Comentario:</label><input type="text" name="comentario" id="comentario"><br>
    <label>Rating:</label><select name="rating">
    <?php
        for($c=1;$c<=5;$c++){
            echo "<option value='".$c."'>".$c."</option>";
        }
        ?>
     </select>
     <?php
     echo "<input type='hidden' value=".$_GET['id']." name='id'>"
     ?>
     <br/>
    <input type="submit" value="Añadir" name='submit'><br>
    <h2>Calcular suma</h2>
    <label for="n1">Numero 1</label><input type="number" name="n1" id="n1"><br>
    <label for="n2">Numero 1</label><input type="number" name="n2" id="n2"><br>
    <label for="n3">Numero 1</label><input type="number" name="n3" id="n3"><br>
    <input type="submit" value="calcular" name='submit'>
</form>
