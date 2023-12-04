<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create (){
        return view('accedi');
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            /*- il metodo attempt viene utilizzato per gestire i tentativi 
                di autenticazione da modulo di accesso dell'applicazione
                - se il tentativo ha successo bisogna rigenerare la sessione dell'utente per evitare la correzione della sessione
                - il metodo attempt accetta array di coppie chiave/valore come primo argomento.Tali valori verrano usati per trovare l'utente 
                nella tabella del database (viene fatto hashing automatico della password da laravel per il confronto delle password)*/
            $request->session()->regenerate();
            return redirect()->intended('/home');
            /* il metodo intended eindirizzerà l'utente all'URL a cui stava tentando di accedere 
            prima di essere intercettato dal middleware di autenticazione. È possibile fornire un 
            URI di fallback a questo metodo nel caso in cui la destinazione prevista non sia disponibile.*/
        }
        
        return back()->withErrors([
            'email' => 'Credenziali errate',
        ]);

    }
}
