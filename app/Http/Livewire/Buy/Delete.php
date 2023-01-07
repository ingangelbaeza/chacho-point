<?php

namespace App\Http\Livewire\Buy;

use App\Models\Buy;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $slug;
    public $confirmation;


    public function render()
    {
        return view('livewire.buy.delete');
    }

    public function delete()
    {
        if ($this->confirmation === 'confirmar') {
            Buy::where('slug', $this->slug)->delete();
            $this->emit('refreshBuys');
            toast()->success('Colección eliminada correctamente.')->push();
            $this->closeModal();
        } else {
            $this->closeModal();
            toast()->danger('No se puedo eliminar la colección.')->push();
            $this->emit('refreshCollection');
        }
    }
}
