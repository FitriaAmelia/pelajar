<html>
<head><title>Latihan Inheritance</title></head>
 <body>
     <form action="" method="post">
        <fieldset>
            
            <legend>Jenis-Jenis Makhluk Ciptaan Tuhan</legend>
            <table>
                <tr>
            <td>Jenis-Jenis Mahluk </td>
            <td> : </td>
            <td><select type="text" name="makhluk" >
            <option value= 1 > Manusia</option>
            <option value= 2 > Malaikat</option>
            <option value= 3 > Jin</option>
            <option value= 4 > Setan</option>
            </select></td>
            </tr>

<tr>
    <td></td><td></td>
    <td>
 <input type="submit" name="submit" value="Input"></td>
</tr>
 </table>
</form>
 </fieldset>
 </body>
</html>
<?php
if (isset($_POST['submit'])) {
    $makhluk = $_POST['makhluk'];

    class Manusia
    {
        public function __construct($makhluk)
        {
            $this->makhluk = "$makhluk";

        }
        protected function tugas_manusia()
        {
            return "Beribadah Kepada Tuhan";
        }
    }

// turunkan class Manusia ks Malaikat
    class Malaikat extends Manusia
    {
        protected function tugas_malaikat()
        {
            return "Beribadah Kepada Tuhan";
        }
    }
    class jin extends Malaikat
    {
        protected function tugas_jin()
        {
            return "Ada Yang Beribadah Dan Ada Ada Yang Tidak";
        }
    }
// turunkan class Malaikat ke chromebook
    class setan extends jin
    {
        protected function tugas_setan()
        {
            return "Menggagu Manusia";
        }

        public function tugas_semua()
        {
            if (0 > $this->makhluk) {
                $a = $this->tugas_manusia();
            } elseif (3 < $this->makhluk) {
                $a = $this->tugas_setan();

            } elseif (2 < $this->makhluk) {
                $a = $this->tugas_jin();

            } elseif (1 <= $this->makhluk) {
                $a = $this->tugas_malaikat();

            }

            // $b = $this->beli_laptop();
            // $c = $this->beli_chromebook();
            // $d = $this->etan();

            return "Tugasnya Adalah : $a ";
        }
    }

// buat objek dari class Malaikat (instansiasi)
    $tugas_baru = new setan($makhluk);

//panggil method objek
    echo $tugas_baru->tugas_semua();

// $gadget_baru->beli_komputer();
    // Fatal error: Call to protected method Manusia::beli_komputer()
}

?>