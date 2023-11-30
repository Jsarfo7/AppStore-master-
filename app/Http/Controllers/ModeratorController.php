<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Define a route for the moderator dashboard
Route::get('/moderator/dashboard', 'ModeratorController@dashboard')->middleware('auth', 'moderator');

// ModeratorController.php
class ModeratorController extends Controller {
    public function dashboard() {
        // Fetch app-related data for moderators
        $apps = App::all(); // Fetch all apps or specific apps for moderation
        return view('moderator.dashboard', compact('apps'));
    }

    public function deleteComment(Request $request, $commentId) {
        // Logic to delete a comment related to an app
        $comment = Comment::findOrFail($commentId);
        $comment->delete();
        // Redirect back or to a specific page
    }
}

