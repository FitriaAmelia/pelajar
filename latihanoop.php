<?php 

    //mendefinisikan sebuah class
    class Komputer
    {
        //membuat property atau atributes
        public $pemilik = "Adit";
        public $merk = "Asus";
        public $ukuran = "p = 35cm l = 50cm";
        
        

        //membuat method (behavior/)
        public function nyala()
        {
            return "Komputer menyala";

        }
        public function mati()
        {
            return "Komputer mati";
        }
    }

    //membuat object (inisiasi object)
    $komputer1 = new Komputer();
    echo "Nama Pemilik : " . $komputer1->pemilik . "<br>";
    echo "Merk Komputer : " . $komputer1->merk . "<br>";
    echo "Ukuran Layar : " . $komputer1->ukuran. "<br>";
    echo "Status Komputer : " . $komputer1->nyala(). "<hr>";

    $komputer2 = new Komputer();
    $komputer2->pemilik = "Ade";
    $komputer2->merk = "HP";
    echo "Nama Pemilik : " . $komputer2->pemilik . "<br>";
    echo "Merk Komputer : " . $komputer2->merk . "<br>";
    echo "Ukuran Layar : " . $komputer1->ukuran. "<br>";
    echo "Status Komputer : " . $komputer1->mati(). "<hr>";
    
    $komputer3 = new Komputer();
    $komputer3->pemilik = "Amel";
    echo "Nama Pemilik : " . $komputer3->pemilik . "<br>";
    echo "Merk Komputer : " . $komputer3->merk . "<br>";
    echo "Ukuran Layar : " . $komputer3->ukuran. "<br>";
    echo "Status Komputer : " . $komputer3->nyala(). "<hr>";

    $komputer4 = new Komputer();
    $komputer4->pemilik = "Rio";
    $komputer4->merk = "HP";
    echo "Nama Pemilik : " . $komputer4->pemilik . "<br>";
    echo "Merk Komputer : " . $komputer4->merk . "<br>";
    echo "Ukuran Layar : " . $komputer4->ukuran. "<br>";
    echo "Status Komputer : " . $komputer4->nyala(). "<hr>";

    $komputer5 = new Komputer();
    $komputer5->pemilik = "Fahri";
    $komputer5->merk = "HP";
    echo "Nama Pemilik : " . $komputer5->pemilik . "<br>";
    echo "Merk Komputer : " . $komputer5->merk . "<br>";
    echo "Ukuran Layar : " . $komputer5->ukuran. "<br>";
    echo "Status Komputer : " . $komputer5->nyala(). "<hr>";
?>