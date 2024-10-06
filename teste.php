<?php


include('conexao.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Monitoramento</title>
</head>
<body>
    <h1>Leitura Luminosidade</h1>
    <form action="">
    </form>
    <br>
    <table width="600px" border="1">
        <tr>
            <th>Horario</th>
            <th>Leitura</th>
            <th>Status</th>
        </tr>
        
        <?php
        
            
            $sql_code = "SELECT * FROM monitoramento";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
            
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
                <td colspan="3">Nenhum resultado encontrado...</td>
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $dados['Horario']; ?></td>
                        <td><?php echo $dados['Leitura']; ?></td>
                        <td><?php echo $dados['Status']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        <?php
         ?>
    </table>
</body>
</html>
