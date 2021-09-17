<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Inheritance</title>
</head>
<body>
    <fieldset> 
    <legend>Data Mahasiswa</legend>
    <form action="" method="post">
    <table>
    <tr> 
    <th>Nama</th> 
    <td>: <input type="text" name="nama"></td> 
    </tr> 

    <tr> 
    <th>NIM</th> 
    <td>: <input type="text" name="nim"></td> 
    </tr> 

    <tr> 
    <th>Nilai</th> 
    <td>: <input type="number" min="1" max="100" name="nilai"></td> 
    </tr> 

    <tr> 
    <th>Dosen</th> 
    <td>: <input type="text" name="dosen"></td> 
    </tr> 

    <tr> 
    <th>Mata Kuliah</th> 
    <td>: <input type="text" name="matkul"></td> 
    </tr> 

    


    <tr> 
    <th>
    <td>
    <button type="submit" name="simpan">Submit</button> 
    <button type="reset">Reset</button>
    </td> 
    </tr> 
    </table> 
    </form> 
    </fieldset>

    <?php 
    if (isset($_POST['simpan']))
     {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];


    class Mahasiswa
     {
        public function __contruct($nama, $nim, $nilai, $dosen, $matkul)
        {
        $this->nama = "$nama";
        $this->nim = "$nim";
        $this->nilai = "$nilai";
        $this->dosen = "$dosen";
        $this->matkul = "$matkul";
        }



    }
}

?>