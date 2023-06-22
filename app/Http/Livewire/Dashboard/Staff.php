<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Staff extends Component
{
    use LivewireAlert;
    public $staffs, $departments, $firstName, $lastName, $email, $password, $address, $dept, $deptName, $confirming, $deleteId = '', $name = '';

    public $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ];
    public function render()
    {
        return view('livewire.dashboard.staff')->layout('layouts.dashboard-frontend');
    }


    public function addStaff()
    {
        $this->validate();
        try {
            User::create([
                'id' => Str::uuid(),
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'address' => $this->address,
                'fullName' => $this->firstName . ' ' . $this->lastName,
                'dept' => $this->dept
            ]);
            $this->alert('success', 'Staff added Successfully!!');
            return redirect()->to('/dashboard/staffs');
        } catch (\Throwable $th) {
            //session()->flash('error', 'Something goes wrong!!');
            $this->alert('error', 'Something goes wrong!!');
            return redirect()->to('/dashboard/staffs');
        }
    }

    public function addDept()
    {
        $dept = new Department();
        $dept->id = Str::uuid();
        $dept->name = $this->deptName;
        $dept->save();
        //session()->flash('success', 'Department added Successfully!!');
        $this->alert('success', 'Department added Successfully!!');
        return redirect()->to('/dashboard/staffs');
    }

    public function mount()
    {
        $this->staffs = User::all();
        $this->departments = Department::all();
        //dd($this->departments);
    }
    public function deleteId($id, $name)
    {
        //dd($id);
        $this->deleteId = $id;
        $this->name = $name;
    }

    public function delete()
    {
        User::where('id', $this->deleteId)->delete();
        $this->alert('success', 'Staff deleted Successfully!!');
        return redirect()->to('/dashboard/staffs');
    }
}