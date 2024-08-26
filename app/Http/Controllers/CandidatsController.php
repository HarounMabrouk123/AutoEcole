<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

use function Termwind\render;

class CandidatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        $candidats = User::where('usertype', 'candidat')->with('trainer')->get();
        return Inertia::render('Admin/candidats/Index',['candidats' => $candidats]) ;
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
        //
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
    {         $candidat = User::with('trainer')->find($id);
              return Inertia::render('Admin/candidats/Edit',['candidat' => $candidat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $candidat = User::where('id',$id)->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'trainer_id' => $request->input('trainer_id')

        ]) ;
        return Redirect::route('admin.dashbord.candidats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $candidat)
    {

        $candidat->delete() ;
        return Redirect::route('admin.dashbord.candidats.index');
          

    }
}
