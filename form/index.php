<?php

if (isset($_POST['btnSubmit'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    if ($nome == '' || $sobrenome == '' || $idade == '') {
        echo "Favor preencher todos os dados";
    } else {
        echo "Nome: " . $nome . " " . $sobrenome;
        echo " Idade: " . $idade;
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/" method="post">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Sobrenome</label>
        <input type="text" name="sobrenome">
        <label>Idade</label>
        <input type="number" name="idade">
        <button name="btnSubmit" type="submit">Enviar</button>
    </form>
</body>
</html>