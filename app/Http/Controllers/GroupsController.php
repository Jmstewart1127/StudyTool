<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Groups;
use App\User;
use App\GroupUsers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        
        $group = new Groups;
        
        $group->group_name = request('group_name');

        $group->created_by = $userId;

        $group->subject = request('subject');

        $group->private = request('private');

        $groupUsers = New GroupUsers;

        $groupUsers->user_id = $userId;

        $group->save();
        
        $groupUsers->group_id = $group->id;

        $groupUsers->save();

        return $this->show();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $groups = Groups::all();
        
        return view('groups.show', compact('groups'));
    }

    /*
    *   Shows open groups joinable by anyone
    */ 
    public function showOpenGroups() 
    {
        $groups = DB::table('groups')->where('private', '=', 0)->get();

        return view('groups.show', compact('groups', $groups));
    }

    public function showGroupById($id) 
    {
        $groups = DB::table('groups')->where('id', '=', $id)->get();

        return view('groups.showgrouppage', compact('groups', $groups));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
