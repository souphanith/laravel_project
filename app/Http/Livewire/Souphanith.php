<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\SouphanithItem;
use Illuminate\Http\Request;

class Souphanith extends Component
{
    public $users;
    public $todos;
    public $name, $surname, $position;
    public function render()
    {
        // $souphanithItem = souphanithItem::get();
        return view('livewire.souphanith')->layout('layouts.app');

    }

    public function addTodo()
    {
    
        $nith = new SouphanithItem();
        $nith -> name = $this->name;
        $nith -> surname = $this->surname;
        $nith -> position = $this->position;
        $nith -> save();
        $this ->name = '';
        $this -> surname = '';
        $this -> position = '';
    }

    public function selectTodos()
    {
        $this -> todos = Souphanith::orderBy('created_at','DESC')->get();
    }


    public function mount()
    {
        $this->users = SouphanithItem::all();
    }



  

    // public function update(Request $request, string $id)
    // {
    //     $student = SouphanithItem::find($id);
    //     $input = $request->all();
    //     $student -> update($input);
    //     return redirect('souphanith')->with('flash_message','student Update');
    // }



public function deleteItem($id)
   {
       $item = SouphanithItem::find($id);
       $item->delete();
       return redirect()->route('souphanith');
   }

}
