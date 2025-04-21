<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function show(User $user)
    {
        $ideas = $user->ideas()->paginate(5);
        return view('users.show', ['user' => $user, 'ideas' => $ideas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $editing = true;
        $ideas = $user->ideas()->paginate(5);
        return view('users.edit-profile', ['user' => $user, 'editing' => $editing, 'ideas' => $ideas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validate inputs
        $validated = $request->validate([
            'name' => 'required|min:3|max:40',
            'bio' => 'nullable|min:5|max:240',
            'image' => 'nullable|image', // Ensure image is nullable
        ]);

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('profile', 'public');
            $validated['image'] = $path; // Save the path in $validated
        }

        // Update user
        $user->update($validated);

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }

    public function profile()
    {
        return $this->show(Auth::user());
    }
}
