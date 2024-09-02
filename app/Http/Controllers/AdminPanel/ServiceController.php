<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchServiceRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Art_Lessons;
use App\Models\Books;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Art_Lessons::all();
        return view('admin.course.index', compact('data'));
//        return view('admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new Service();
        $data->category=$request->category;
        $data->title=$request->title;
        $data->keyword=$request->keyword;
        $data->description=$request->description;
        $data->price=$request->price;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();

        return redirect('admin/course/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data= Service::find($id);
        return view('admin.course.show',[
            'data'=>$data
        ]);
    }
    public function searchService(SearchServiceRequest $request)  {

        $query = $request->input('query');

        // Kitaplarda anahtar kelimeye göre arama yap
        $data = Service::where('title', 'like', "%{$query}%")
            ->orWhere('keyword', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();

        return view('admin.course.index', compact('data'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data= Service::find($id);
        return view('admin.course.edit',[
            'data'=>$data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
//        if ($request->hasFile('image') || $request->file('image')) {
//            $path = $request->file('img')->store('images');
//            echo $path; // Dosya yolu başarıyla yazdırılır
//        } else {
//            echo 'No file uploaded';
//        }
        $data=Service::find($id);
        $data->category=$request->category;
        $data->title=$request->title;
        $data->keyword=$request->keyword;
        $data->description=$request->description;
        $data->price=$request->price;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();

        return redirect('admin/course/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data= Service::find($id);
        if($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/course/');
    }
}
