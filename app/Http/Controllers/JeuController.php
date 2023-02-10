<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\Categorie;
use App\Models\Tag;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeux = Jeu::orderBy('id', 'asc')->get();
        return view('jeux.index', ['jeux' => $jeux]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jeux.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->validate([
            'titre' => 'required|string|max:45|min:5'
        ])) {
            $titre = $request->input('titre');
            $jeu = new Jeu();
            $jeu->titre = $titre;
            $jeu->save();
            return redirect()->route('jeux.show', $jeu->id);
        } else {
            return redirect()->route('jeux.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jeu = Jeu::find($id);
        $categorie = $jeu->categorie;
        $tags = $jeu->tags;
        return view('jeux.show', compact('jeu', 'categorie', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jeu = Jeu::find($id);
        $categories = Categorie::all();
        $tags = $jeu->tags;
        return view('jeux.edit', [
            'jeu' => $jeu,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->validate([
            'titre' => 'required|string|max:45|min:5'
        ])) {
            $titre = $request->input('titre');
            $categorie_id = $request->input('categorie_id');
            $jeu = Jeu::find($id);
            $jeu->titre = $titre;
            $jeu->categorie_id = $categorie_id;
            $jeu->save();
            return redirect()->route('jeux.show', $jeu->id);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jeu::destroy($id);
        return redirect()->route('jeux.index');
    }

    public function attach(Request $request, $id_jeu)
    {
        if ($request->validate([
            'nom' => 'required|string|max:45|min:3'
        ]))
            $nom_recu = $request->input('nom');

        $tag = Tag::firstOrCreate(['nom' => $nom_recu]);
        $jeu = Jeu::find($id_jeu);
        $tags = $jeu->tags;
        if (!$tags->contains($tag->id)) {
            $jeu->tags()->attach($tag->id);
        }
        return redirect()->back();
    }

    public function detach($id_jeu, $id_tag)
    {
        $jeu = Jeu::find($id_jeu);
        $jeu->tags()->detach($id_tag);
        return redirect()->back();
    }
}
