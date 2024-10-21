<?php

namespace App\Http\Controllers;
use App\Models\Registers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     */




    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|between:8,255',
                'password_confirmation' => 'required|same:password',
                'address' => 'required',
                'phone' => 'required',
                // 'birthday' => 'required'
            ]
            );
       $registers = new Register;
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
