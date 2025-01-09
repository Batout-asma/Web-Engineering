<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Assurez-vous que le modèle Post est importé

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create($validated);

        return redirect()->back()->with('success', 'Post créé avec succès!');
    }
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post supprimé avec succès!');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($validated);

        return redirect()->back()->with('success', 'Post mis à jour avec succès!');
    }




    
}
