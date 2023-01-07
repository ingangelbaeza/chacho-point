<?php

namespace App\Http\Livewire\Buy;

use App\Models\Buy;
use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public $datePurchase;
    public $product;
    public $amount;

    protected $rules = [
        'datePurchase' => 'required',
        'product' => 'required',
        'amount' => 'required',
    ];

    public function mount()
    {
        $this->datePurchase = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.buy.create', [
            'products' => Product::all(),
        ]);
    }

    public function store()
    {
        $this->validate();

        $product = Product::where('slug', $this->product)->first();

        Buy::create([
            'slug' => uniqid(),
            'date_purchase' => $this->datePurchase,
            'product_id' => $product->id,
            'amount' => $this->amount,
            'subtotal' => $product->price * $this->amount,
        ]);

        return redirect()->route('buy.read');
    }
}
