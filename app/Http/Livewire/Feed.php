<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\Member;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Feed extends Component
{

    public $activityId=null;

    protected $listeners = ['activityClicked'];

    public function activityClicked($id)
    {
        $this->activityId = $id;
    }
    public function render()

    {   
        return view('livewire.feed');
    }

    
}
