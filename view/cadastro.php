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
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
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
        <input type="checkbox" id="hamburguer" name="food[]" value="hamburguer">
        <label for="hamburguer"> Hamburguer</label><br>
        <input type="checkbox" id="pizza" name="food[]" value="pizza">
        <label for="pizza"> Pizza</label><br>
        <input type="checkbox" id="japones" name="food[]" value="japones">
        <label for="japones"> Japones</label><br><br>
        <label for="street">Rua:</label><br>
        <input type="text" id="street" name="street"><br>
        <label for="number">Número:</label><br>
        <input type="text" id="number" name="number"><br>
        <label for="city">Cidade:</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="state">Estado:</label><br>
        <select id="state" name="state">
            <option value="">Selecione</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select><br><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>