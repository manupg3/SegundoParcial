<?php
   class Acceso{

     private $objetoPDO;
     private static $objetoDeAcceso;

      public function __construct(){
       try{
       	  $this->objetoPDO=new PDO('mysql:host=localhost;dbname=utn_fra;charset=utf8','root','',
            array(PDO::ATTR_EMULATE_PREPARES=> false,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
          $this->objetoPDO->exec("SET CHARACTER SET utf8");
       }
     catch(PDOExeption $e){
      print"error".$e->getMessage();
      die();
       }
      }
     public function RetornarConsulta($sql){
      return $this->objetoPDO->prepare($sql);

     }

     public static function DameAcceso(){
       if(!isset(self::$objetoDeAcceso)){
        self::$objetoDeAcceso=new Acceso();
       }
       return self::$objetoDeAcceso;
     }
     public function __clone(){
       trigger_error('la clonacion no esta permitida',E_USER_ERROR);
     }
   
   }


?> 