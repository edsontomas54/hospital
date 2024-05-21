<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->to('/admin/login'); // Redirect to the login page or home page
    }

    public function render()
    {
        $user = Auth::user();
        return view('livewire.admin.dashboard', compact('user'))->layout(config('livewire.layoutAdmin'));
    }
}
