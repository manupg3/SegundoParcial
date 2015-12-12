<?php
   
  $productos=Producto::TraerProductos();
 echo "<button type='submit' onclick='MostrarIngreso();'>'INGRESO DE PRODUCTOS'</button>"; 
  	echo "<table border='7' align='center'>";
	echo "<th>".'NUMERO'."</th>";
  	echo "<th>".'NOMBRE'."</th>";
    echo "<th>".'DESCRIPCION'."</th>";
    echo "<th>".'CODIGO'."</th>";
  	if(isset($_SESSION["perfil"]) && $_SESSION["perfil"]=="administrador"){
  	    echo "<th>".'ACCION'."</th>";	
  	}

   foreach ($productos as $p) {
	echo "<tr>";
  	echo "<td>".$p->numero."</td>";
	echo "<td>".$p->pnombre."</td>";
   	echo "<td>".$p->descripcion."</td>";
   	echo "<td>".$p->codigo."</td>";
	if(isset($_SESSION["perfil"]) && $_SESSION["perfil"]=="administrador"){
  	    echo "<td>"."<input type='hidden' id='mod'/>"."<button input='submit' name='modificar' onclick='Modificar($p->numero);'>MODIFICAR</button>"."<button input='submit' onclick='Borrar($p->numero);'>BORRAR</button>"."</td>";	
  	}
      echo "</tr>";
  }

?>