<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>title of your website</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section id="esquerda">
            <form>
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
                <tr>
                    <td>maria</td>
                    <td>19971560826</td>
                    <td>maria@gmail.com</td>
                    <td>
                        <a href="">editar</a>
                        <a href="">excluir</a>
                    </td>
                </tr>
            </table>
        </section>
    </body>
</html>
