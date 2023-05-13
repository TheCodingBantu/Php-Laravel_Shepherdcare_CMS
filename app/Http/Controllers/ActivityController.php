<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Comment;
use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravolt\Avatar\Facade as Avatar;
use function PHPUnit\Framework\isEmpty;

class ActivityController extends Controller
{
    public function dashboard()
    {
        $members = count(Member::all());


        $cares = count(Activity::where('category', '=', 'care')->get());
        $connects = count(Activity::where('category', '=', 'connect')->get());
        $celebrations = count(Activity::where('category', '=', 'celebrate')->get());

        $items = Activity::orderBy('created_at', 'desc')->with('getActivityRelation')->limit(5)->get();
        $total = count(Activity::all());

        // dashboard analytics
        $graph= ($this->analytics(Carbon::now()->year));
        $lastYear= ($this->analytics((Carbon::now()->year)-1));
        

       
        // return view('index', ['graph'=>$graphData,'total' => $total, 'members' => $members, 'cares' => $cares, 'connects' => $connects, 'celebrations' => $celebration, 'items' => $latestItems]);
        return view('index', compact('lastYear','graph','total', 'members', 'cares', 'connects', 'celebrations', 'items'));
    }

    private function analytics($year)
    {
        
        $activities = Activity::select('id', 'created_at')
        ->whereYear('created_at', '=', $year)
            ->get()
        
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('m');
            });
        $usermcount = [];
        $userArr = [];

        foreach ($activities as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }
       
        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $userArr[$i] = $usermcount[$i];
            } else {
                $userArr[$i] = 0;
            }
        }
        $newarr=[];
        foreach ($userArr as $value ) {
            array_push($newarr,$value);
            
        }
        return json_encode($newarr);
    }

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
            if (!empty($request->member)) {
                $items = Activity::where('category', '=', $name)->where('member_id', '=', $request->member)->with('getActivityRelation')->with('getUserRelation')->paginate(10);
            } else {
                $items = Activity::where('category', '=', $name)->with('getActivityRelation')->with('getUserRelation')->paginate(10);
            }


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

        $thisYear= ($this->adminAnalytics(Carbon::now()->year,$user->id));
        $lastYear= ($this->adminAnalytics((Carbon::now()->year)-1,$user->id));

        $cares = count(Activity::where('category', '=', 'care')->where('added_by','=',$user->id)->get());
        $connects = count(Activity::where('category', '=', 'connect')->where('added_by','=',$user->id)->get());
        $celebrations = count(Activity::where('category', '=', 'celebrate')->where('added_by','=',$user->id)->get());


        return view('activity-details', ['cares'=>$cares,'connects'=>$connects,'celebrations'=>$celebrations,'thisYear'=>$thisYear,'lastYear'=>$lastYear,'record' => $record, 'member' => $member, 'user' => $user, 'comments' => $comments]);
    }

    private function adminAnalytics($year,$user)
    {
        
        $activities = Activity::select('added_by', 'created_at')
        ->whereYear('created_at', '=', $year)
        ->where('added_by','=',$user)
            ->get()
        
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('m');
            });

        $usermcount = [];
        $userArr = [];

        foreach ($activities as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }
       
        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $userArr[$i] = $usermcount[$i];
            } else {
                $userArr[$i] = 0;
            }
        }
        $newarr=[];
        foreach ($userArr as $value ) {
            array_push($newarr,$value);
            
        }
        return json_encode($newarr);
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


    public function search(Request $request,)
    {
        try {
            // Validate the value...

            $items = Activity::where('description', '%' . $request->search . '%')
                ->orWhere('category', 'like', '%' . $request->search . '%')
                ->orWhere('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%')
                ->paginate(10);


            return view('activity', ['records' => $items, 'name' => $request->name]);
        } catch (\Throwable $th) {
            //throw $th;

        }
    }
}
