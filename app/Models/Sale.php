<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'sale_date', 'product_id', 'amount', 'subtotal'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
