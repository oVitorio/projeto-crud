<?php
include_once "database\connection.php";

//  $res = $pdo-> prepare("INSERT INTO PESSOA (NOME, TELEFONE, EMAIL)  
//                           VALUES (:NOME , :TELEFONE, :EMAIL)");
 
//  $res -> bindValue(":NOME","TESTE");
//  $res -> bindValue(":TELEFONE","00000000000");
//  $res -> bindValue(":EMAIL","TESTE@GMAIL.COM"); 
//  $res -> execute();


//---------------------------------DELETE-----------------------
//   $del = $pdo-> prepare("DELETE FROM PESSOA WHERE ID = :ID");
//   $ID = 3;
//   $del -> bindValue(":ID", $ID);
//   $del -> execute();


//-----------SELECT--------------------------------------

$SELECT = $pdo -> prepare("SELECT * FROM PESSOA WHERE ID = :ID" );
$SELECT-> bindValue(":ID", 1);
$SELECT -> execute();
$RESULTADO_SELECT = $SELECT -> fetch(PDO::FETCH_ASSOC);
 foreach($RESULTADO_SELECT as $key => $values){
     echo $key.": ".$values."<br>";
 }
?>