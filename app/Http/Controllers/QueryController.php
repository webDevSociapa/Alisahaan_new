<?php

namespace App\Http\Controllers;

use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QueryController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Save to database
        $query = Query::create([
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'contact' => $validated['contact'],
            'message' => $validated['message'],
        ]);

        // Send email
        Mail::send('emails.query', ['query' => $query], function ($message) use ($query) {
            $message->to('web@sociapa.com') // Replace with your support email
                    ->subject('New Query from ' . $query->full_name);
        });

        return redirect()->back()->with('success', 'Your query has been submitted successfully!');
    }
}
