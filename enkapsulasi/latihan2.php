<?php 
    class Kucing
    {
        public $warna1 = "Oren";
        public $warna2 = "Hitam";
        public $warna3 = "Biru";

        public function normal()
        {
            return " 4 Kucing Normal";

        }

        public function cingked()
        {
            return "3 Kucing Cingked";
        }

        public function siluman()
        {
            return "4 atau lebih <br> Kucing Siluman";
        }
    }

    $kucing1 = new Kucing();
    echo "warna kucing : " . $kucing1->warna1 . "<br>";
    echo "Jumlah Kaki : " . $kucing1->normal() . "<hr>";
    
    $kucing2 = new Kucing();
    echo "warna kucing : " . $kucing2->warna3 . "<br>";
    echo "Jumlah Kaki : " . $kucing2->cingked() . "<hr>";

    $kucing3 = new Kucing();
    echo "warna kucing : " . $kucing3->warna2 . "<br>";
    echo "Jumlah Kaki : " . $kucing3->siluman() . "<hr>";


?>