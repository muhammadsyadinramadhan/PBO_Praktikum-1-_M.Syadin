<?php

//Manggil file propertyconstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//
$produk = new Produk();

$produk->setKode('P0001')->setNama('Laptop')->setHarga(10000000)->setStok(5);

// $produk->kode = 'P0001';
// $produk->nama = 'Laptop';
// $produk->harga = '10000000';
// $produk->stok = '5';

//hasil
echo "Produk: ". $produk->getNama();
echo "<br/>";

echo "Harga: Rp.". $produk->getHarga();
echo "<br/>";

echo "Stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak:". $produk->pajak() ."%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.". $produk->total();