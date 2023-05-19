<?php

class Person
{
    private string $name;
    private int $age;
    private string $gender;
    private array $favoriteFoods;
    private Address $address;
    private int $id;
    private string $email;
    private string $password;

    public function __construct(string $name, int $age, string $gender, array $foods, Address $address, int $id, string $email, string $password) 
    {
        $this->setAge($age);
        $this->setGender($gender);
        $this->setName($name);
        $this->setId($id);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->favoriteFoods = $foods;
        $this->address = $address;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Email informado não é valido.";
        }
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getFavoriteFoods() : array
    {
        return $this->favoriteFoods;
    }

    public function setFavoriteFoods(array $favoriteFoods) 
    {
        $this->favoriteFoods = $favoriteFoods;
    }

    public function getAddress() : Address
    {
        return $this->address;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    public function getName() : string 
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = ucfirst($name);
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getGender() : string 
    {
        return $this->gender;
    }

    public function setGender(string $gender)
    {
        // if ($gender == ''){
        //     $this->gender = 'Não informado.';
        // } else {
        //     $this->gender = $gender;
        // }

        isset($gender) ? $this->gender = 'Não informado.' : $this->gender = $gender;
    }

    public function apresentar()
    {
        echo "Nome: {$this->name}. Idade: {$this->age}. Sexo: {$this->gender}. Comidas Favoritas: {$this->favoriteFoods}";
    }

    public function showFoods()
    {
        echo "{$this->favoriteFoods}";
    }
}