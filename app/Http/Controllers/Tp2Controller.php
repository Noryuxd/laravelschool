<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Tp2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("tp-2");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $test = "";
        return view("tp-2");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $password = Hash::make($request->input("password"));
        dd(
            "name: " . $name,
            "email: " . $email,
            "password: " . $password
        );
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
