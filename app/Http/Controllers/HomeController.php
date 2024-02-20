<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\contact;
use App\Models\demande;
use App\Models\demo;
use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //  
    public function index()
    {   
        $projets = projet::where('status', 1)->get();
        return view('welcome' , [
            'projets' => $projets,
        ]);
    }

   /*  public function projet()
    {   
        $projets = projet::all();
        // $projets = Projet::orderBy('created_at', 'desc')->get();
        return view('welcome' , [
            'projets' => $projets,
        ]);
    } */
    

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

        $contact = contact::create([
            'name'  => $request->name,
            'contact'  => $request->contact,
            'email'  => $request->email,
            'compagnie'  => $request->compagnie,
            'industrie'  => $request->industrie,
            'objet'  => $request->objet,
            'message'  => $request->message,
        ]);
        
        // dd($contact);

        Mail::to($contact->email)->send(new ContactMail($contact));

        // return redirect()->route('contact');
        return back()->with('success' , 'Merci de nous avoir contactés ! Nous vous prendrons en charge rapidement. !!!');
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

        $demande = demande::create([
            'name'  => $request->name,
            'contact'  => $request->contact,
            'email'  => $request->email,
            'compagnie'  => $request->compagnie,
            'industrie'  => $request->industrie,
            'objet'  => $request->objet,
            'message'  => $request->message,
        ]);

        Mail::to($demande->email)->send(new ContactMail($demande));
        // return redirect()->route('contact');
        return back()->with('success' , 'Merci votre demande a été envoyé avec succès !!!');

    }

}
