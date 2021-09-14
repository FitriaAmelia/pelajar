<?php 

    //mendefinisikan sebuah class
    class Kucing
    {
        //membuat property atau atributes
        public $warna = "Coklat";
        public $jumlahKaki = 4;
        public $jenisBulu = "panjang";
        public $makananFavorite = "Ikan Pindang";

        //membuat method (behavior/)
        public function bersuara()
        {
            return "meowng...meowng...meowng...";

        }
        public function berburu()
        {
            return "berburu ikan";
        }
    }

    //membuat object (inisiasi object)
    $kucing1 = new Kucing();
    echo "warna kucing : " . $kucing1->warna . "<br>";
    echo "sifat kucing : " . $kucing1->bersuara() . "<hr>";

    $kucing2 = new Kucing();
    //set warna kucing
    $kucing2->warna = "Oren";
    echo "warna kucing : " . $kucing2->warna . "<br>";
    echo "sifat kucing : " . $kucing2->berburu() . "<hr>";
?>