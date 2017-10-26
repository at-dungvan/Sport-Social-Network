<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        return $this->showAll($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
        $this->validate($request, $rule);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        return $this->showOne($user, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return $this->showOne($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findorFail($id);
        $rule = [
            'email' => 'email|unique:users,email,'.$user->id,
            'password' => 'min:6|confirmed',
            'is_admin' => 'in:' . User::ADMIN_USER . ',' . User::REGULAR_USER,
            'phone_number' => 'require',
            'gender' => 'in:' . User::STR_FEMALE . ',' . User::STR_MALE
        ];
        $this->validate($request, $rule);

        if($request->has('full_name')) {
            $user->full_name = $request->full_name;
        }
        if($request->has('email') && $user->email != $request->email) {
            $user->email = $request->email;
        }
        if($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        if($request->has('is_admin')) {
            $user->is_admin = $request->is_admin;
        }
        if(!$user->isDirty()) {
            return $this->errorResponse('You need specify a different value to update', 422);
        }

        $user->save();

        return $this->showOne($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
