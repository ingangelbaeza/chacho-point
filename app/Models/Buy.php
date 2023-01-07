<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'date_purchase', 'product_id', 'amount', 'subtotal'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
