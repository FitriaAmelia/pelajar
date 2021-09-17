<head><title>Pengolahan Form</title></head>
 <body>
 <form action="" method="post">
     <fieldset>
         <legend>Data Mahasiswa</legend>
         <table>
             <tr>
                 <td>Nama</td>
                 <td>:</td>
                 <td><input type="text" name="nama"></td>
             </tr>
             <tr>
                 <td>Nim</td>
                 <td>:</td>
                 <td><input type="number" name="nim"></td>
             </tr>
             <tr>
                 <td>Nilai</td>
                 <td>:</td>
                 <td><input type="number" min="1" max="100" name="nilai"></td>
             </tr>
             <tr>
                 <td>Dosen</td>
                 <td>:</td>
                 <td><input type="text" name="dosen"></td>
             </tr>
             <tr>
                 <td>Mata Kuliah</td>
                 <td>:</td>
                 <td><input type="text" name="matkul"></td>
             </tr>

         </table>
     </fieldset>
 <input type="submit" name="submit" value="Input">
 </FORM>
 </body>
</html>
<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $nim = $_POST['nim'];
    $matkul = $_POST['matkul'];
    $dosen = $_POST['dosen'];

    class Mahasiswa
    {
        public function __construct($nama, $nim, $nilai, $matkul, $dosen)
        {
            $this->nama = "$nama";
            $this->nilai = $nilai;
            $this->nim = $nim;
            $this->matkul = $matkul;
            $this->dosen = $dosen;

        }

    }
// turunkan class Malaikat ke chromebook
    class MataKuliah extends Mahasiswa
    {
        public function status()
        {
            if (65 >= $this->nilai) {
                $a = "Grade D (Tidak Lulus)";

            } elseif (75 >= $this->nilai) {
                $a = "Grade C (Perbaikan)";

            } elseif (85 >= $this->nilai) {
                $a = "Grade B (Lulus)";

            } else {
                $a = "Grade A (Lulus)";

            }

            return $a;
        }
    }


    $nilai = new MataKuliah($nama, $nim, $nilai, $matkul, $dosen);

//panggil method objek
    echo "Nama : $nilai->nama<br>";
    echo "Nim :  $nilai->nim<br>";
    echo "Nilai :  $nilai->nilai<br>";
    echo "Dosen :  $nilai->dosen<br>";
    echo "Mata Kuliah :  $nilai->matkul<br>";
    echo "Status :" . $nilai->status() . "<br>";
}

?>