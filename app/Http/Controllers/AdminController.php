<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function handleFormSubmission(Request $request)
    {
        // Retrieve form data
        $appName = $request->input('title');
        $price = $request->input('price');
        $organization = $request->input('organization');
        $platforms = $request->input('platforms');
        $links = $request->input('links');
        $description = $request->input('description');

        // Pass the form data to the dashboard view
        return view('admin.dashboard', [
            'appName' => $appName,
            'price' => $price,
            'organization' => $organization,
            'platforms' => $platforms,
            'links' => $links,
            'description' => $description,
            // Add other form data as needed
        ]);
    }
}
