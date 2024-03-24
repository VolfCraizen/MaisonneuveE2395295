<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::select()->orderby('date_de_creation', 'desc')->paginate(5);

        return view('posts.index', ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre_en' => 'required|max:50',
            'texte_en' => 'required|max:255',
            'titre_fr' => 'max:50',
            'texte_fr' => 'max:255',
        ]);

        $titre = [
            'en' => $request->titre_en,
        ];
        if($request->titre_fr != null) { $titre = $titre + ['fr' => $request->titre_fr];};

        $texte = [
            'en' => $request->texte_en,
        ];
        if($request->texte_fr != null) { $texte = $texte + ['fr' => $request->texte_fr];};
        
        posts::create([
            'titre' => $titre,
            'texte' => $texte,
            'date_de_creation' => date('Y-m-d'),
            'user_id' => Auth::id()
        ]);

        return back()->withSuccess('Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(posts $posts)
    {
        //
    }
}