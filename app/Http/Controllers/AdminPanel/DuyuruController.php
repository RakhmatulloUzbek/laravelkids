<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DuyuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Announcement::all();
        return view('admin.notice.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Announcement();
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/notice/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data= Announcement::find($id);
        return view('admin.notice.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data= Announcement::find($id);
        return view('admin.notice.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data=Announcement::find($id);
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();

        return redirect('admin/notice/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data= Announcement::find($id);
        if($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/notice/');
    }
}
