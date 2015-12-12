<?php
   session_start();
   require_once"AccesoAdatos.php";
   require_once"ClaseProducto.php";
   $queHacer=$_POST["quehacer"];
    
   switch ($queHacer) {
   	case 'MostrarLogin':
   	     include("login.php");
   		break;
   	case 'MostrarIngreso':
   	     include("ingreso.php");
   		break;
   	case 'ProcesarDatos':
        include("procesar.php");
   		break;
        case 'Borrar':
        include("baja.php");
        include("listar.php");
      break;
   	     case 'MostrarLista':
           include("listar.php");  
   	     break; 
   	     case 'TraerProducto':
          $prod=Producto::TraerUnProducto($_POST["param"]);
          echo json_encode($prod);
   	     break;
   	default:
   		# code...
   		break;
   }

   
?>