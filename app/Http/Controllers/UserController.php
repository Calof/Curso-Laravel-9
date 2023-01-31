<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
       

        return view('users.index', compact('users'));

    }

    public function show($id)
    {
        $user = User::where('id', $id)-> first();
        dd($user);

        dd('users.show', $id);

    }
}
