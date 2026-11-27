<?php

namespace Pbo\Marketplace;

require_once('./produk_jasa.php');

use Pbo\Marketplace\Produk;

class Jasa {

    use Produk;

    public function payment($tipe) {
        
        return match($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "pembayaran hanya bisa va dan qris"
        };
    }

}