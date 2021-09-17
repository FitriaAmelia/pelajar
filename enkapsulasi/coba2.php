<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
   <fieldset>
   <legend>Kucing</legend>
   <table> 
   <tr> 
   <td>warna kucing</td>
   <td>:</td>
   <td><input type="text" name="warna"></td>
   </tr>

   <tr> 
   <td>Jumlah Kaki</td>
   <td>:</td>
   <td><input type="text" name="jumlah"></td>
   </tr>
     
     <tr>
   <td></td><td></td>
   <td><input type="submit" name="submit" value="Submit"></td>
     </tr> 
    </table>
<?php 
if (isset($_POST['submit']))
{
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    class Kucing
    {
        public $warna;
        public $jumlah;
        
        
        public function cat($warna, $jumlah)
       {
           if ($jumlah == 4) {
               echo "warna kucing : " . $warna ."<br>";
               echo "Jumlah Kaki : " . $jumlah . "<br>";
               echo "Keterangan : Normal";

           } else if ($jumlah <= 3) {
               echo "warna kucing : " . $warna ."<br>";
               echo "Jumlah Kaki : " . $jumlah . "<br>";
               echo "Keterangan : Cingked";
           }

            else if ($jumlah >= 5) {
               echo "warna kucing : " . $warna ."<br>";
               echo "Jumlah Kaki : " . $jumlah . "<br>";
               echo "Keterangan : Siluman";
           }
           
       }   
    }
   $kucing = new Kucing();
   echo $kucing->cat($warna, $jumlah);

}
    





?>
</fieldset>
    </form>
</body>
</html>