<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpadeteUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user; 
    }

    public function index(Request $request)
    {
        
        

        $users = $this->model->getUsers(search: $request->search ?? '');
       

        return view('users.index', compact('users'));

    }

    public function show($id)
    {
        //$user = User::where('id', $id)-> first();
        if(!$user = User::find($id))
        return redirect()->route('users.index');

        

        return view('users.show',compact("user"));

    }
    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpadeteUserFormRequest $request)
    {
       
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);
       
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if(!$user = User::find($id))
        return redirect()->route('users.index');
        
        return view('users.edit', compact('user'));
    }


    public function update(StoreUpadeteUserFormRequest $request, $id)
    {
        if(!$user = User::find($id))
        
        return redirect()->route('users.index');
        
        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);
       
            $user->update($data);

            return redirect()->route('users.index'); 
    }
    public function destroy($id)
    {
        
        if(!$user = User::find($id))
            return redirect()->route('users.index');

        $user->delete();

        return view('users.show',compact("user"));

    }
}
