<?php

namespace App\Http\Livewire\Sale;

use App\Models\Sale;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $slug;
    public $confirmation;


    public function render()
    {
        return view('livewire.sale.delete');
    }

    public function delete()
    {
        if ($this->confirmation === 'confirmar') {
            Sale::where('slug', $this->slug)->delete();
            $this->emit('refreshSales');
            toast()->success('Colección eliminada correctamente.')->push();
            $this->closeModal();
        } else {
            $this->closeModal();
            toast()->danger('No se puedo eliminar la colección.')->push();
            $this->emit('refreshCollection');
        }
    }
}
