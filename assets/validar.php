<?php

$servidor="localhost";
$usuario="root";
$clave="";
$baseDatos=formulario3;

$enlace = mysli_connect($servidor,$usuario;$clave,baseDatos);

if(!$enlace){
  echo "Erro en la conexion del servidor"
}



?>













<?php 

if(isset($_POST['Enviar'])){
  
  $nombre =$_POST["nombre"];
  $apellido =$_POST["apellido"];
  $telefono =$_POST["telefono"];
  $email =$_POST["email"];
  $asunto =$_POST["asunto"];

  $insertarDatos = "INSERT INTO datos value   ('$nombre',
                                               '$email',
                                               '$telefono',
                                               '$asunto')";

$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

if(!ejecutarInsertar){
 
 echo "Error en la linea de sql"; 
 }
}



?>