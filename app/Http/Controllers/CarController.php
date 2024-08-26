<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

use function Pest\Laravel\call;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return Inertia::render('Admin/cars/Index',['cars'=>$cars]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/cars/AddCar');
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

        $car = Car::create([
            'matricule' => $request->input('matricule'),
            'distance' => $request->input('distance'),
            'marque' => $request->input('marque'),
            'image' => $newImageName
        ]

        );
        
        return Redirect::route('admin.dashbord.cars.index');
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
    {   $car = Car::find($id);
        return Inertia::render('Admin/cars/EditCar',['car'=>$car]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $car = Car::where('id',$id)->update([
            'marque' => $request->input('marque'),
            'matricule' => $request->input('matricule'),
            'distance' => $request->input('distance')

        ]) ;
        return Redirect::route('admin.dashbord.cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete() ;
        return Redirect::route('admin.dashbord.cars.index');

    }
}
