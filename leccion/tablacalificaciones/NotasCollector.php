<?php

include_once('notas.php');
include_once("../Collector.php");

class NotasCollector extends collector
{
  
  function showNotas() {
    $rows = self::$db->getRows("SELECT * FROM nota");        
    ##echo "linea 1";
    $arrayNota= array();        
    foreach ($rows as $c){
      $aux = new Notas($c{'id_nota'},$c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejor'},$c{'aprueba'});
      array_push($arrayNota, $aux);
    }
    return $arrayNota;        
  }
    
  function validarNotas(){
  
  }
    
}
?>
