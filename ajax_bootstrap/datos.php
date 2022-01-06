<?php
    

echo "<b>HOLA ".$_POST['Nombre']."  ".$_POST['Apellido']."<br> TU EMAIL ES: "
.$_POST['Email']."<br> TU CIUDAD ES: ".$_POST['Ciudad']."<br> TU ESTADO ES: "
.$_POST['Estado']."<br> TU TELEFONO ES: ".$_POST['Telefono']."</b>";

  $conexion=mysqli_connect('localhost','root','','usuariosajax');
  
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$email=$_POST['Email'];
$ciudad=$_POST['Ciudad'];
$estado=$_POST['Estado'];
$telefono=$_POST['Telefono'];

      $sql="INSERT into usuario (Nombre,Apellido,Email,Ciudad,Estado,Telefono)
      values ('$nombre','$apellido','$email','$ciudad','$estado','$telefono')";
mysqli_query($conexion,$sql);
?>