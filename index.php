<?php
require_once'class/classe-pessoa.php';
$conn = new Pessoa("crudpdo","localhost","root","");

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>title of your website</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <?php
            if(isset($_POST['nome'])){

                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);
                
                if(!empty($nome) && !empty($telefone) && !empty($email)){
                  
                    if(!$p-> cadastkrarPessoa($nome, $telefone, $email)){
                        echo"EMAIL JA CADASTRADO"; 
                    }
                        
                    
                }else{
                    echo"preencha todos os campos";
                }
            }
                
        ?>

        <section id="esquerda">
            <form method="POST">
                <h2>CADASTRAR PESSOA</h2>
                <label>NOME</label>
                    <input type="text" name="nome" id="nome">
                <label>TELEFONE</label>
                    <input type="text" name="telefone" id="telefone">
                <label>EMAIL</label>
                    <input type="text" name="email" id="eamil">
                <input type="submit" value="cadastra">
            </form>
        </section>

        <section id="direita">
        <table>
                <tr id="title"> 
                    <td>NOME</td>
                    <td>TELFONNE</td>
                    <td colspan="2">EMAIL</td>
                </tr>
        <?php
          $dados =$conn ->selectdados();
            if(count($dados)>0){
                for ($i=0; $i < count($dados) ; $i++) { 
                    echo"<tr>";
                    foreach($dados[$i] as $key => $values){
                        if($key != "id"){
                            echo"<td>".$values."</td>";
                        }    
                    }
                    ?>
                    <td>
                        <a href="">editar</a>
                        <a href="">excluir</a>
                    </td>
                    <?Php
                    echo"</tr>";
                }
                  
            }else{
                echo "bnaco ainda não tem pessoas cadastradas";
            } 
                 
        ?>              
            </table>
        </section>
    </body>
</html>
