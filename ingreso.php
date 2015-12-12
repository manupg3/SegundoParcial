<?php 
  
  if($_SESSION["perfil"]=="administrador" || $_SESSION["perfil"]=="usuariomedio"){ 
  $l=$_SESSION["user"];
?>
 <table border="7" align="center" width="30%">
<th colspan="5"><a>BIENVENIDO <?php echo $l;?></a></th>
	<tr >
    <form onsubmit="return false;" id="frmIngeso">
   <td>NUMERO: <input type="text" name="txtNum" id="numero" /></td>
	 <td>NOMBRE: <input type="text" name="txtNom" id="nombre" required=""/></td>
	<td> DESCRIPCION: <input type="text" name="txtDesc" id="descripcion" required=""/></td>
	<td> CODIGO: <input type="text" name="txtCod" id="codigo" required=""/></td>
	    <td><input type="submit" name="ingresar" id="ingresar" value="GUARDAR" onclick="ProcesarDatos();"/></td>
	</tr>
  </form>
</table>
	 <?php
    } else{  
      ?> 
      <a>NO TIENE LOS PRIVILEGIOS ADECUADOS PARA ESTA FUNCION</a> 
      <button type="submit" onclick="MostrarLista();">A GRILLA</button>	 
      <?php
          }
     	?>