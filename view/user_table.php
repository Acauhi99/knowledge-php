<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Usuario</title>
</head>
<body>
    <?php
        require_once "../src/models/Person.php";
        require_once "../src/models/Address.php";
        
        $address = new Address("batata", 10, "Rio", "RJ", 1);
        $person = new Person("João", "mateus@contato.com", "senha123", 15, "Masculino", ["japones", "pizza"], $address, 1);
    ?>
    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
            <th>idade</th>
            <th>genero</th>
            <th>comidas favoritas</th>
            <th>endereço</th>
        </tr>
        <tr>
            <td><?= $person->getId(); ?></td>
            <td><?= $person->getName(); ?></td>
            <td><?= $person->getEmail(); ?></td>
            <td><?= $person->getAge(); ?></td>
            <td><?= $person->getGender(); ?></td>
            <td><?= $person->getFavoriteFoods()[1]; ?></td>
            <td><?= $person->getAddress()->getCity(); ?></td>
        </tr>
    </table>
</body>
</html>