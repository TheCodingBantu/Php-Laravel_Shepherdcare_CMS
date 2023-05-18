<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Request;
use App\Models\Activity;
use App\Models\Member;
use Livewire\Component;

class Memberfeed extends Component
{
    public $member;
    public $records;
    public $count;
    public $user;

    public function displayPostDetails($id){
        $this->emit('postClicked', $id);
    }

public function mount(){
    // get the id from url parameter
       $this->user= Request::input('user'); 
      // count number of entries
      $this->count = [
      count(Activity::where('category', '=', 'connect')->where('member_id', '=', $this->user)->get()),
      count(Activity::where('category', '=', 'care')->where('member_id', '=', $this->user)->get()),
      count(Activity::where('category', '=', 'calling')->where('member_id', '=', $this->user)->get()),
      count(Activity::where('category', '=', 'celebrate')->where('member_id', '=', $this->user)->get()),
    ];

      $this->member = Member::findOrFail($this->user);
      $this->records = Activity::where('member_id', '=', $this->user)->with('getActivityRelation')->with('getUserRelation')->get();
      
}
    public function render()
    {
       
        return view('livewire.memberfeed');
    }
}
