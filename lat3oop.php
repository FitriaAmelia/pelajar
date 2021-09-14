<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
   <fieldset>
   <legend>Aritmatika</legend>
   <table> 
   <tr> 
   <td>Bilangan 1</td>
   <td>:</td>
   <td><input type="number" name="bilangan1"></td>
   </tr>

   <tr> 
   <td>Bilangan 2</td>
   <td>:</td>
   <td><input type="number" name="bilangan2"></td>
   </tr>
     
     <tr>
   <td></td><td></td>
   <td><input type="submit" name="proses" value="Proses"></td>
     </tr> 
    
    </table>
    

<?php 
if (isset($_POST['proses'])){
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];

class Aritmatika
{
    public function __construct($bilangan1, $bilangan2){
        $this->bilangan1 = $bilangan1;
        $this->bilangan2 = $bilangan2;
        
    }
    public function tambah()
    {
        return ($this->bilangan1 + $this->bilangan2);
    }

    public function kurang()
    {
        return ($this->bilangan1 - $this->bilangan2);
    }

    public function kali()
    {
        return ($this->bilangan1 * $this->bilangan2);
    }

    public function bagi()
    {
        return ($this->bilangan1 / $this->bilangan2);
    }

    public function modulus()
    {
        return ($this->bilangan1 % $this->bilangan2);
    }
}

$penjumlahan = new Aritmatika($bilangan1, $bilangan2);
echo "Bilangan 1 : " . $penjumlahan->bilangan1 . "<br>";
echo "Bilangan 2 : " . $penjumlahan->bilangan2 . "<br>";
echo "Penjumlahan : " . $penjumlahan->tambah() . "<br>";
echo "Pengurangan : " . $penjumlahan->kurang() . "<br>";
echo "Perkalian : " . $penjumlahan->kali() . "<br>";
echo "Pembagian : " . $penjumlahan->bagi() . "<br>";
echo "Modulus : " . $penjumlahan->modulus() . "<br>";
}
?>
</fieldset>
    </form>
</body>
</html>