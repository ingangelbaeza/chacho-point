<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Read extends Component
{
    use WithPagination;

    protected $listeners = ['refreshProducts' => '$refresh'];

    public function render()
    {
        return view('livewire.product.read', [
            'products' => Product::paginate(10)
        ]);
    }

    public function new()
    {
        return redirect()->route('product.create');
    }
}
