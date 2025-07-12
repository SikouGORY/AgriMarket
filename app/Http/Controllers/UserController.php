<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users =User::with(['agriculteur','acheteur','livreur'])->get();
        return response()->json($users);
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

    public function createDemon()
    {
        // $user1 = User::create([
        //     'name'=>'Lamine COULIBALY',
        //     'email'=>'coulbal@gmail.com',
        //     'tel'=>'73072365',
        //     'adresse'=>'sebeninkoro',
        //     'password'=>bcrypt('password')

        // ]);

        // $user1->agriculteur()->create([
        //     'zone_cultivée'=>'zone de kayes'
        // ]);

        // $user2 = User::create([
        //     'name'=>'Salihou TOURE',
        //     'email'=>'toure@gmail.com',
        //     'tel'=>'73072365',
        //     'adresse'=>'Niamana',
        //     'password'=>bcrypt('password')

        // ]);

        // $user2->acheteur()->create([
        //     'emplacement_boutique'=>'zone de kayes'
        // ]);

        $user3 = User::create([
            'name'=>'Mamadou Traore',
            'email'=>'traore@gmail.com',
            'tel'=>'73072365',
            'adresse'=>'sebeninkoro wereda',
            'password'=>bcrypt('password')
        ]);

        $user3->livreur()->create([
            'moyen_transport'=>'camion frogonet moto'
        ]);

        return redirect()->back()->with('les utilisateurs sont ajouter');
    }
}
