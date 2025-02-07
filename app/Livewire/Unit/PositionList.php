<?php

namespace App\Livewire\Unit;

use App\Models\Position;
use Livewire\Component;
use Livewire\WithPagination;

class PositionList extends Component
{
    use WithPagination;

    public $rowsPerPage = 10;

    public $startDate, $endDate;

    public function render()
    {
        $query = Position::query();

        if ($this->startDate && $this->endDate) {
            $query->whereBetween('created_at',[$this->startDate, $this->endDate]);
        }

        return view('livewire.unit.position-list',[
            'positions' => $query->paginate($this->rowsPerPage)
        ]);
    }
}
