<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Http\Request;use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UsersComponent extends Component
{
    public $userID;



    public function deleteProduct()
    {
        $user = User::find($this->userID);

        $user->delete();
        toastr()->success('O usuário foi excluído com sucesso','Excluído com sucesso');

        // $this->dispatch('$refresh');
        $this->reset();

    }

    public function render()
    {
        $users = User::orderBy("created_at", "DESC")->get();
        return view('livewire.admin.users-component', compact('users'))
        ->layout(config('livewire.layoutAdmin'));
    }

    public function updateAvailability(Request $request)
    {

        $user = Auth::user();
        $user->availability =$request->input('availability');
        $user->save();


    //    return toastr()->success("Disponibilidade Actualizada com sucesso!", "Disponibilidade");
    }
}
