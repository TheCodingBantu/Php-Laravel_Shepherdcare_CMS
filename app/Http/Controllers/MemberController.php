<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
class MemberController extends Controller
{

    public function addmember()
    {
        //
        return view('addmember');
    }


    public function index()
    {
        //
        $records=Member::all();
        return view('members', ['records' => $records]);

    }


    public function store(Request $request)
    {
        //
        try {
            
                // Validate the value...
                $item=new Member();
                $item->surname=$request->input('surname');
                $item->other_names=$request->input('other_names');
                $item->phone=$request->input('phone');
                $item->email=$request->input('email');
                $item->residence=$request->input('residence');
                $item->marital_status=$request->input('marital_status');
                $item->is_saved=$request->input('is_saved');
                $item->date_saved=$request->input('date_saved');
                $item->description=$request->input('description');
                $item->ministries=json_encode($request->input('ministry'));
                
                $item->save();
    
                return response()->json(['success'=>'item saved']);

        } 
        
          //code...
       catch (\Throwable $th) {
           //throw $th;
           return response()->json(['error'=>$th->getMessage() ]);
       } 
 
    }

    public function profile(Request $request,$id)
    {
        
        $record = Member::findOrFail($id);
        return view('profile', ['record' => $record]);
    
    }

}
