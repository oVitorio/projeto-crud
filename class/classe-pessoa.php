<?php

Class Pessoa{ 

    //6funções
    private $PDO;  


    public function __construct($dbname, $host, $user, $pass){
        
         try{
           $this-> PDO = new PDO("mysql:host=$host; dbname=".$dbname, $user, $pass);                         
            //echo "Conexão com banco de dados realizado com sucesso!";
        } catch(PDOException $err){
            echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
        }
    }


    public function selectdados(){
        
        $result_select= array();
        $select = $this -> PDO -> query("SELECT *FROM PESSOA ORDER BY id DESC");   
        $result_select = $select -> fetchALL(PDO:: FETCH_ASSOC); 
        return $result_select;
    }


    public function cadastrarPessoa($nome, $telefone, $email){
        $register= $this ->PDO ->prepare("SELECT id from pessoa where email = :email");
        $register-> bindValue(":e", $email);
        $register-> execute();

        if($register->rowCount() > 0){
            return false;
        }else{
            $register = $this -> PDO -> prepare("INSERT INTO PESSOA (nome, telefone, email) 
                                                         VALUES (:nome, telefone, :email)");
            
            $register ->bindValue(":nome",$nome);
            $register ->bindValue(":telefone",$telefone);
            $register ->bindValue(":email",$email);
            $register -> execute();
            return true;
        }
    }












}
?>