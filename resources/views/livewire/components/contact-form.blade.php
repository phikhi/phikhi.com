<?php

use function Livewire\Volt\{state, rules, computed};


use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

// Définir les états du composant
state([
    'name' => '',
    'email' => '',
    'subject' => '',
    'message' => '',
    'success' => false
]);

// Définir les règles de validation
rules([
    'name' => 'required|min:3',
    'email' => 'required|email',
    'subject' => 'required|min:5',
    'message' => 'required|min:10',
]);

// Messages d'erreur personnalisés
$messages = [
    'name.required' => 'Le nom est obligatoire.',
    'name.min' => 'Le nom doit contenir au moins 3 caractères.',
    'email.required' => 'L\'email est obligatoire.',
    'email.email' => 'Veuillez entrer une adresse email valide.',
    'subject.required' => 'Le sujet est obligatoire.',
    'subject.min' => 'Le sujet doit contenir au moins 5 caractères.',
    'message.required' => 'Le message est obligatoire.',
    'message.min' => 'Le message doit contenir au moins 10 caractères.',
];

// Méthode pour soumettre le formulaire
$submitForm = function () use ($messages) {
    $this->validate(null, $messages);

    // Ici, vous pouvez envoyer un email ou enregistrer les données dans la base de données
    // Pour l'instant, nous allons simplement simuler l'envoi

    /*
    Mail::to('contact@phikhi.com')->send(new ContactFormMail(
        $this->name,
        $this->email,
        $this->subject,
        $this->message
    ));
    */

    // Réinitialiser le formulaire
    $this->reset(['name', 'email', 'subject', 'message']);

    // Afficher le message de succès
    $this->success = true;

    // Masquer le message de succès après 5 secondes
    $this->dispatch('contact-form-submitted');
};

?>

<div>
    <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-8">
        <h3 class="text-2xl font-bold mb-6">Envoyez-moi un message</h3>

        <!-- Message de succès -->
        @if ($success)
            <flux:callout variant="success" icon="check-circle" class="mb-6">
                <flux:callout.heading>Message envoyé !</flux:callout.heading>
                <flux:callout.text>
                    Votre message a été envoyé avec succès ! Je vous répondrai dans les plus brefs délais.
                </flux:callout.text>
            </flux:callout>
        @endif

        <form wire:submit="submitForm">
            <div class="space-y-6">
                <!-- Nom -->
                <div>
                    <x-flux::input
                            label="Nom complet"
                            wire:model="name"
                            placeholder="Votre nom complet"
                            :error="$errors->first('name')"
                    />
                </div>

                <!-- Email -->
                <div>
                    <x-flux::input
                            type="email"
                            label="Email"
                            wire:model="email"
                            placeholder="votre.email@exemple.com"
                            :error="$errors->first('email')"
                    />
                </div>

                <!-- Sujet -->
                <div>
                    <x-flux::input
                            label="Sujet"
                            wire:model="subject"
                            placeholder="Sujet de votre message"
                            :error="$errors->first('subject')"
                    />
                </div>

                <!-- Message -->
                <div>
                    <x-flux::textarea
                            label="Message"
                            wire:model="message"
                            placeholder="Votre message..."
                            rows="5"
                            :error="$errors->first('message')"
                    />
                </div>

                <!-- Bouton d'envoi -->
                <div class="flex justify-end">
                    <x-flux::button type="submit" loading-spinner>
                        <span wire:loading.remove>Envoyer le message</span>
                        <span wire:loading>Envoi en cours...</span>
                    </x-flux::button>
                </div>
            </div>
        </form>
    </div>

    <!-- Script pour masquer le message de succès après 5 secondes -->
    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.
            on('contact-form-submitted', () => {
                setTimeout(() => {
                    @this.
                    set('success', false);
                }, 5000);
            });
        });
    </script>
</div>
