<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function product_storage() {
        return $this->belongsTo('ProductStorage', 'product_id');
    }

    public function product_storages() {
        return $this->belongsTo('ProductStorage');
    }
}
