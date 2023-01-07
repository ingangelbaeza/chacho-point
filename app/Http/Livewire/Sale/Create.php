<?php

namespace App\Http\Livewire\Sale;

use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;

class Create extends Component
{
    public $saleDate;
    public $product;
    public $amount;

    protected $rules = [
        'saleDate' => 'required',
        'product' => 'required',
        'amount' => 'required',
    ];

    public function mount()
    {
        $this->saleDate = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.sale.create', [
            'products' => Product::all(),
        ]);
    }

    public function store()
    {
        $this->validate();

        $product = Product::where('slug', $this->product)->first();

        Sale::create([
            'slug' => uniqid(),
            'sales_date' => $this->saleDate,
            'product_id' => $product->id,
            'amount' => $this->amount,
            'subtotal' => $product->unit_price * $this->amount,
        ]);

        return redirect()->route('sale.read');
    }
}
