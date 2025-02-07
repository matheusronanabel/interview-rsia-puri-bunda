<?php

namespace App\Livewire;

use App\Models\Position;
use Livewire\Component;

class MultiSelect extends Component
{
    public $selectedPositions = [];

    public function updatedSelectedPositions()
    {
        if (count($this->selectedPositions) > 2) {
            $this->selectedPositions = array_slice($this->selectedPositions, 0, 2);
        }
    }

    public function mount($selectedPositions = [])
    {
        $this->selectedPositions = is_array($selectedPositions) ? $selectedPositions : [];
    }

    public function render()
    {
        return view('livewire.multi-select',[
            'positions' => Position::all()
        ]);
    }
}
