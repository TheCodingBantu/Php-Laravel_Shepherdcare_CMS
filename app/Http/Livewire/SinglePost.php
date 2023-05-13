<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\Comment;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SinglePost extends Component
{
    public $record;
    public $comment;

    public $err;
    // protected $listeners = ['refreshComponent' => '$refresh'];
    public function mount($id)
    {
        $this->record = Activity::find($id);
    }
   
    public function postComment(){

        // dd($this->record);
        try {
            // Validate the value...
            $item = new Comment();
            $item->user_id = (Auth::User()->id);
            $item->activity_id = $this->record->id;
            $item->comment = $this->comment;
            $item->save();

        //   $this->emit('refreshComponents');
            // return response()->json(['success' => 'Comment saved']);
        }

        //code...
        catch (\Throwable $th) {
            //throw $th;
            $this->err =$th->getMessage();
        }
    }
   
    public function redirectBack(){
        $this->emit('hideSinglePost');
        
    }

    public function render()
    {
        $member = Member::findOrFail($this->record->member_id);
        $user = User::findOrFail($this->record->added_by);
        // getCommentRelation is a relationship declared in the comments model
        $comments = Comment::where('activity_id', $this->record->id)->with('getCommentRelation')->get();
        return view('livewire.single-post',['member'=>$member,'user'=>$user,'comments'=>$comments]);
    }
}
