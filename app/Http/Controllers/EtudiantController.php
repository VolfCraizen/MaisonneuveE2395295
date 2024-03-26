<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::select()->orderby('nom')->paginate(5);

        return view('etudiant.index', ["etudiants" => $etudiants]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiant.show', ["etudiant" => $etudiant]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Ville::all();
        return view('etudiant.create', ["villes" => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|max:50',
            'password' => 'min:6|max:20',
            'adresse' => 'required|max:50',
            //Ref : https://laracasts.com/discuss/channels/general-discussion/mobile-phone-number-validation
            //Credits vont à Mahaveer
            'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'date_de_naissance' => 'required|date',
            'ville_id' => 'required|exists:villes,id'
        ]);

        $etudiant = Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'ville_id' => $request->ville_id
        ]);

        $user = User::create([
            'id' => $etudiant->id,
            'name' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('etudiant.show', $etudiant->id)->with('success', 'Student created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::all();
        return view('etudiant.edit', ["etudiant" => $etudiant, "villes" => $villes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required|max:50',
            'adresse' => 'required|max:50',
            //Ref : https://laracasts.com/discuss/channels/general-discussion/mobile-phone-number-validation
            //Credits vont à Mahaveer
            'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'date_de_naissance' => 'required|date',
            'ville_id' => 'required|exists:villes,id'

        ]);

        $etudiant->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'ville_id' => $request->ville_id
        ]);

        return redirect()->route('etudiant.show', $etudiant->id)->with('success', 'Student edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //Suppression de la base de données
        $etudiant->delete();
        return redirect()->route('etudiant.index')->with('success', 'Student deleted successfully!');
    }
}
