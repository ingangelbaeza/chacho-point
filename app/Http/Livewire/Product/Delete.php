<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{

    public $slug;
    public $confirmation;

    public function render()
    {
        return view('livewire.product.delete');
    }

    public function delete()
    {
        if ($this->confirmation === 'confirmar') {
            Product::where('slug', $this->slug)->delete();
            $this->emit('refreshProducts');
            toast()->success('Colección eliminada correctamente.')->push();
            $this->closeModal();
        } else {
            $this->closeModal();
            toast()->danger('No se puedo eliminar la colección.')->push();
            $this->emit('refreshCollection');
        }
    }
}
