<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteUser extends Component
{
    public $showModal = false;

    public function handle()
    {
        dd('hello user');
    }

    public function render()
    {
        return view('livewire.delete-user');
    }
}