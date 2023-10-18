<?php

namespace App\Http\Controllers;

use App\Models\Trainers;
use App\Http\Requests\StoreTrainersRequest;
use App\Http\Requests\UpdateTrainersRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Trainers::all();
        return view('admin/trainers/index', ['trainers' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/trainers/edit', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrainersRequest $request): RedirectResponse
    {
        //
        $trainers = [
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'location' => $request->location,
            'mobile' => $request->mobile,
            'qualifications' => $request->qualifications,
            'courses' => $request->courses,
            'photo' => $request->photo
            
        ];
        var_dump($trainers);
        Trainers::create($trainers);
        
        return redirect('trainers');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainers $trainers)
    {
        //
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainers $trainers)
    {
        //
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrainersRequest $request, Trainers $trainers)
    {
        //
        echo "update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainers $trainers)
    {
        //
        echo "destroy";
    }
}
