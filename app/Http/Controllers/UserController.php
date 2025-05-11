<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct(){
        $this->user = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('CRUD.home',[ "users" => $this->user::all()] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CRUD.user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requests = $request->except(['_token', '_method']);

        $creaed = $this->user->create([
            "name" => $request->input("firstname").' '.$request->input("lastname"),
            "firstname" => $request->input("firstname"),
            "lastname" => $request->input("lastname"),
            "email" => $request->input("email"),
            "password" => password_hash($request->input("password"),PASSWORD_DEFAULT),
            "city" => $request->input("city"),
            "state" => $request->input("state"),
            "birthdate" => $request->input("birthdate"),
            "address" => $request->input("address"),
            "phone" => $request->input("phone"),
            "cpf" => $request->input("cpf"),
        ]);

        if($creaed){
            return redirect('/crud')->with('success','User created successfully');
        }
        return redirect('/crud/')->with('faill', 'Something went wrong on creating user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('CRUD.user_edit',[ "user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request = $request->except(['_token','_method']);
        $updated = $this->user->where('id',$id)->update($request);

        if($updated){
            return redirect()->back()->with('success','User updated successfully');
        }
        return redirect()->back()->with('faill', 'Something went wrong on Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $destroyed =  $this->user->where('id',$request->input('user_id'))->delete();

        if($destroyed){
            return redirect('/crud')->with('success','User destroyed with successfully');
        }
        return redirect('/crud/')->with('faill', 'Something went wrong on destroy user');
    }
}
