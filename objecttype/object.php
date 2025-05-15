<?php
 
//jualan produk
//komik
//game

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    //public funciton_construct(){
    //   echo "Hello World"; 
    //}
    
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello(){
        return "Hello world";
    }

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "($produk->judul) | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("naruto","mashasi kishimoto","shonen jump",30000);
$produk2 = new Produk("Uncharted","Neil drucan","sont computer",25000);
$produk = new Produk("dragon ball");

echo "komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk1->sayHello();
echo "<br>";
echo "komik : " .$produk1->getlabel();

echo "<hr>";
echo "Game : " .$produk2->getlabel();

echo "<hr>";
echo "Default : " .$produk3->getlabel();

echo "<hr>";
$infoProduk1 = new CetakInfoProduk();
echo $InfoProduk1->cetak($produk1);

?>