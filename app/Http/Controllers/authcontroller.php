<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\registration;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
    // public function home()
    // {
    //     return view('home');
    // }
    public function login(LoginRequest $request){
        $credancial = $request -> Validated();
        if (Auth::attempt($credancial)){
           $request->session()->regenerate();
           return redirect()->intended(route('home.index'));
        }
        return to_route ('auth.login')->withErrors(
            ["email" => "Email Invalide"]
            )->onlyInput('email');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Registration $request)
    {
        $validation = $request -> validated();
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
