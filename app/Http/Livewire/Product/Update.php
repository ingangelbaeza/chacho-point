<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Update extends Component
{
    public $slug;

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

    public function mount($slug)
    {
        $this->slug = $slug;
        $product = Product::where('slug', $this->slug)->first();

        $this->name = $product->name;
        $this->price = $product->price;
        $this->unitsContains = $product->units_contains;
        $this->unitPrice = $product->unit_price;
    }

    public function render()
    {
        return view('livewire.product.update');
    }

    public function update()
    {
        $this->validate();
        Product::where('slug', $this->slug)->update([
            'slug' => uniqid(),
            'name' => $this->name,
            'price' => $this->price,
            'units_contains' => $this->unitsContains,
            'unit_price' => $this->unitPrice,
        ]);

        toast()->success('You earned a cookie! 🍪')->pushOnNextPage();
        return redirect()->route('product.read');
    }
}
