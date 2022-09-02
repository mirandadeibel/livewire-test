<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Test extends Component
{
    public $users;

    public $usersSelected = [];

    public $industry;

    public function updatedIndustry($value)
    {
        $this->usersSelected = [];

        $this->users = User::select('name', 'email')
            ->orderBy('name')
            ->get();
    }

    public function render()
    {
        return view('livewire.test') ->with([
            'industries' => [
                1 => 'Industry 1',
                2 => 'Industry 2',
                3 => 'Industry 3',
            ],
        ]);;
    }
}
