<?php

namespace App\Http\Controllers;

use App\Models\document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::select()->orderby('id')->paginate(5);

        return view('documents.index', ["documents" => $documents]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'titre_en' => 'required|max:50',
            'titre_fr' => 'max:50',
            'document'   => 'required|file|mimes:pdf,zip,doc'
        ]);

        $titre = [
            'en' => $request->titre_en,
        ];
        if($request->titre_fr != null) { $titre = $titre + ['fr' => $request->titre_fr];};

        //Envoi le fichier dans le dossier uploads dans storage/app/public
        $file = $request->file('document');
        $fileName = $file->getClientOriginalName();
        $fileName = time().$fileName;
        $file->storeAs(path: 'public/uploads', name: $fileName);

        Document::create([
            'titre' => $titre,
            'document' => $fileName,
            'date_de_publication' => date('Y-m-d'),
            'user_id' => Auth::id()
        ]);

        return redirect()->route('document.index')->with('success', 'Document uploaded successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {

        return view('documents.edit', ["document" => $document]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {

        $request->validate([
            'titre_en' => 'required|max:50',
            'titre_fr' => 'max:50',
            'document'   => 'required|file|mimes:pdf,zip,doc'
        ]);

        $titre = [
            'en' => $request->titre_en,
        ];
        if($request->titre_fr != null) { $titre = $titre + ['fr' => $request->titre_fr];};

        //Envoi le fichier dans le dossier uploads dans storage/app/public
        $file = $request->file('document');
        $fileName = $file->getClientOriginalName();
        $fileName = time().$fileName;
        $file->storeAs(path: 'public/uploads', name: $fileName);

        $document->update([
            'titre' => $titre,
            'document' => $fileName,
            'date_de_publication' => $document->date_de_publication,
            'user_id' => $document->user_id
        ]);

        return redirect()->route('document.index')->with('success', 'Document uploaded successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {

        if(Auth::id() === $document->user_id){
            File::delete(app_path().'/public/uploads/'.$document->document);
            $document->delete();
            return redirect()->route('document.index')->with('success', 'Document supprimer avec succès!');
        }
        return redirect()->route('document.index');

    }
}
