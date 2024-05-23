<?php
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET["id"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. . .</title>
    <meta http-equiv="refresh" content="4;url=pagIdeia.php?idPostagem=<?=$id?>">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <section>
        <p>Tudo certo! Sua postagem foi efetuada! <br>Estamos te redirecionando para a página de ideias, aguarde alguns instantes...</p>
    </section>
</body>
</html>