function MostrarLogin(){
   var f=$.ajax({url:"nexo.php",type:"post",data:{quehacer:"MostrarLogin"}});
   f.done(function(retorno){
    $("#principal").html(retorno);
   });
   f.fail(function(retorno){
    $("#informe").html("CORRECTO");
   });
}
 function Deslogearse(){
  var f=$.ajax({url:"deslogear.php",type:"post"});
   f.done(function(retorno){
    $("#btnLog").html("MOSTRAR LOGIN");
    MostrarLogin();

   });
   f.fail(function(retorno){
    $("#informe").html("CORRECTO");
   });	
 }
function Validar(){
	  var usuario=$("#user").val();
	  var pasword=$("#pass").val();
  
  var f=$.ajax({url:"ValidarUsuario.php",type:"post",data:{Usuario:usuario,Pasword:pasword}});
   f.done(function(retorno){
    MostrarIngreso();
    $("#btnLog").html("IR A SALIR SESSION");
   	
   });
 f.fail(function(retorno){
    $("#informe").html("ERROR");    
   });
}
function MostrarIngreso(){
    // var c=$("#mod").name;
     // alert(c);
     
    
   var f=$.ajax({url:"nexo.php",type:"post",data:{quehacer:"MostrarIngreso"}});
   f.done(function(retorno){ 
      $("#principal").html(retorno);  
   });
 f.fail(function(retorno){
    $("#informe").html("ERROR");    
   });   

}

function ProcesarDatos(){

  
   var numeroo=$("#numero").val();
   var nombree=$("#nombre").val();
   var descripcionn=$("#descripcion").val();
   var codigoo=$("#codigo").val();
   
   var f=$.ajax({url:"nexo.php",type:"post",data:{quehacer:"ProcesarDatos",varnumero:numeroo,varnombre:nombree,vardesc:descripcionn,varcod:codigoo}});
   f.done(function(retorno){ 
      $("#principal").html("DATOS GUARDADOS CON EXITO...");
      $("#informe").html("CORECTO");  
   });
   f.fail(function(retorno){
    $("#informe").html("ERROR");    
   });     

}
function MostrarLista(){
var f=$.ajax({url:"nexo.php",type:"post",data:{quehacer:"MostrarLista"}});
   f.done(function(retorno){ 
      $("#principal").html(retorno);
      $("#informe").html("CORECTO");  
   });
 f.fail(function(retorno){
    $("#informe").html("ERROR");    
   });  
}  
function Modificar(numero){
   
var f=$.ajax({url:"nexo.php",type:"post",data:{quehacer:"TraerProducto",param:numero}});
    MostrarIngreso();
   f.done(function(retorno){ 
   	     var p=JSON.parse(retorno);
   	     $("#numero").val(p.numero);
   	      $("#nombre").val(p.pnombre);
   	      $("#descripcion").val(p.descripcion);
          $("#codigo").val(p.codigo); 
   });
 f.fail(function(retorno){
    $("#informe").html("ERROR");    
   });
}
function Borrar(numero){
var f=$.ajax({url:"nexo.php",type:"post",data:{quehacer:"Borrar",varnum:numero}});
   f.done(function(retorno){ 
      $("#principal").html(retorno);
      $("#informe").html("CORECTO");  
   });
 f.fail(function(retorno){
    $("#informe").html("ERROR");    
   });  
}
