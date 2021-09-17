<?php 
class Komputer
{
    protected $jenisProcessor = "Intel Core 17";

    protected function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }

}
class Laptop extends Komputer
{
    public function getProcessor()
    {
        return $this->tampilkanJenisProcessor();
    }
}

$Laptop = new Laptop();
echo $Laptop->getProcessor();
?>