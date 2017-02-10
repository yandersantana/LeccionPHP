<?php
include_once("NotasCollector.php");

$NotasCollectorObj = new NotasCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clase notas</title>
    <link rel="stylesheet" href="../estilo.css">
          
</head>
<body>
   
    <h1>TABLA Notas</h1>
    <table>
        <tr>  
	    <th>ID</th>  
            <th>NOMBRE</th>
            <th>PARCIAL</th>
            <th>FINAL</th>
            <th>MEJORAMIENTO</th>
            <th>APRUEBA</th>
        </tr>
        <?php
            foreach ($NotasCollectorObj->showNotas() as $c){
            echo "<tr>";
            echo "<td>" . $c->getIdNota() . "</td>";
            echo "<td>" . $c->getNombre() . "</td>"; 
            echo "<td>" . $c->getParcial() . "</td>";               
            echo "<td>" . $c->getFinal() . "</td>";   
	    echo "<td>" . $c->getMejor() . "</td>";
	    echo "<td>" . $c->getAprueba() . "</td>";  
		$nota1=getParcial();
		$nota2=getFinal();
		$nota3=getMejor();  

		$resultado=$NotasCollectorObj->validarNotas($nota1,$nota2,$nota3);
	  echo "<td>" . $c->$resultado . "</td>";  
	

        ?>

    </table>

   
 
</body>
</html>
