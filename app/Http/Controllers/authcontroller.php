<?php

namespace App\Http\Controllers;

use App\Http\Requests\registration;
use Illuminate\Http\Request;
use App\Models\User;

class authcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }
    public function registration()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Registration $request)
    {
        $validation=$request->validated();
        User::create(
            $validation
        );
        //dd($validation);
        return to_route('auth.login')->withErrors([

            // "name" => ["Entrez votre nom"],
            // "postName" => ["Entrez votre postnom"],
        ]);
        //dd($validation);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
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
