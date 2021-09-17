<?php 
    class Costumer
{
    public $akun = "fitriaamelia"; 
    private $pin = 223344;
    protected $kode = "HJK123P560";
     

    public function akun()
    {
        return $this->akun;
    }

    public function pin()
    {
        return $this->pin;
    }

    public function kode()
    {
        return $this->kode;
    }

}

class Kasir extends Costumer
{

    public function kepoAkun()
    {
        return $this->akun;
    }

    public function kepoPin()
    {
        return $this->pin;
    }

    public function kepokode()
    {
        return $this->kode;
    }
}

$costumer = new Costumer();
$kasir = new Kasir();

//ingin mengetahui akun online shop dari object orang tua
echo "Nama Akun Online Shop : " . $costumer->akun() . "<br>";
echo "Kode Shopeepay : " . $costumer->kode() . "<br>";
echo "Pin Shoopeepay: " . $costumer->pin(). "<hr>";

//anak ingin mengetahui data atm dari class orang tua
echo "Nama Akun Online Shop : " . $kasir->kepoAkun() . "<br>";
echo "Kode Shopeepay : " . $kasir->kepokode() . "<br>";
echo "Pin Shoopeepay : " . $kasir->kepoPin();

?>
