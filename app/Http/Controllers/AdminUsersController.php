<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        //

//        return "View All User page";
        $users = User::paginate(5);

        return view('admin.users.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if (trim($request->password) == ''){

            $input = $request->except('password');

        }elseif($request->password == $request->confirm_password){

            $input = $request->all();
            $input['password'] = bcrypt($request->password);

        }else{
            Session::flash('del_msg', 'Please ensure your passwords are the same');
            return redirect()->back();
        }


        if ($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['path'=>$name]);

            $input['photo_id'] = $photo->id;


        }
        $input['name'] = $request->firstname . " " . $request->othername . " " . $request->lastname;

        if ($this->validate($request, ['email'=>'unique:users'])){
            $user = User::create($input);
            Session::flash('msg', 'Staff Member ' . $user->name . ' Has Been Added Successfully');
        }else{
            Session::flash('del_msg', 'Email ' . $input['email'] . ' already Exist. Please use another Email.');
        }
//
//
//
        return redirect('admin/users/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
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

        return "delete User page";
    }
}
