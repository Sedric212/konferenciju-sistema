<?php

namespace App\Http\Controllers\Admin;

use App\Data\UserData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index', ['users' => UserData::all()]);
    }

    public function edit(int $id)
    {
        return view('admin.users.edit', ['user' => UserData::find($id), 'id' => $id]);
    }

    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:254'],
        ]);
        UserData::update($id, $data);

        return to_route('admin.users.index')->with('status', __('messages.saved'));
    }
}
