<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Livewire\WithPagination;

class Read extends Component
{
    use WithPagination;

    protected $listeners = ['refreshProducts' => '$refresh'];

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.product.read', [
            'products' => Product::paginate(10)
        ]);
    }

    /**
     * @return RedirectResponse
     */
    public function new()
    {
        return redirect()->route('product.create');
    }
}
