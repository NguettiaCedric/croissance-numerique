<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
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
        ]);

        return redirect()->route('contact');

    }


    public function demandeDemo()
    {
        return view('demande-demo');
    }

}
