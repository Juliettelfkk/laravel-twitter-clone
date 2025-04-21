<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    public function store()
    {


        $validated = request()->validate([
            'content' => 'required|min:5|max:240',
        ]);

        $validated['user_id'] = Auth::id();

        $idea = Idea::create($validated);


        return redirect()->route('dashboard')->with('success', 'Idea created successfully');
    }
    public function show(Idea $idea)
    {
        return view('ideas.show', ['idea' => $idea]);
    }
    public function destroy(Idea $idea)
    {
        if(Auth::id() !== $idea->user_id){
            abort(403, 'Unauthorized Action');
        }
        $idea->delete();
        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully');
    }
    public function edit(Idea $idea)
    {
        if(Auth::id() !== $idea->user_id){
            abort(403, 'Unauthorized Action');
        }
        return view('ideas.show', [
            'idea' => $idea,
            'editing' => true
        ]);
    }
    public function update(Idea $idea)
    {
        if(Auth::id() !== $idea->user_id){
            abort(403, 'Unauthorized Action');
        }
        $validated = request()->validate([
            'content' => 'required|min:5|max:240',
        ]);
        $idea->update($validated);
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea updated successfully');
    }
}
