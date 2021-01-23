<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\County;

class UserController extends Controller
{
    /* list of users */
    public function index()
    {
        $users = User::with(['role', 'county'])->paginate();
        return view('users.index', compact('users'));
    }

    /* localhost:8000/users/create */
    public function create()
    {
        return view('users.create');
    }

    /* POST localhost:8000/users */
    public function store(Request $request)
    {
        /* validacija podataka: ime mora biti manje od 255 znakova, biti unique, itd. */
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'last_online' => 'required|date',
            'password' => 'required|max:255',
            'county_id' => 'required|max:255',
            'role_id' => 'required|max:255'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        return view('users.show', compact('user'));
    }

    /* localhost:8000/users/1 */
    public function show($id)
    {
        $user = User::with(['role', 'county'])
            ->findOrFail($id);

        return view('users.show', compact('user'));
    }

    /* localhost:8000/users/1/edit */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::pluck('name', 'id');
        $counties = County::pluck('name', 'id');

        return view('users.edit',
            compact('user', 'roles', 'counties')
        );
    }

    /* PUT localhost:8000/users/1 */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'county_id' => 'required',
            'role_id' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->fill($validated);
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }

    /* DELETE localhost:8000/users/1 */
    public function destroy($id)
    {
        /* primjer upita kojeg generira linija ispod: DELETE FROM users WHERE id = 1 */
        User::destroy($id);

        /* nakon brisanja, napravi redirect na index stranicu */
        return redirect()->route('users.index');
    }
}