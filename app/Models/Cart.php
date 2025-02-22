<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    public $fillable = [
        'user_id'
    ];

    public function cartDetail() {
        return $this->hasMany(CartDetail::class, 'cart_id');
    }
}
