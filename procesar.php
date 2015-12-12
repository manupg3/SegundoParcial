<?php
$band;
 $productos=Producto::TraerProductos();
   $prod=new Producto();
   $prod->numero=$_POST["varnumero"];
   $prod->pnombre=$_POST["varnombre"];
   $prod->descripcion=$_POST["vardesc"];
   $prod->codigo=$_POST["varcod"];
 
foreach ($productos as $p) {
  if($p->numero==$prod->numero){
     $prod->Modificar();
     $band="mod";
  }
}
  if(!isset($band)){
     $prod->insertar();
  }


?>