<?php

// class
class pendapatan{

    // property

    // method
    public function gaji($jabatan, $pendidikan){
        echo "<b>Pendapatan Gaji</b>";
        echo "<br><br>";
        echo "Jabatan : ".$jabatan;
        echo "<br>";
        
        // kondisi jabatan dan gaji
        if($jabatan == "Direktur"){
            $gaji = 10000000;
            echo "Gaji Pokok : Rp. ".$gaji;
        }
        else if($jabatan == "Manager"){
            $gaji = 5000000;
            echo "Gaji Pokok : Rp. ".$gaji;
        }
        else if($jabatan == "Karyaan"){
            $gaji = 3000000;
            echo "Gaji Pokok : Rp. ".$gaji;
        }
        else{
            echo "Jabatan Tidak Ada";
        }

        // kondisi pendidikan dan tunjangan
        if($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<br>";
            echo "Pendidikan : ".$pendidikan;
            echo "<br>";
            echo "Tunjangan : Rp. ".$tunjangan;

            echo "<br>";
        }
        else if($pendidikan == "SMA"){
            $tunjangan = 1000000;
            echo "<br>";
            echo "Pendidikan : ".$pendidikan;
            echo "<br>";
            echo "Tunjangan : Rp. ".$tunjangan;
            echo "<br>";
        }
        else if($pendidikan == "S1"){
            $tunjangan = 2000000;
            echo "<br>";
            echo "Pendidikan : ".$pendidikan;
            echo "<br>";
            echo "Tunjangan : Rp. ".$tunjangan;
            echo "<br>";
        }
        else{
            echo "Tidak Ada";
        }

        // menghitung total gaji
        $total1 = $gaji + $tunjangan;
        echo "Total Gaji : Rp. ";
        return $this -> total1 = $total1;
    }

    public function keluar($listrik, $kontrak, $kendaraan){
        echo "<hr>";
        echo "<br>";
        echo "<b>Pengeluaran</b>";
        echo "<br><br>";
        echo "Bayar Listrik : Rp. ".$listrik;
        echo "<br>";
        echo "Bayar Kontrakan : Rp. ".$kontrak;
        echo "<br>";
        echo "Cicilan Kendaraan : Rp. ".$kendaraan;

        // menghitung total pengeluaran
        $total2 = $listrik + $kontrak + $kendaraan;
        echo "<br>";
        echo "Total Pengeluaran : Rp. ";
        return $this -> total2 = $total2;
    }

    public function sisa(){
        echo "<hr>";
        echo "<b>Sisa : </b>Rp. ";
        echo $total3 = ($this->total1 - $this->total2);
    }
}

// object
$pendapatan = new pendapatan();

// menampilkan property

// menampilkan di browser
echo $pendapatan -> gaji("Manager", "S1");
echo $pendapatan -> keluar(200000, 1000000, 600000);
echo $pendapatan -> sisa();

?>