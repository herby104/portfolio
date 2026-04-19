<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ContactMessageNotification extends Notification
{
    use Queueable;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nouveau message SaaS Portfolio')
            ->greeting('Bonjour Admin 👋')
            ->line('Nom: ' . $this->data['name'])
            ->line('Email: ' . $this->data['email'])
            ->line('Message: ' . $this->data['message'])
            ->cc($this->data['email']) // 👈 ICI
            ->line('Connexion admin requise pour répondre.');
    }
}