<?php

namespace App\Http\Livewire\Buy;

use App\Models\Buy;
use Livewire\Component;
use Livewire\WithPagination;

class Read extends Component
{
    use WithPagination;

    protected $listeners = ['refreshBuys' => '$refresh'];

    public function render()
    {
        return view('livewire.buy.read', [
            'buys' => Buy::paginate(10)
        ]);
    }

    public function new()
    {
        return redirect()->route('buy.create');
    }
}
