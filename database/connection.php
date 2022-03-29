
<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "crudpdo";


try{
   
    $pdo = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com banco de dados realizado com sucesso!";
}  catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}



?>