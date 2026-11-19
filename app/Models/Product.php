<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    public function stocks()
    {
        return $this->hasMany(Stock::class, 'id_products');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_products');
    }
}