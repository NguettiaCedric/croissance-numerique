<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // $projets = Projet::orderBy('created_at', 'desc')->get();
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

        $projet = new projet();
        $projet->title = $request->input('title');
        $projet->description = $request->input('description');
        $projet->image = $fileNameToStore;
        $projet->status = 1;
        
        $projet->save();
        
        
        
        // Mettez à jour le lien avec l'ID du projet
        $projet->lien = route('projet.show', ['id' => $projet->id]);
        $projet->save();

        

        return redirect()->route('liste-projet')->with('success' , 'Projet enregistré avec succès !!!');;
        // return back()->with('success' , 'Projet enregistré avec succès !!!');

    }


    public function show_projet($id)
    {
        // Récupérer le projet en fonction de l'ID
        $projet = Projet::findOrFail($id);

        // Passer le projet à la vue
        return view('admin.projets.show', ['projet' => $projet]);
    }


    public function edit_projet($id)
    {
        $projet = projet::find($id);
        // dd($projet);
        return view('admin.projets.edit', [
            'projet' => $projet,
        ]);
    }



    public function update_projet1(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            // 'description' => 'required',
            // 'image' => 'image|nullable|max:1999',
        ]);

       /*  $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999',
        ]); */


        $projet = Projet::find($id);

        // dd($projet);

        $projet = projet::find($request->input('id'));
        // dd($projet);


        $projet->title = $request->input('title');
        $projet->description = $request->input('description');


        if ($request->hasFile('image')) {

            $fileNameWithExt = $request->file('image')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            $path = $request->file('image')->storeAs('public/projet_image', $fileNameToStore);

            // print('Image selectionnee');

            if ($projet->image != 'noimage.jpg') {
               Storage::delete('public/projet_image/'.$projet->image); 
            }

            $projet->image = $fileNameToStore;

            // $projet->update();
        }

        $projet->update();

        // return redirect()->route('contact');
        return back()->with('success' ,'Projet enregistré avec succès !!!');

    }


    public function update_projet(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'image|nullable|max:1999',
        ]);

        $projet = Projet::find($id);

        if (!$projet) {
            return back()->with('error', 'Projet non trouvé');
        }

        $projet->title = $request->input('title');
        $projet->description = $request->input('description');

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'image|nullable|max:1999',
            ]);

            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            $path = $request->file('image')->storeAs('public/projet_image', $fileNameToStore);

            if ($projet->image != 'noimage.jpg') {
                Storage::delete('public/projet_image/'.$projet->image);
            }

            $projet->image = $fileNameToStore;

            $projet->save();
        }

        $projet->save();

        return back()->with('success', 'Projet enregistré avec succès !!!');
    }

    
    public function activer_projet($id){
        $projet = projet::find($id);
        $projet->status = 1;

        $projet->save();
        return back();
    }

    public function desactiver_projet($id){

        $projet = projet::find($id);
        $projet->status = 0;

        $projet->save();
        return back();
    }


    public function delete_projet($id)
    {
        $projet = projet::find($id);
        // dd($projet);
        // if ($projet->image != 'noimage.jpg') {
            Storage::delete('public/projet_image/'.$projet->image);
        // }

        $projet->delete();

        return back()->with('status', 'Le projet a été supprimé avec succès !!!');
    }

}
