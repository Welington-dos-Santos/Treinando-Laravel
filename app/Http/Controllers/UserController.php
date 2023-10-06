<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
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

    public function store(StoreUpdateUserFormRequest $request)
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
    
    public function edit($id)
    {
        if (!$user = User::find($id))
        return redirect()->route('usuario.index');

        return view('users.edit', compact('user'));
    }
        
    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = User::find($id))
        return redirect()->route('usuario.index');

        $data = $request->only('name','email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return redirect()->route('usuario.index');
    }

    public function destroy($id)
    {
        if (!$user = User::find($id))
            return redirect()->route('usuario.index');

        $user->delete();

        return redirect()->route('usuario.index');
    }
}