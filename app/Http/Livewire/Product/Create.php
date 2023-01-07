<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $price;
    public $unitsContains;
    public $unitPrice;

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'unitsContains' => 'required',
        'unitPrice' => 'required',
    ];

    public function render()
    {
        return view('livewire.product.create');
    }

    public function store()
    {
        $this->validate();
        Product::create([
            'slug' => uniqid(),
            'name' => $this->name,
            'price' => $this->price,
            'units_contains' => $this->unitsContains,
            'unit_price' => $this->unitPrice,
        ]);

        return redirect()->route('product.read');
    }
}
