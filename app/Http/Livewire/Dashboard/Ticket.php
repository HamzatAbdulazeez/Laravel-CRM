<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Ticket extends Component
{
    public function render()
    {
        return view('livewire.dashboard.ticket')->layout('layouts.dashboard-frontend');
    }
}