<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavBar extends Component
{
    public $availability;

    public function mount()
    {
        $this->availability = Auth::user()->availability;
    }

    public function updatedAvailability()
    {
        dd("called");
        // Save the availability when it's updated
        $user = Auth::user();
        $user->availability = $this->availability;
        $user->save();
    }

    public function render()
    {
        $user = Auth::user();

        return view('layouts.nav-bar',compact('user'))->layout(config('livewire.layoutAdmin'));
    }
}
