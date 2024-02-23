<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    public function index()
    {
        //select * from tasks;
        $etudiants = Etudiant::all();
        return view('etudiant.index', ["etudiants" => $etudiants]);
        //return $tasks[0]['title'];
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {

        Etudiant::select()->join('villes', 'ville_id', '=', 'villes.id')->get();

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
            'adresse' => 'required|max:50',
            //Ref : https://laracasts.com/discuss/channels/general-discussion/mobile-phone-number-validation
            //Credits vont à Mahaveer
            'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'date_de_naissance' => 'required|date',
            'ville_id' => 'required|numeric'
        ]);

        $etudiant = Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'ville_id' => $request->ville_id
        ]);

        return redirect()->route('etudiant.show', $etudiant->id)->with('success', 'Étudiant créer avec succès!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $task)
    {
        return view('task.edit', ["task" => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $task)
    {
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|string',
            'completed' => 'nullable|boolean',
            'due_date' => 'nullable|date'

        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->completed,
            'due_date' => $request->due_date
        ]);

        return redirect()->route('task.show', $task->id)->with('success', 'Task edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('success', 'Task deleted successfully');
    }

    public function completed($completed)
    {
        $task = Etudiant::select()->where('completed', $completed)->get();
        return view('task.completed', ["tasks" => $task]);
    }
}
