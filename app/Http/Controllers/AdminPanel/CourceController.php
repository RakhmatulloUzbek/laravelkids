<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Art_Lessons;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Art_Lessons::all();
        return view('admin.course.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Teachers::all();
        return view('admin.course.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new Art_Lessons();
        $data->category=$request->category;
        $data->title=$request->title;
        $data->teacher_id=$request->teacher_id;
        $data->description=$request->description;
        $data->age_group=$request->age_group;
        $data->duration=$request->duration;
        $data->video_url=$request->video_url;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();

        return redirect('admin/courses/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data= Art_Lessons::find($id);
        $teachers=Teachers::all();
        return view('admin.course.edit',compact('data','teachers'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data= Art_Lessons::find($id);
        $data->category=$request->category;
        $data->title=$request->title;
        $data->teacher_id=$request->teacher_id;
        $data->description=$request->description;
        $data->age_group=$request->age_group;
        $data->duration=$request->duration;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();

        return redirect('admin/courses/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data= Art_Lessons::find($id);
        if($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/courses/');
    }
}
