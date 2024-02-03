<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Models\event;
use App\Models\Monster; 

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        $galleryPath = public_path('gallery');
        $imageNames = File::files($galleryPath);
        $events = event::all();

        $monsters = Monster::all();

        return view('main', ['users' => $users, 'imageNames' => $imageNames , 'events'=> $events , 'monsters' => $monsters])->with('modul', 'admin');
    }
    public function show(Request $request)
    {
       
    }
}