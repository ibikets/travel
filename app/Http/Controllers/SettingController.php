<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Role;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $airlines = Airline::paginate(2);
        $roles = Role::paginate(2);
        $statuses = Status::paginate(2);

        return view('admin.setting.index', compact('airlines', 'roles', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    public function storeAirline(Request $request)
    {
        //


        if ($this->validate($request, ['name'=>'unique:airlines'])){
            Airline::create($request->all());
            Session::flash('msg', 'Airline Added Successfully');
        }else{
            Session::flash('del_msg', 'Airline Already Exists');
        };


        return redirect('/admin/setting/index');
    }

    public function storeRole(Request $request)
    {
        //



        if ($this->validate($request, ['name'=>'unique:roles'])){
            Role::create($request->all());
            Session::flash('msg', 'Role Added Successfully');
        }else{
            Session::flash('del_msg', 'Role Already Exists');
        };


        return redirect('/admin/setting/index');
    }

    public function storeStatus(Request $request)
    {
        //
        if ($this->validate($request, ['name'=>'unique:statuses'])){
            Status::create($request->all());
            Session::flash('msg', 'A New Status has been Created');
        }else{
            Session::flash('del_msg', 'Status Already Exists');
        }

        return redirect('admin/setting/index');
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

    public function destroyAirline($id)
    {
        //

        $airline = Airline::findOrFail($id);

        Session::flash('del_msg', 'Airline: ' . $airline->name . '  has been deleted successfully');

        $airline->delete();

        return redirect('admin/setting/index');
    }

    public function destroyRole($id)
    {
        //

        $role = Role::findOrFail($id);

        Session::flash('del_msg', 'Role: ' . $role->name . ' Has Been Deleted');

        $role->delete();

        return redirect('admin/setting/index');
    }

    public function destroyStatus($id)
    {
        //
        $status = Status::findOrFail($id);
        Session::flash('del_msg', 'Status: ' . $status->name . ' Has Been Deleted');
        $status->delete();

        return redirect('admin/setting/index');
    }
}
