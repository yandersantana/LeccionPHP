<?php

class Notas
{
    private $id_nota;
    private $nombre;
    private $parcial;
    private $finale;
private $mejor;
private $aprueba;
    
     function __construct($id_nota, $nombre, $parcial,$finale, $mejor, $aprueba) {
       $this->idNota = $id_nota;
       $this->nombre = $nombre;
       $this->parcial = $parcial;
$this->finale = $finale;
       $this->mejor = $mejor;
$this->aprueba = $aprueba;
     }
    
     function setIdNota($id_nota){
       $this->idNota = $id_nota;
     } 
     function getIdNota(){
       return $this->idNota;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
     function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     }

     function setFinal($finale){
       $this-> finale = $finale;
     } 
     function getFinal(){
       return $this->finale;
     }

     function setMejor($mejor){
       $this-> mejor = $mejor;
     } 
     function getMejor(){
       return $this->mejor;
     }

     function setAprueba($aprueba){
       $this-> finale = $aprueba;
     } 
     function getAprueba(){
       return $this->aprueba;
     }
    
}

?> 
