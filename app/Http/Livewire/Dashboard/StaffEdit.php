<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class StaffEdit extends Component
{
    public $staff;
    public function render()
    {
        return view('livewire.dashboard.staff-edit')->layout('layouts.dashboard-frontend');
    }

    public function mount(\App\Models\User $user)
    {
        $this->staff = $user;
    }
}