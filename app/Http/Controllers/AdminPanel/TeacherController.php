<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Teachers::all();
        return view('admin.teachers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new Teachers();
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->bio=$request->bio;
        $data->password=Hash::make($request->password);
        if($request->file('image')){
            $data->profile_pic=$request->file('image')->store('images');
        }
        $data->save();

        return redirect('admin/teachers/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data= Teachers::find($id);
        return view('admin.teachers.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data= Teachers::find($id);
        return view('admin.teachers.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data= Teachers::find($id);
        if($data->profile_pic) {
            Storage::delete($data->profile_pic);
        }
        $data->delete();
        return redirect('admin/teachers/');
    }
}
