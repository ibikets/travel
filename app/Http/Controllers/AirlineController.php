<?php

namespace App\Http\Controllers;

use App\Airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $airlines = Airline::paginate(5);

        return view('admin.airline.index',compact('airlines'));
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


        if ($this->validate($request, ['name'=>'unique:airlines'])){
            Airline::create($request->all());
            Session::flash('msg', 'Airline Added Successfully');
        }else{
            Session::flash('del_msg', 'Airline Already Exists');
        };


        return redirect('/admin/airline/index');
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

        $airline = Airline::findOrFail($id);

        return view('admin.airline.edit', compact('airline'));
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

        Airline::findOrFail($id)->update($request->all());

        Session::flash('msg', 'Airline Edited Successfully');


        return redirect('/admin/airline/index');
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

        $airline = Airline::findOrFail($id);

        Session::flash('del_msg', 'Airline has been deleted successfully');

        $airline->delete();

        return redirect('admin/airline/index');
    }
}
