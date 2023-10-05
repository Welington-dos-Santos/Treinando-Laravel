<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('users.usuario', compact('users'));
    }

    public function show($id)
    {
        //$user = User::where('id', $id)->first();

        if (!$user = User::find($id))
            return redirect()->route('usuario.index');

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);

        //return redirect()->route('usuario.show', $user->index);
        return redirect()->route('usuario.index');

        //metodos:
        //$user = new User;
        //$user->name = $request->get('name', 'Nome_do_Usuario');
        //$user->name = $request->name;
        //$user->email = $request->email;
        //$user->password = $request->password;
        //$user->save();
    }
}
