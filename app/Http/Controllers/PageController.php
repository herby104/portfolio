<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Page d'accueil
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Page "À propos"
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Page compétences
     */
    public function skills()
    {
        return view('pages.skills');
    }

    /**
     * Page CV
     */
    public function cv()
    {
        return view('pages.cv');
    }

    /**
     * Page contact
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Traitement du formulaire de contact
     */
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'message' => 'required|string',
        ]);

        // Exemple simple : envoi par Mail (configurer mail dans .env)
        Mail::raw(
            "Nom: {$validated['name']}\nEmail: {$validated['email']}\n\nMessage:\n{$validated['message']}",
            function ($message) use ($validated) {
                $message->to('herbyshawlouis@gmail.com')
                        ->subject('Nouveau message depuis le formulaire de contact');
            }
        );

        return redirect()->back()->with('success', 'Merci ! Votre message a été envoyé.');
    }

    /**
     * Page projets (optionnel si tu veux passer par PageController)
     */
    public function projects()
    {
        $projects = Project::all();
        return view('pages.projects', compact('projects'));
    }

    /**
     * Détail projet (optionnel)
     */
    public function projectDetail($id)
    {
        $project = Project::findOrFail($id);
        return view('pages.project-detail', compact('project'));
    }
}