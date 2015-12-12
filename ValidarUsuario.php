<?php
session_start();
   if(!isset($_SESSION["user"])){
     $ret;
     $usuario=$_POST["Usuario"];
     if($_POST["Usuario"]=="MANUEL" && $_POST["Pasword"]=="123"){
   $_SESSION["user"]=$usuario;
      $_SESSION["perfil"]="administrador";
      $ret=$_SESSION["user"];
}
   if($usuario!="MANUEL"){
     try{
       $pdo=new PDO('mysql:host=localhost;dbname=cuentas;charset=utf8','root','',array(PDO::ATTR_EMULATE_PREPARES=>false,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
       $pdo->exec("SET CHARACTER SET utf8");
   }
   catch(PDOExeption $e){
   	 print "error".$e->getMessage();
   	 die();
   }
      $consulta=$pdo->prepare("SELECT nombre,pasword FROM usuariomedio");
       $consulta->execute();
       $retorno=$consulta->fetchall();
        foreach ($retorno as $key => $value) {
        if($usuario==$value["nombre"]){
     	 $_SESSION["user"]=$usuario;
     	 $_SESSION["perfil"]="usuariomedio";
     	 $ret=$_SESSION["perfil"];
        }
        }
   }
}
  else{
  	 $_SESSION["perfil"]="invitado";
  	 $ret="invitado";
  }
  echo $ret;
?>