<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    <pre>
    <?php
    require_once "gerador.php";
    // var_dump($people);
    echo "{$people[45]->getAddress()->getStreet()}";
    $person45 = $people[45];
    $addressPerson45 = $person45->getAddress();
    $streetPerson45 = $addressPerson45->getStreet();
    
    // require_once "Address.php";
    // require_once "Person.php";

    // $name = "Mateus";
    // $age = 23;
    // $gender = "Masculino";
    // $foods = ["Pizza", "Batata Frita", "Hamburger", "Bolo"];
    // $street = "Rua Guaçui";
    // $number = 496;
    // $city = "Juiz de Fora";
    // $state = "Minas Gerais";
    // $address = new Address($street,$number,$city,$state);
    // $person = new Person($name,$age,$gender,$foods,$address);
    // var_dump($person);
    ?>
    </pre>
    
</body>
</html>