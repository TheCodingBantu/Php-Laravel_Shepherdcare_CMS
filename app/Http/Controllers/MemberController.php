<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class MemberController extends Controller


{

    public function addmember()
    {
        //
        return view('addmember');
    }
    public function memberTimeline(){
        
    }

    public function memberlist()
    {
        //
        $members = Member::all();
        return view('user.members', ['members' => $members]);
    }

    public function index()
    {
        $records = Member::all();
        return view('members', ['records' => $records]);
    }


    public function store(Request $request)
    {
        //
        try {

            // Validate the value...
            $item = new Member();
            $item->surname = $request->input('surname');
            $item->role = $request->input('role');
            $item->other_names = $request->input('other_names');
            $item->phone = $request->input('phone');
            $item->email = $request->input('email');
            $item->residence = $request->input('residence');
            $item->marital_status = $request->input('marital_status');
            $item->is_saved = $request->input('is_saved');
            $item->date_saved = $request->input('date_saved');
            $item->description = $request->input('description');
            $item->ministries = json_encode($request->input('ministry'));

            if ($item->save() && $request->input('role') == 'admin') {
                // save in user also with default password
                $user = new User();
                $user->name = $request->input('surname') . ' ' . $request->input('other_names');
                $user->email = $request->input('email');
                $user->password = Hash::make('redeemed');
                $user->save();
            }

            return response()->json(['success' => 'Member saved']);
        }

        //code...
        catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error' => $th->getMessage()]);
        }
    }

    public function updatemember(Request $request)
    {
        //
        try {

            // had saved a member Id on each profile to prevent leaks on the client side
            $item = Member::findOrFail(Session::get('memberId'));

            $item->surname = $request->input('surname');
            $item->role = $request->input('role');
            $item->other_names = $request->input('other_names');
            $item->phone = $request->input('phone');
            $item->email = $request->input('email');

            $item->save();


            // if the user was changed from member to admin, add their detials to the user side
            if ($item->save() && $request->input('role') == 'admin' && Session::get('memberRole') == 'member') {
                // save in user also with default password
                $user = new User();
                $user->name = $request->input('surname') . ' ' . $request->input('other_names');
                $user->email = $request->input('email');
                $user->password = Hash::make('redeemed');
                $user->save();
            }

            if (strlen(trim($request->input('oldpass'))) > 0) {

                $user = User::findOrFail(Auth::User()->id);



                if (Hash::check($request->input('oldpass'), $user->password)) {

                    $user->password = Hash::make($request->input('newpass'));
                    $user->save();
                } else {
                    return response()->json(['error' => 'Cannot change password: Enter the correct current password']);
                }
            }


            return response()->json(['success' => 'Member Updated']);
        }

        //code...
        catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error' => $th->getMessage()]);
        }
    }

    public function profile(Request $request, $id)
    {
        // count number of entries
        $connects = Activity::where('category', '=', 'connect')->where('member_id', '=', $id)->get();
        $cares = Activity::where('category', '=', 'care')->where('member_id', '=', $id)->get();
        $calling = Activity::where('category', '=', 'calling')->where('member_id', '=', $id)->get();
        $celebrations = Activity::where('category', '=', 'celebrate')->where('member_id', '=', $id)->get();

        $count = [count($connects), count($cares), count($calling), count($celebrations)];


        $member = Member::findOrFail($id);
        $connects = Activity::where('category', '=', 'connect')->where('member_id', '=', $id)->with('getActivityRelation')->with('getUserRelation')->limit(5)->get();
        $cares = Activity::where('category', '=', 'care')->where('member_id', '=', $id)->with('getActivityRelation')->with('getUserRelation')->limit(5)->get();
        $calling = Activity::where('category', '=', 'calling')->where('member_id', '=', $id)->with('getActivityRelation')->with('getUserRelation')->limit(5)->get();
        $celebrations = Activity::where('category', '=', 'celebrate')->where('member_id', '=', $id)->with('getActivityRelation')->with('getUserRelation')->limit(5)->get();

        Session::put('memberId', $member->id);
        Session::put('memberRole', $member->role);

        return view('profile', [
            'record' => $member, 'connects' => $connects, 'cares' => $cares, 'callings' => $calling, 'celebrations' => $celebrations, 'count' => $count
        ]);
    }


}
