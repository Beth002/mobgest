<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobiliers;

class HomeController extends Controller
{
    public function index(){
        $ListMobiliers=mobiliers::all();
        return view('home', ['mobiliers'=>$ListMobiliers]);
    }
}
