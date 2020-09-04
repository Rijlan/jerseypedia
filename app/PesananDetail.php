<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function pesanan() {
        return $this->belongsTo(Pesanan::class, 'pesanans_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
