<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Notifications\ContactMessageNotification;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 🔐 1. Anti-spam (honeypot)
        if ($request->website) {
            return back()->with('error', 'Spam détecté.');
        }

        // 🔐 2. Validation stricte
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'message' => 'required|string|min:5',
        ]);

        try {

            // 💾 3. Sauvegarde DB
            $message = Message::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'message' => $validated['message'],
            ]);

            // 📦 4. Data pour notification
            $data = $validated;

            // 📧 5. Email admin
            Notification::route('mail', 'herbyshawlouis@gmail.com')
                ->notify(new ContactMessageNotification($data));

            return back()->with('success', 'Message envoyé avec succès 👍');

        } catch (\Exception $e) {

            // ❌ log erreur
            \Log::error('Contact error: '.$e->getMessage());

            return back()->with('error', 'Erreur lors de l’envoi du message.');
        }
    }
}