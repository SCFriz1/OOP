<?php

//jualan produk
//komik
//game

class produk{
    public $judul = "judul",
           $penulis ="penulis",
           $penerbit ="penerbit",
           $harga = 0;

    public function sayHello()   {
        return "Hello world";
    } 
    
    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1->judul = "naruto";
//$produk1->$penulis = "penulis";
//$produk1->$penerbit = "penerbit";
//$produk1->$harga = 0;

//var_dump($produk1);

//$produk2 = new produk();
//$produk2->judul= "uncharted"
//var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "mashasi kishimoto";
$produk3->pernebit= "shonen jump";
$produk3->harga = 30000;

$produk3 = new produk();
$produk3->judul = "uncharted";
$produk3->penulis = "heil druckmann";
$produk3->pernebit= "sony computer";
$produk3->harga = 250000;

echo "komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk->sayHello();
echo "<br>";
echo "komik : " .$produk3->getlabel();

echo "<hr>";
echo "Game : " .$produk->getlabel();
?>