<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Modal extends Component
{   
    
    public $records;
    public $members;
    public $title;
    public $description;
    public $category;
    public $member;

    public $err;


    public function mount(){
        $this->members=Member::all();
        $this->records = Activity::all()->sortDesc();
    }

    public function displayDetails($id){
        $this->emit('activityClicked', $id);
    }

    public function store(){
        try {
            // Validate the value...
            $item = new Activity();
            $item->description = $this->description;
            $item->category = $this->category;
            $item->title = $this->title;
            $item->added_by = Auth::user()->id;
            
            $item->member_id = $this->member;

            $item->save();
            $this->emit('hideModal');
            $this->mount();


        }catch(\Throwable $th){
            $this->err=$th->getMessage();
        }
    }
    public function render()
    {
        return view('livewire.modal');
    }
}
