<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::with('car')->get();
        return Inertia::render('Admin/Trainers/Index',['trainers'=>$trainers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Trainers/AddTrainer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=> 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newImageName = time() . '-' . $request->title . '.' . $request->image->extension() ;
        $request->image->move(public_path('images'), $newImageName) ;

        $car = Trainer::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'description' => $request->input('description'),
            'card_id' => $request->input('car_id'),
            'image' => $newImageName
        ]

        );
        return Redirect::route('admin.dashbord.trainer.index');
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
    public function edit(Trainer $trainer)
    {
        
        return Inertia::render('Admin/Trainers/EditTrainer',['trainer' => $trainer]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainer = Trainer::where('id',$id)->update([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'description' => $request->input('description'),
            'car_id' => $request->input('car_id')

        ]) ;
        return Redirect::route('admin.dashbord.trainer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete() ;
        return Redirect::route('admin.dashbord.trainer.index');
}
}
