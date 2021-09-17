<?php 
    class Kasir
{
    public $akun = "fitriaamelia"; 
    private $pin = 223344;
    protected $kode = "HJK123P560";


     

    public function Akun()
    {
        $a = $this->akun;
        $b = $this->pin;
        $c = $this->kode;
        if ($a == "fitriaamelia" && $b == 223344) {
            $c = "HJK123P560";
        }
        return $c;
    } 

    
    public function kepoAkun()
    {
        $a = $this->akun;
        $b = $this->pin;
        $c ="Akun Shopeepay : " . $a . "Pin Shopeepay : " . $b;
        return $c; 
    }
}


$kasir = new Kasir();

echo "Nama Akun Online Shop : " . $kasir->akun . "<br>";
echo "Kode Shopeepay : " . $kasir->Akun() . "<br>";
echo "Pin Shoopeepay : " . $kasir->kepoAkun();

?>
