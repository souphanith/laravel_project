<?php

namespace App\Http\Livewire;

use App\Models\tester;
use Livewire\Component;

class Testerter extends Component
{
    public $todos;
    public string $name = '';
    public string $surname = '';
    public function render()
    {
        return view('livewire.testerter');
    }

    public function addTodo()
    {
        $nith = new tester();
        $nith->name= $this->name;
        $nith->surname = $this->surname;
        $nith->save();
        $this->name = '';
        $this->surname = '';

    }
}
