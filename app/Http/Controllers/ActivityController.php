<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Comment;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravolt\Avatar\Facade as Avatar;

class ActivityController extends Controller
{

    public function index()
    {
        //
        $records = Member::all();
        return view('addactivity', ['records' => $records]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        try {

            // Validate the value...
            $item = new Activity();
            $item->assigned_to = json_encode($request->input('assigned_to'));
            $item->description = $request->input('description');
            $item->category = $request->input('category');
            $item->title = $request->input('title');
            $item->added_by = Auth::user()->id;
            $item->member_id = $request->input('member_id');

            $item->save();

            return response()->json(['success' => 'Activity saved']);
        }

        //code...
        catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error' => $th->getMessage()]);
        }
    }


    public function show(Request $request, $name)
    {
        try {
            // Validate the value...


            // $items = Activity::where(DB::raw('category'), '=', $name)->paginate(10);
             $items = Activity::where('category', '=', $name)->with('getActivityRelation')->paginate(10);


            return view('activity', ['records' => $items, 'name' => $name, 'count' => $items->count()]);
        } catch (\Throwable $th) {
            //throw $th;

        }
    }


    public function activitydetails(Request $request, $id)
    {
        //
        $record = Activity::findOrFail($id);
        $member = Member::findOrFail($record->member_id);
        $user = User::findOrFail($record->added_by);
        // getCommentRelation is a relationship declared in the comments model
        $comments = Comment::where('activity_id', $id)->with('getCommentRelation')->get();

        return view('activity-details', ['record' => $record, 'member' => $member, 'user' => $user, 'comments' => $comments]);
    }


    public function postcomment(Request $request)
    {
        //
        try {

            // Validate the value...
            $item = new Comment();
            $item->user_id = $request->input('user');
            $item->activity_id = $request->input('activity');
            $item->comment = $request->input('comment');

            $item->save();

            return response()->json(['success' => 'Comment saved']);
        }

        //code...
        catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error' => $th->getMessage()]);
        }
    }


    public function search($query = '')
    {

    
        //
        return view('search');
    }
}
