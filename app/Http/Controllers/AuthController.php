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
        //Cricket noises
    }

    /**
     * Login
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Validation du login
     */
    public function store(Request $request)
    {
        $request->validate([
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

        
        //Intended va rediriger vers la page que la personne essayait d'entrer avant de redirger vers la page par défaut. 
        //Ex: Si http://localhost:8000/users est la page qui à causer la demande de login, c'est là que l'utilisateur va être envoyer une fois connecté.
        return redirect()->intended(route('home'))->withSuccess('Signed in');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Cricket noises
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Cricket noises
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Cricket noises
    }

    /**
     * Logout
     */
    public function destroy()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
