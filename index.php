<?php  
    include 'jogo_a/Jogo.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo Memoria</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    
</head>
<body >
<h1>Jogo da memória</h1>
    <center><div = id="Jogo" >
        
        <form method="get">
                <?=$jogoMemoria->getHtml()?> 
        </form></div></center>
        <br>
        <?=$jogoMemoria->getHtmlErros();?>
        <form method="get">
            <button  id="but" type="submit" name="novoJogo">Recomeçar</button>
        </form>
    
    <?php 
        include 'jogo_a/verificar.php';
    ?>
</body>

<div id="footer">
    <p>Programação Web - Todos Direitos Reservados 2023
    Created by :  
    Gabriel Augusto RM 22674
    
</html>