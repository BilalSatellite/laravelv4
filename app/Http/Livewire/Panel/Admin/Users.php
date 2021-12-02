<?php

namespace App\Http\Livewire\Panel\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.panel.admin.users',[
            'data' => User::paginate(5)
        ]);
    }
}
