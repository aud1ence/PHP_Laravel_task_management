<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Nguyen Van Ngan',
                'phone' => '0989898',
                'email' => 'test@gmail.com'
            ],
            [
                'id' => 2,
                'name' => 'Nguyen Van Cuong',
                'phone' => '0989898123',
                'email' => 'test123@gmail.com'
            ],
        ];
        return view('/modules/customer/index', compact('users'));
    }

    public function create()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Nguyen Van Ngan',
                'phone' => '0989898',
                'email' => 'test@gmail.com'
            ],
            [
                'id' => 2,
                'name' => 'Nguyen Van Cuong',
                'phone' => '0989898123',
                'email' => 'test123@gmail.com'
            ],
        ];
        return view('/modules/customer/create', compact('users'));
    }

    public function store(Request $request)
    {
        return view('/modules/customer/index');
    }


    public function show($id)
    {
        $id = $id - 1;
        $users = [
            [
                'id' => 1,
                'name' => 'Nguyen Van Ngan',
                'phone' => '0989898',
                'email' => 'test@gmail.com'
            ],
            [
                'id' => 2,
                'name' => 'Nguyen Van Cuong',
                'phone' => '0989898123',
                'email' => 'test123@gmail.com'
            ],
        ];
        return view('modules/customer/show', compact('users', 'id'));
    }

    public function edit($id)
    {
        $id = $id - 1;
        $users = [
            [
                'id' => 1,
                'name' => 'Nguyen Van Ngan',
                'phone' => '0989898',
                'email' => 'test@gmail.com'
            ],
            [
                'id' => 2,
                'name' => 'Nguyen Van Cuong',
                'phone' => '0989898123',
                'email' => 'test123@gmail.com'
            ],
        ];
        return view('/modules/customer/edit', compact('users', 'id'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
