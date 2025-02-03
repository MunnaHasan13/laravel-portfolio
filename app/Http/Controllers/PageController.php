<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $projects = Project::all();
        $about = About::first();
        $contacts = Contact::all();

        return view('home', compact('projects', 'about' , 'contacts'));

    }

    public function portfolio()
    {
        $projects = Project::all();
        return view('pages.portfolio', compact('projects'));
    }

    public function about()
    {
        $about = About::first();
        return view('pages.about', compact('about'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($request->only('name', 'email', 'message'));

        return back()->with('success', 'Message sent successfully!');
    }

}
