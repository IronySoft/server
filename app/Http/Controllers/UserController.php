<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('admin.home.index', ['users' => User::all()]);
    }


    public function create()
    {

        return view('admin.home.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'roll' => 'required',
        ]);
        return $request;

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $row = User::findOrFail($id);

        if (!is_null($row)) {
            User::destroy($id);
        }
        return response()->json(
            ['message' => 'Data Deletion Problem']
        );
    }
}
