<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }
    public function login()
    {
        return view('dashboard.login');
    }
    public function board()
    {
        return view('dashboard.board');
    }
    public function kanban()
    {
        return view('dashboard.kanban');
    }
    public function pipeline()
    {
        return view('dashboard.pipeline');
    }
    public function contact_list()
    {
        return view('dashboard.contact-list');
    }
    public function contact_card()
    {
        return view('dashboard.contact-card');
    }
    public function edit_contact()
    {
        return view('dashboard.edit-contact');
    }
    public function customer()
    {
        return view('dashboard.customer');
    }
}
