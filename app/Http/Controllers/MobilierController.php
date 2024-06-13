<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MobilierRequest;
use App\Models\mobiliers;

class MobilierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('mobilier');
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
    // public function store(MobilierRequest $request)
    // {
    //     $mobilierValide = $request -> Validated();
    //     /**@var UploadFile|$image */
    //     $image = $request->$mobilierValide['image'];
    //     if($image!=null && !$image->getError()){
    //         $mobilierValide['image']=$image->store('upload','public');
    //     }
    //     mobiliers::create($mobilierValide);
    //     return to_route('home.index')->with('Success','Mobilier saved successfully');
    // }

    public function store(MobilierRequest $request)
{
    // Validate the request data
    $validatedData = $request->validated();

    // Check if an image is provided and handle the file upload
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $validatedData['image'] = $request->file('image')->store('upload', 'public');
    }

    // Create a new Mobiler record using the validated data
    Mobiliers::create($validatedData);

    // Redirect to the home index route with a success message
    return redirect()->route('home.index')->with('success', 'Created Successfully');
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
        //Suppression dans la BD
        Mobiliers::where('id', $id)->delete();
        return to_route('home.index');
    }
}
