<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Communication;
use App\Models\Service;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminPanelController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
//        if (Auth::check()) {
//            if (Auth::user()->role === 'admin') {
//                $notice = Announcement::count();
//                $services = Service::count();
//                $users = User::count();
//                $messages = Communication::count();
//                return view('admin.index', compact('notice', 'services', 'users', 'messages'));
//            } else {
//                $messages = Communication::where('from_user_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
//                $data = Announcement::all();
//                return view('user.index', compact('messages', 'data'));
//            }
//        }else{
//            return view('admin/login');
//        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return view('login/login');
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
        //
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
        //
    }


}
