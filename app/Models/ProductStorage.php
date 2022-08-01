<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStorage extends Model
{
    use HasFactory;

    public function category() {
        return $this->hasOne('App\Models\Category', 'id');
    }

    public function categories() {
        return $this->hasMany('App\Models\Category');
    }
}
