<?php

namespace App\Http\Controllers;

use App\Models\document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
use League\CommonMark\Node\Block\Document as BlockDocument;

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
            'file.*'   => 'required|mimes:doc, pdf, zip'
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
            'document' => $request->document,
            'date_de_publication' => date('Y-m-d'),
            'user_id' => Auth::id()
        ]);

        return back()->withSuccess('Document uploaded successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {

    }
}
