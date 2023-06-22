<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Department;
use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StaffDetail extends Component
{
    use LivewireAlert;

    public $staff, $departments, $firstName, $lastName, $email, $password, $address, $dept, $deptName, $confirming, $deleteId = '', $name = '';

    public $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ];
    public function render()
    {
        return view('livewire.dashboard.staff-detail')->layout('layouts.dashboard-frontend');
    }

    public function mount($staff)
    {
        $this->staff = User::where('id', $staff)->first();
        $this->departments = Department::all();
    }

    public function update(User $user)
    {

    }
}