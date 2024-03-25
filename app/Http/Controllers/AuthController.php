<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            //Cette regex permet de voir si il y a un . et quelque chose après
            //'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|exists:users',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'min:6|max:20'
        ]);

        //Check si la connexion est bonne
        $credentials = $request->only('email', 'password');

        if (!Auth::validate($credentials)) {

            //Prend le message d'erreur dans le dossier de langue
            //return redirect(route('login'))->withErrors(trans('auth.password'));
            return redirect(route('login'))->withErrors(trans('auth.failed'))->withInput();
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        // $userId = Auth::id();
        // return $userId;
        
        //Intended va rediriger vers la page que la personne essayait d'entrer avant de redirger vers la page par défaut. 
        //Ex: Si http://localhost:8000/users est la page qui à causer la demande de login, c'est là que l'utilisateur va être envoyer une fois connecté.
        return redirect()->intended(route('home'))->withSuccess('Signed in');
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
    public function destroy()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
