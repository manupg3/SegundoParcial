<?php
  if(!isset($_SESSION["perfil"])){
     ?>
     <table border="5" height="20%" >
     <form  id="frmLog">
   <tr>
     <td>USUARIO:<input type="text" placeholder="USUARIO" id="user"/></td>
     </tr>
     <tr><td> CONTRASEÑA:<input type="text" placeholder="CONTRASEÑA" id="pass"/></td>
     </tr>
     <tr><td>
     		<input type="submit" value="INICIAR SESION" onclick="Validar();" />
     	</td>
      </tr>
      	</form>
     <?php
       }
       else{
     ?>	
     <a ><?php var_dump($_SESSION["user"]);?></a>
      <button type="submit" onclick="MostrarIngreso();">INGRESO DE PRODUCTOS</button>	 
      <button type="button" onclick="Deslogearse();" >DESLOGEARSE</button>	 
     	<?php
          }
     	?>