<?php

namespace App\Http\Livewire;

use App\Models\Activity;

use Livewire\Component;

class SinglePost extends Component
{
    public $record;

    public function mount($id)
    {
        $this->record = Activity::find($id);
    }
   

    public function render()
    {
        return view('livewire.single-post');
    }
}
