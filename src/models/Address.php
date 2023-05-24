<?php 

class Address 
{
    private int $id;
    private string $street;
    private int $number;
    private string $city;
    private string $state;


    public function __construct(int $id=0, string $street, int $number, string $city, string $state)
    {
        $this->setStreet($street);
        $this->setNumber($number);
        $this->setCity($city);
        $this->setState($state);
        $this->setId($id);
    }

    public function getID() : int 
    {
        return $this->id;
    }

    public function setID(int $id) 
    {
        $this->id = $id;
    }

    public function getStreet() : string
    {
        return $this->street;
    }

    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    public function getNumber() : int 
    {
        return $this->number;
    }

    public function setNumber(int $number)
    {
        $this->number = $number;
    }

    public function getCity() : string
    {
        return $this->city;
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    public function getState() : string 
    {
        return $this->state;
        
    }

    public function setState(string $state)
    {
        $this->state = $state;
    }

    public function showAddress()
    {
        echo "O endereço é: {$this->street}, {$this->number}, {$this->city}, {$this->state}.";
    }
}