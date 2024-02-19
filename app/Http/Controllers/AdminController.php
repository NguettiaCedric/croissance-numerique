<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\projet;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function projet()
    {   
        $projets = projet::all();
        return view('admin.projets.index' , [
            'projets' => $projets,
        ]);
    }

    public function projets()
    {
        return view('admin.projets.create');
    }

    public function store_projets(Request $request)
    {   
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999',
        ]);

        if ($request->hasFile('image')) {

            $fileNameWithExt = $request->file('image')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            $path = $request->file('image')->storeAs('public/projet_image', $fileNameToStore);

            // print('Image selectionnee');
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }



        projet::create([
            'title'  => $request->title,
            'description'  => $request->description,
            'image'  => $fileNameToStore,
        ]);

        // return redirect()->route('contact');
        return back()->with('success' , 'Projet enregistré avec succès !!!');

    }
}
