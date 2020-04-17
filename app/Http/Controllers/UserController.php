<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all user from the database and return to view
        if (Auth::user()) {
//            $user = User::getModel();
            $user = Auth::user();
            return view('user.index',['user'=>$user]);
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create user
        return view('user.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persist the user in the database
        //form data is available in the request object
        $user = new User();
        //input method is used to get the value of input with its
        //name specified
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->department = $request->input('department');
        $user->phone = $request->input('phone');
        $user->save(); //persist the data
        return redirect()->route('user.index')->with('info','User Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the user
        $user = User::find($id);
        return view('user.edit',['user'=> $user]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Retrieve the user and update
        $user = User::find($request->input('id'));
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->department = $request->input('department');
        $user->phone = $request->input('phone');
        $user->save(); //persist the data
        return redirect()->route('user.index')->with('info','User Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retrieve the user
        $user = User::find($id);
        //delete
        $user->delete();
        return redirect()->route('user.index');
    }

}
