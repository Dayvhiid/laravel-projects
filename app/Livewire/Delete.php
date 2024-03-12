<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Delete extends Component
{
    
    public function remove()
    {
        $todo = Todo::all();
        error_log($todo);
        // return view('livewire.delete');
    }
}
