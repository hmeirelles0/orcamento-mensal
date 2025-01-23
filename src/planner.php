<?php

/* PHP

- Utiliza PDO (PHP Data Object) para preparar, substituir, executar e transferir as informações recebidas para um banco de dados;

- Header() / location to return to homepage;
 */


    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $local = $_POST['local'];
    $metodo = $_POST['metodo'];

    echo "
        <body style= 'margin: 0%;text-align: center; background-image: linear-gradient(#10278f, #77db95);'>
            <menu style = 'background-color:#03145e; display: flex; margin: 0px;'>
                <nav style = 'color: white; background-color:rgb(28, 67, 241); padding: 3px; font-family: arial; border-radius: 8px;'><strong>RETORNAR</strong></nav>
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
?>