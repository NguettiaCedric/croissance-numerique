<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\demande;
use App\Models\demo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //  
    public function index()
    {
        return view('welcome');
    }
    

    public function contact()
    {
        return view('contact');
    }

    public function store_contact(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'compagnie' => 'required',
            
        ]);

        contact::create([
            'name'  => $request->name,
            'contact'  => $request->contact,
            'email'  => $request->email,
            'compagnie'  => $request->compagnie,
            'industrie'  => $request->industrie,
            'objet'  => $request->objet,
            'message'  => $request->message,
        ]);

        // return redirect()->route('contact');
        return back()->with('success' , 'Merci de nous avoir contacté, Nous vous prendrons en charge sous peu de temps !!!');
    }


    public function demandeDemo()
    {
        return view('demande-demo');
    }

    public function store_demandeDemo(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'compagnie' => 'required',
        ]);

        demande::create([
            'name'  => $request->name,
            'contact'  => $request->contact,
            'email'  => $request->email,
            'compagnie'  => $request->compagnie,
            'industrie'  => $request->industrie,
            'objet'  => $request->objet,
            'message'  => $request->message,
        ]);

        // return redirect()->route('contact');
        return back()->with('success' , 'Merci votre demande a été envoyé avec succès !!!');

    }

}
