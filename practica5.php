<?php
$mysqli = new mysqli("localhost", "root") or die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($mysqli,"mysql") or die(mysqli_error($mysqli));

if($_POST['submit']=="Añadir"){
    $query="Insert into comments (videojuego_id,date,persona,coment,rating) values (".$_POST['id'].",'".date('Y')."/".date('m')."/".date('d')."','".$_POST['nombre']."',
    '".$_POST['comentario']."',".$_POST['rating'].")";
    echo $query;
    if(mysqli_query($mysqli,$query)){
        echo "Comentario Añadido<br>";
        echo "<a href='practica4-1.php?id=".$_POST['id']."'>Volver</a>";
    }else{
        echo "Error<br>";
        echo "<a href='practica4-1.php?id=".$_POST['id']."'>Volver</a>";
    }

}elseif($_POST['submit']=="calcular"){
    echo "<h1>Calculo de la Suma</h1>";
    $suma=$_POST['n2']+$_POST['n3']+$_POST['n1'];
    echo "La suma de ".$_POST['n1']." ".$_POST['n2']." ".$_POST['n3']." es: ".$suma;
    echo "<a href='practica4-1.php?id=".$_POST['id']."'>Volver</a>";
    
}elseif($_POST['submit']=="multiplicar"){
    echo "<h1>Tabla de multiplicar</h1>";
    for($c=0;$c<10;$c++){
        echo $_POST['selector']."x".$c."=".($_POST['selector']*$c) ." <br>";
    }
}

echo "<form method='POST' action='practica5.php'>
    <select name='selector'>
        <option value='".$_POST['n1']."'>".$_POST['n1']."</option>
        <option value='".$_POST['n2']."'>".$_POST['n2']."</option>
        <option value='".$_POST['n3']."'>".$_POST['n3']."</option>
    </select>
    <input type='submit' value='multiplicar' name='submit'>
</form>";