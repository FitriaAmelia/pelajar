<?php 

class Komputer 
{
    public $merk;
    public $processor;
    public $memori;

    public function beliKomputer()
    {
        return "Beli Komputer Baru";
    }
}

class Laptop extends Komputer 
{
    public function lihatSpec()
    {
    return "merk : $this->merk, <br> processor : $this->processor,<br> memori : $this->memori"; 
    }
}

//buat objek laptop 
$laptop = new Laptop();
//set property laptop dari komputer
$laptop->merk = "Asus";
$laptop->processor = "Intel Core 15";
$laptop->memori = "4GB"; 

echo $laptop->beliKomputer() . "<br>";
echo $laptop->lihatSpec();




?>