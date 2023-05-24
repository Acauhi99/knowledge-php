<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <title>Cadastro</title>
</head>
<body>
    <?php 
    require_once "../src/form.php";
    ?>
<form action="cadastro.php" method="POST">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="age">Idade:</label><br>
        <input type="text" id="age" name="age"><br>
        <label>Gênero:</label><br>
        <input type="radio" id="feminino" name="gender" value="Feminino">
        <label for="feminino">Feminino</label><br>
        <input type="radio" id="masculino" name="gender" value="Masculino">
        <label for="masculino">Masculino</label><br>
        <input type="radio" id="naoInformado" name="gender" value="Não informado">
        <label for="naoInformado">Não informar</label><br><br>

        <label for="favoritefoods">Comidas favoritas:</label><br>
        <textarea name="favoritefoods" rows="10" cols="30"></textarea><br>
        <label for="street">Rua:</label><br>
        <input type="text" id="street" name="street"><br>
        <label for="number">Número:</label><br>
        <input type="text" id="number" name="number"><br>
        <label for="city">Cidade:</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="state">Estado:</label><br>
        <input type="text" id="state" name="state"><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>