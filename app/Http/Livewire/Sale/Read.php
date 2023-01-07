<?php

namespace App\Http\Livewire\Sale;

use App\Models\Sale;
use Livewire\Component;
use Livewire\WithPagination;

class Read extends Component
{
    use WithPagination;

    protected $listeners = ['refreshSales' => '$refresh'];

    public function render()
    {
        return view('livewire.sale.read', [
            'sales' => Sale::paginate(10)
        ]);
    }

    public function new()
    {
        return redirect()->route('sale.create');
    }
}
