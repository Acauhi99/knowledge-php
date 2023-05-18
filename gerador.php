<?php

// Defina as propriedades da classe Pessoa
// Para representar uma pessoa, a classe Pessoa deve ter propriedades que armazenem as informações mais importantes sobre ela. Nesse caso, vamos definir as seguintes propriedades:

// nome: uma string que representa o nome da pessoa;
// idade: um número inteiro que representa a idade da pessoa;
// sexo: uma string que representa o sexo da pessoa;
// comidasFavoritas: um array que armazena as comidas favoritas da pessoa;
// endereco: um objeto da classe Endereco que representa o endereço da pessoa.


// Defina as propriedades da classe Endereço

// rua: uma string que representa o nome da rua;
// numero: um número inteiro que representa o número da casa ou apartamento;
// cidade: uma string que representa o nome da cidade;
// estado: uma string que representa a sigla do estado.

// EXERCICIO:

// Criar as duas classes mencionadas acima.

// Regras: 

// - A caso a pessoa não informe o sexo, o valor padrão deve ser "Não informado";
// - A classe Pessoa deve ter um método chamado "apresentar" que exibe uma mensagem com o nome, idade, sexo e comidas favoritas da pessoa;
// - A classe pessoa deve colocar a primeira letra do nome em maiúscula;


// email, senha , id -> formulario

require_once 'Person.php';
require_once 'Address.php';


$favoriteFoods = array("Pizza","Hamburguer","Lasanha");
$streets = array("Rua das Flores","Rua dos Girassóis","Avenida dos Jacarandás","Rua dos Ipês","Avenida das Tulipas");
$cities = array("São Paulo","Rio de Janeiro","Belo Horizonte","Curitiba","Porto Alegre");
$states = array("SP","RJ","MG","PR","RS");

$people = array();

for ($i=0; $i < 100; $i++) { 
    $name = "Pessoa " . $i;
    $age = rand(18,60);
    $gender = rand(0,1) == 0 ? "Masculino" : "Feminino";
    shuffle($favoriteFoods);
    $foods = array_slice($favoriteFoods,0,rand(1,3));
    $street = $streets[rand(0,count($streets)-1)];
    $city = $cities[rand(0,count($cities)-1)];
    $state = $states[rand(0,count($states)-1)];
    $number = rand(1,100);
    $address = new Address($street,$number,$city,$state);
    $person = new Person($name,$age,$gender,$foods,$address);
    array_push($people,$person);
}
