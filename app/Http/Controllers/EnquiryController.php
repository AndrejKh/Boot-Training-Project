<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquires;
use Illuminate\Support\Facades\Auth;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trainer_id;
        $isAdmin = false;
        if (Auth::check()) {
            $trainer_id = Auth::user()->id;
            $isAdmin = Auth::user()->type;
        }
        $enquires;
        
        if($isAdmin){
            $enquires = Enquires::with('course', 'trainer')->get();
        }else{
            $enquires = Enquires::with('course', 'trainer')->where('trainer_id', $trainer_id)->get();
        }
        
        return view('enquireslist', ['enquires' => $enquires]);
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
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','same:verify_email'],
            'phone' => ['required', 'regex:/^(\+\d{1,3}(\s|)\(\d{3}\)(\s|)\d{3}(\s|)\d{4}|\+\d{1,3}(\s|)\d{3}(\s|)\d{3}(\s|)\d{4})$/'],
            'organName' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:512'],
            'title' => ['string', 'max:255'],
        ]);
        
        if($request->trainer_id){
            Enquires::create([
                'trainer_id' => $request->trainer_id,
                'title' => $request->title,
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'organName' => $request->organName,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);
        }else if($request->course_id){
            Enquires::create([
                'course_id' => $request->course_id,
                'title' => $request->title,
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'organName' => $request->organName,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);
        }else{
            echo "Something went wrong.";
        }
        return redirect('backsoon');
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
