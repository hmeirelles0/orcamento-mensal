<?php

/* PHP

- Header() / location to return to homepage;
 */

    //Inicializando variáveis de conexão ao banco de dados
    $local_server = "ULTRON";
    $usuario_server = "sa";
    $senha_server = "Eldritch1890";
    $banco_de_dados = "orcamento";
    
    try {
        //Utilizando PDO (PHP Data Object)
        $pdo = new PDO ("sqlsrv:server=$local_server;database=$banco_de_dados", $usuario_server, $senha_server);
    } catch (Exception $ex) {
        echo "Erro ao tentar conexão com o banco de dados:\n" . $ex->getMessage();
        die; 
    }

    //Atribuição de tabela de interesse a uma variável
    $compra = "tblCompras";

    try {
        //Preparo da instrução SQL
        $sql = $pdo->prepare('INSERT INTO ' . $compra . ' VALUES (:tipo, :valor, :local, :metodo);');
        
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];
        $local = $_POST['local'];
        $metodo = $_POST['metodo'];

        //Associando valores (etapa necessária para maior segurança do sistema)
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":local", $local);
        $sql->bindValue(":metodo", $metodo);

        //Execução
        $sql->execute();
        
        //Retorno visual da inclusão no banco de dados ao usuário
        echo "
            <body style= 'margin: 0%;text-align: center; background-image: linear-gradient(#10278f, #77db95);'>
                <menu style = 'background-color:#03145e; display: flex; margin: 0px;'>
                    <a href='../index.html' target='_self' rel='prev' style= 'text-decoration: none; color: white; background-color:rgb(28, 67, 241); padding: 3px; font-family: arial; border-radius: 8px;'><strong>RETORNAR</strong></a>
                </menu>
                <h1 style = 'color: white; background-color: #03145e; margin: 0px 0px 0px 0px; padding-bottom: 20px;'>Registro atualizado com sucesso! &#x1F4B8;</h1>
                <h2 style = 'color: white; background-color: #03145e; box-shadow: 0px 0px 20px 18px #03145e; margin: 0px 0px 10px 0px; padding-bottom: 10px;'>Detalhes:</h2>
                    <div style = 'width: fit-content; margin: auto; padding: 12% 0%;'>
                        <table border style = 'background-color: white; text-align: center;'>
                            <tr style = 'background-color: #10278f; '>
                                <td style = 'padding: 3px;'>
                                    <strong style = 'color: white;'>Tipo de compra:</strong>
                                </td>
                                <td style = 'padding: 3px;'>
                                    <strong style = 'color: white;'>Valor da compra:</strong>
                                </td>
                                <td style = 'padding: 3px;'>
                                    <strong style = 'color: white;'>Local da compra:</strong>
                                </td>
                                <td style = 'padding: 3px;'>
                                    <strong style = 'color: white;'>Metodo da compra:</strong>
                                </td>
                            </th>
                            <tr>
                                <td><strong><ins>$tipo</ins></strong></td>
                                <td><strong><ins>$valor</ins></strong></td>
                                <td><strong><ins>$local</ins></strong></td>
                                <td><strong><ins>$metodo</ins></strong></td>
                            </tr>
                        </table>
                    </div>
            </body>
        ";
    } catch (Exception $err) {
        echo "Erro ao tentar uma inclusão de informações no banco de dados: \n" . $err->getMessage();
        die;
    }
?>