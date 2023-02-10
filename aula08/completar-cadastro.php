<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Completar cadastro</title>
</head>
<body>
    <form action="inserir-cliente-dados.php" method="POST">
        <input type="hidden" name="id_client" value="<?=$_GET["client"]?>">
        <input type="text" name="cpf" placeholder="CPF">
        <input type="text" name="rg" placeholder="RG">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="celular" placeholder="Celular">
        <button>Finalizar cadastro</button>
    </form>
</body>
</html>