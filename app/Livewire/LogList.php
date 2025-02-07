<?php

namespace App\Livewire;

use App\Models\LoginLog;
use Livewire\Component;

class LogList extends Component
{
    public $rowsPerPage = 10;

    public $startDate, $endDate;

    public function render()
    {
        $query = LoginLog::query();
        
        if ($this->startDate && $this->endDate) {
            $query->whereBetween('login_time',[$this->startDate, $this->endDate]);
        }
        
        return view('livewire.log-list',[
            'logs' => $query->paginate($this->rowsPerPage)
        ]);
    }
}
