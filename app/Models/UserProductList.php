<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProductList extends Model {
    use HasFactory;

    public function user() {
        $this->hasMany(OrderItem::class);
    }
}
