<?php
  class Producto{
  public $numero;
  public $pnombre;
  public $descripcion;
  public $codigo;
     public function __construct(){}
   public function SetNum($valor){ 
   	$this->$numero=$valor;
   } 
  public function SetNom($valor){ 
   	$this->$nombre=$valor;
   }  
   public function SetDesc($valor){ 
   	$this->$descripcion=$valor;
   } 
    public function SetCod($valor){ 
   	$this->$codigo=$valor;
   } 

  public function insertar(){
     $acceso=Acceso::DameAcceso();
     $consulta=$acceso->RetornarConsulta("INSERT INTO productos (numero,pnombre,descripcion,codigo) 
     value(:numero,:pnombre,:descripcion,:codigo)");
     $consulta->bindValue(":numero",$this->numero);
     $consulta->bindValue(":pnombre",$this->pnombre);
     $consulta->bindValue(":descripcion",$this->descripcion);
     $consulta->bindValue(":codigo",$this->codigo);
     $consulta->execute();
  }
   
   public static function TraerProductos(){
     $acceso=Acceso::DameAcceso();
     $consulta=$acceso->RetornarConsulta("SELECT numero,pnombre,descripcion,codigo FROM productos");
     $consulta->execute();
     $productos=$consulta->fetchall(PDO::FETCH_CLASS,'Producto');
     return $productos;    

   }
     public function Modificar(){
     $acceso=Acceso::DameAcceso();
     $consulta=$acceso->RetornarConsulta("UPDATE productos SET pnombre=:pnombre,descripcion=:descripcion,codigo=:codigo
      WHERE numero=:numero");
     $consulta->bindValue(":numero",$this->numero);
     $consulta->bindValue(":pnombre",$this->pnombre);
     $consulta->bindValue(":descripcion",$this->descripcion);
     $consulta->bindValue(":codigo",$this->codigo);
     $consulta->execute();      
     }
   public static function TraerUnProducto($numero){
     $acceso=Acceso::DameAcceso();
     $consulta=$acceso->RetornarConsulta("select numero,pnombre as pnombre,descripcion as descripcion,codigo as codigo
      from productos where numero=$numero");
     $consulta->execute();
     $ProdMod=$consulta->fetchObject('producto');
     return $ProdMod;
   }
   public static function Borrar($numero){
     $acceso=Acceso::DameAcceso();
     $consulta=$acceso->RetornarConsulta("DELETE FROM productos WHERE numero=:numero");
     $consulta->bindValue(":numero",$numero);
    $consulta->execute();

  }
}
?>