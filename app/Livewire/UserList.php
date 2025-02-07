<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $rowsPerPage = 10;

    public $startDate, $endDate;

    public function render()
    {

        $query = User::query();

        if ($this->startDate && $this->endDate) {
            $query->whereBetween('created_at',[$this->startDate, $this->endDate]);
        }

        return view('livewire.user-list',[
            'users' => $query->paginate($this->rowsPerPage)
        ]);
    }
}
