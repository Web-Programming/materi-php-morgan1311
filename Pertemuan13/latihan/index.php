<?php
require "app/produk/Item.php";
inclune "app/service/Item.php";

// menggunakan alias untuk menghindari konflik nama
use app\Produk\Item as ProdukItem;
use app\Service\Item as ServiceItem;

//membuat instance
$produk = new ProdukItem("Laptop");
$service = new ServiceItem("Perbaikan Laptop");

//Menampilkan hasil
echo $produk->info(); ."\n";
echo $service->info();
