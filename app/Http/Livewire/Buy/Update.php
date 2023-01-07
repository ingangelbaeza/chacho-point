<?php

namespace App\Http\Livewire\Buy;

use App\Models\Buy;
use App\Models\Product;
use Livewire\Component;

class Update extends Component
{
    public $slug;
    public $datePurchase;
    public $product;
    public $amount;

    public $buyModel;

    protected $rules = [
        'datePurchase' => 'required',
        'product' => 'required',
        'amount' => 'required',
    ];

    public function mount()
    {
        $this->buyModel = Buy::where('slug', $this->slug)->first();

        $this->datePurchase = $this->buyModel->date_purchase;
        $this->product = $this->buyModel->product->slug;
        $this->amount = $this->buyModel->amount;
    }

    public function render()
    {
        return view('livewire.buy.update', [
            'products' => Product::all(),
        ]);
    }

    public function update()
    {
        $this->validate();

        $productId = Product::where('slug', $this->product)->first();

        Buy::where('slug', $this->slug)->update([
            'date_purchase' => $this->datePurchase,
            'product_id' => $productId->id,
            'amount' => $this->amount,
            'subtotal' => $productId->price * $this->amount,
        ]);

        toast()->success('You earned a cookie! 🍪')->pushOnNextPage();
        return redirect()->route('buy.read');
    }
}
