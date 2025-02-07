<?php

namespace App\Livewire\Unit;

use App\Models\Unit;
use Livewire\Component;
use Livewire\WithPagination;

class UnitList extends Component
{
    use WithPagination;

    public $rowsPerPage = 10;

    public $startDate, $endDate;

    public function render()
    {
        $query = Unit::query();

        if ($this->startDate && $this->endDate) {
            $query->whereBetween('created_at',[$this->startDate, $this->endDate]);
        }

        return view('livewire.unit.unit-list',[
            'units' => $query->paginate($this->rowsPerPage)
        ]);
    }
}
