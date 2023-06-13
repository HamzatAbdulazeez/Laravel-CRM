<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Staff extends Component
{
    public function render()
    {
        return view('livewire.dashboard.staff')->layout('layouts.dashboard-frontend');
    }
}