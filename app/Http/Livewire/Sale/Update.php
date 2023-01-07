<?php

namespace App\Http\Livewire\Sale;

use App\Models\Buy;
use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;

class Update extends Component
{
    public $slug;
    public $saleDate;
    public $product;
    public $amount;
    public $saleModel;

    protected $rules = [
        'saleDate' => 'required',
        'product' => 'required',
        'amount' => 'required',
    ];

    public function mount()
    {
        $this->saleModel = Sale::where('slug', $this->slug)->first();

        $this->saleDate = $this->saleModel->sale_date;
        $this->product = $this->saleModel->product->slug;
        $this->amount = $this->saleModel->amount;
    }

    public function render()
    {
        return view('livewire.sale.update', [
            'products' => Product::all(),
        ]);
    }

    public function update()
    {
        $this->validate();

        $productId = Product::where('slug', $this->product)->first();

        Sale::where('slug', $this->slug)->update([
            'sale_date' => $this->saleDate,
            'product_id' => $productId->id,
            'amount' => $this->amount,
            'subtotal' => $productId->unit_price * $this->amount,
        ]);

        toast()->success('You earned a cookie! 🍪')->pushOnNextPage();
        return redirect()->route('sale.read');
    }
}
