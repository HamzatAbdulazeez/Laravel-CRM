<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Customer as CustomerModel;
use Illuminate\Support\Str;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Customer extends Component
{
    use LivewireAlert;
    public $customers, $customer, $deleteId = '', $name = '';
    public $addForm = [
        'firstName' => '',
        'lastName' => '',
        'phone' => '',
        'email' => '',
        'address' => '',
    ];

    public $edit = [
        'firstName' => '',
        'lastName' => '',
        'phone' => '',
        'email' => '',
        'address' => '',
    ];

    protected $listeners = ['customerDetail', 'customerEdit'];

    public function render()
    {
        return view('livewire.dashboard.customer')->layout('layouts.dashboard-frontend');
    }

    public function mount()
    {
        $this->customers = CustomerModel::all();

    }

    public function createCustomer()
    {
        $this->validate([
            'addForm.firstName' => 'required',
            'addForm.lastName' => 'required',
            'addForm.email' => 'required|email',
            'addForm.phone' => 'required',
            'addForm.address' => 'required',
        ]);

        CustomerModel::create($this->addForm);
        $this->alert('success', 'Customer created Successfully!!');
        return redirect()->to('/dashboard/customer');
    }

    public function updateCustomer()
    {
        CustomerModel::where('id', $this->customer['id'])->update($this->edit);
        $this->alert('success', 'Customer updated Successfully!!');
        return redirect()->to('/dashboard/customer');
    }

    public function customerDetail($item)
    {
        $this->customer = $item;

    }

    public function customerEdit($item)
    {
        $this->customer = $item;
        $this->edit['firstName'] = $this->customer['firstName'];
        $this->edit['lastName'] = $this->customer['lastName'];
        $this->edit['email'] = $this->customer['email'];
        $this->edit['phone'] = $this->customer['phone'];
        $this->edit['address'] = $this->customer['address'];
    }

    public function deleteId($id, $firstName, $lastName)
    {
        //dd($id);
        $this->deleteId = $id;
        $this->name = $firstName . ' ' . $lastName;
    }

    public function delete()
    {
        CustomerModel::where('id', $this->deleteId)->delete();
        $this->alert('success', 'Customer deleted Successfully!!');
        return redirect()->to('/dashboard/customer');
    }
}