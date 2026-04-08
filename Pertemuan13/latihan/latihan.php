<?php

// Namespace App\Produk
namespace App\Produk {
    class Item {
        public $nama;

        public function __construct($nama) {
            $this->nama = $nama;
        }

        public function info() {
            return "[Produk] Nama Item: " . $this->nama;
        }
    }
}

// Namespace App\Service
namespace App\Service {
    class Item {
        public $nama;

        public function __construct($nama) {
            $this->nama = $nama;
        }

        public function info() {
            return "[Service] Layanan Jasa: " . $this->nama;
        }
    }
}

namespace {
    // Import class menggunakan alias 'as' agar tidak bingung saat instansiasi
    use App\Produk\Item as ProdukItem;
    use App\Service\Item as ServiceItem;

    // Membuat Instance dari App\Produk
    $produk = new ProdukItem("Laptop");
    
    // Membuat Instance dari App\Service
    $service = new ServiceItem("Service Hardware");

    // Menampilkan Hasil
    echo $produk->info() . PHP_EOL;
    echo "<br>"; // Baris baru untuk browser
    echo $service->info() . PHP_EOL;
}