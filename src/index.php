<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Cargas</title>
</head>
<body>
    <?php
        $nome = "ijrajjair";
        // Change the line below to your timezone!
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('m/d/Y h:i:s a', time());      
        require_once "./controllers/db.php";
        if(mysqli_query($conn, "INSERT INTO carga (data, linha_carga, responsavel, faltas) VALUES ('$date', 'fria', '$nome', 'nada')")){
            echo "seletou all";
        }
        else{
            
        }
        ?>
</body>
</html>