<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Request;
use App\Models\Activity;
use App\Models\Member;
use Livewire\Component;

class MemberProfile extends Component

{
    public $singleMemberPost=null;

    protected $listeners = ['postClicked'];

    public function postClicked($id)
    {
        $this->singleMemberPost = $id;
    }

    public function render()
    {
        return view('livewire.member-profile');
    }
}
