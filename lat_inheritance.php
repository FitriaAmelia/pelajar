<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><fieldset>
    <legend ><b>Tugas dan Jenis Makhluk Ciptaan Tuhan</b></legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
            <td> Jenis-jenis Makhluk </td>
            <td> : </td>
            <td><select name="jenis">
                <option value="Manusia">Manusia</option>
                <option value="Malaikat">Malaikat</option>
                <option value="Jin">Jin</option>
                <option value="Setan">Setan</option>
            </select></tr>
        <tr></td>
            <td><input type="submit" name="submit" value="input"></td>
            </tr>
        </form></fieldset>
    </table>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];

    class Makhluk
    {
        public function __construct($jenis)
        {
            $this->jenis = $jenis;

        }

    }
    class Tugas extends Makhluk
    {
        public function tugas_makhluk()
        {
          
            if ($this->jenis == "Manusia") {
                $a = "Beribadah Kepada Tuhan";
            } elseif ($this->jenis == "Malaikat") {
                $a = "Beribadah Kepada Tuhan";
            } elseif ($this->jenis == "Jin") {
                $a = "Ada Yang Beribadah Dan Ada Juga Yang Tidak";
            } else {
                $a = "Menggagu Manusia";
            }
            return $a;

        }
    }

    $Makhluk = new Tugas($jenis);
    ?>
    <table>

    <tr>
        <td><?php echo "Jenis Makhluk : " . $Makhluk->jenis . "<br>"; 
         echo "Tugasnya : " . $Makhluk->tugas_makhluk() . "<br>";  ?> </td>

    </tr>
</table>
<?php
}