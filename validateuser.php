<?php
$code= $_GET["CODE"];
$pass= md5($_GET["PASS"]);
$db='';
$host='';
$usuario='';
$contraseña='';
try{
   $mbd = new PDO('mysql:host='.$host.';dbname='.$db, $usuario, $contraseña);
   foreach($mbd->query("SELECT * from User where Code='".$code."' and Password='".$pass."'") as $fila){
        echo json_encode($fila);
   }
   $mbd = null;
}catch(PDOException $e){
   print "Error: " . $e->getMessage() . "<br/>";
   die();
}
?>


