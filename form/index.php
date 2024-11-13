<?php

// Verifica se o botão 'btnSubmit' foi clicado (ou seja, se o formulário foi enviado)
if (isset($_POST['btnSubmit'])) {
    // Armazena os valores recebidos do formulário nas variáveis $nome, $sobrenome e $idade
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    $res = validarCampos($nome, $sobrenome, $idade);
}

function validarCampos($nome, $sobrenome, $idade)
{

    // Verifica se algum campo está vazio
    if ($nome == '' || $sobrenome == '' || $idade == '') {
        // Exibe uma mensagem se algum campo não estiver preenchido
        return '<div class="alert alert-danger" role="alert">Favor preencher todos os dados</div>';
    } else {
        // Exibe os dados coletados do formulário
        return '<div class="alert alert-success" role="alert">Nome: ' . $nome . ' ' . $sobrenome . ' Idade:' . $idade . '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="container">

            <div style="margin-top: 25px;">
                <?php echo $res; ?>
            </div>
            <div class="mb-3">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="InputNome" name="nome">
            </div>
            <div class="mb-3">
                <label for="inputSobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="inputSobrenome" name="sobrenome">
            </div>
            <div class="mb-3">
                <label for="inputIdade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="inputIdade" name="idade">
            </div>
            <button type="submit" class="btn btn-primary" name="btnSubmit">Enviar</button>
    </form>
    </div>
</body>

</html>