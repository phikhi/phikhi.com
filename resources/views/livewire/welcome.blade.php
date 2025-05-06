<?php

use function Livewire\Volt\{state, layout};
use Illuminate\Support\Facades\Auth;

// Définir le layout à utiliser
layout('components.layouts.guest');

// État pour l'utilisateur (pour éviter les erreurs avec Auth::user()->name)
state(['user' => null]);

?>

<div
        x-data="{
            scrolled: false,
            activeSection: 'hero',
            mobileMenuOpen: false,
            showBackToTop: false,
            sections: ['hero', 'expertise', 'experience', 'services', 'testimonials', 'contact'],
            scrollToSection(sectionId) {
                // Empêcher le comportement par défaut du lien
                event.preventDefault();
                
                // Fermer le menu mobile si ouvert
                this.mobileMenuOpen = false;
                
                // Si sectionId est 'top', défiler vers le haut de la page
                if (sectionId === 'top') {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                    
                    // Mettre à jour la section active
                    this.activeSection = 'hero';
                    
                    // Mettre à jour l'URL sans ancre
                    history.pushState(null, '', window.location.pathname + window.location.search);
                    return;
                }
                
                const element = document.getElementById(sectionId);
                if (element) {
                    // Défilement fluide vers la section
                    element.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Mettre à jour la section active
                    this.activeSection = sectionId;
                    
                    // Mettre à jour l'URL avec l'ID de la section sans recharger la page
                    history.pushState(null, '', '#' + sectionId);
                }
            }
        }"
        x-init="
            window.addEventListener('scroll', () => {
                scrolled = window.scrollY > 20;
                
                // Détection de la section active au défilement
                for (const section of sections) {
                    const el = document.getElementById(section);
                    if (el) {
                        const rect = el.getBoundingClientRect();
                        const offset = window.innerHeight * 0.3;
                        
                        if (rect.top <= offset && rect.bottom >= offset) {
                            activeSection = section;
                            // Afficher le bouton de retour en haut uniquement si on a dépassé la section hero
                            showBackToTop = activeSection !== 'hero';
                            break;
                        }
                    }
                }
            });
        "
        class="min-h-screen bg-white dark:bg-neutral-950 text-neutral-900 dark:text-white"
>
    <!-- Header -->
    <header
            x-data="{ mobileMenuOpen: false }"
            :class="{ 'bg-white/80 dark:bg-neutral-950/80 backdrop-blur-md shadow-sm': scrolled, 'bg-transparent': !scrolled }"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    >
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <!-- Logo -->
            <a
                    href="/"
                    @click="scrollToSection('top')"
                    class="text-2xl font-bold tracking-tight"
            >
                Philippe Khill
            </a>

            <!-- Navigation - Desktop -->
            <nav class="hidden md:flex items-center space-x-8">
                <a
                        href="/"
                        @click="scrollToSection('top')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'hero' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Accueil
                </a>
                <a
                        href="#expertise"
                        @click="scrollToSection('expertise')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'expertise' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Expertise
                </a>
                <a
                        href="#experience"
                        @click="scrollToSection('experience')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'experience' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Expérience
                </a>
                <a
                        href="#services"
                        @click="scrollToSection('services')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'services' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Services
                </a>
                <a
                        href="#testimonials"
                        @click="scrollToSection('testimonials')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'testimonials' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Témoignages
                </a>
                <a
                        href="#contact"
                        @click="scrollToSection('contact')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'contact' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Contact
                </a>

                <!-- Dark Mode Toggle -->
                <button
                        x-on:click="$flux.dark = ! $flux.dark;"
                        class="p-2 rounded-full bg-neutral-100 dark:bg-neutral-800 hover:bg-neutral-200 dark:hover:bg-neutral-700 transition-colors"
                        aria-label="Toggle dark mode"
                >
                    <svg x-show="!$flux.dark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                    <svg x-show="$flux.dark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </button>
            </nav>

            <!-- Mobile Menu Button -->
            <button
                    x-on:click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden p-2 rounded-md hover:bg-neutral-100 dark:hover:bg-neutral-800 transition-colors"
                    aria-label="Toggle mobile menu"
            >
                <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div
                x-show="mobileMenuOpen"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                class="md:hidden bg-white dark:bg-neutral-900 shadow-lg"
        >
            <nav class="container mx-auto px-6 py-4 flex flex-col space-y-4">
                <a
                        href="/"
                        @click="scrollToSection('top')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'hero' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Accueil
                </a>
                <a
                        href="#expertise"
                        @click="scrollToSection('expertise')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'expertise' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Expertise
                </a>
                <a
                        href="#experience"
                        @click="scrollToSection('experience')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'experience' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Expérience
                </a>
                <a
                        href="#services"
                        @click="scrollToSection('services')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'services' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Services
                </a>
                <a
                        href="#testimonials"
                        @click="scrollToSection('testimonials')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'testimonials' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Témoignages
                </a>
                <a
                        href="#contact"
                        @click="scrollToSection('contact')"
                        :class="{ 'text-primary-600 dark:text-primary-400': activeSection === 'contact' }"
                        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                >
                    Contact
                </a>

                <!-- Dark Mode Toggle (Mobile) -->
                <div class="flex items-center justify-between">
                    <span>Mode sombre</span>
                    <button
                            x-on:click="$flux.dark = ! $flux.dark;"
                            class="p-2 rounded-full bg-neutral-100 dark:bg-neutral-800 hover:bg-neutral-200 dark:hover:bg-neutral-700 transition-colors"
                            aria-label="Toggle dark mode"
                    >
                        <svg x-show="!$flux.dark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                        <svg x-show="$flux.dark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Bouton de retour en haut de page -->
    <button
            x-show="showBackToTop"
            @click="scrollToSection('top')"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-4"
            class="cursor-pointer fixed bottom-6 right-6 z-50 p-3 rounded-full bg-primary-600 text-gray-500 dark:text-white shadow-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all"
            aria-label="Retour en haut de page"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    <!-- Contenu principal -->
    <main>
        <!-- Inclure les sections -->
        @include('livewire.components.hero')
        @include('livewire.components.expertise')
        @include('livewire.components.experience')
        @include('livewire.components.services')
        @include('livewire.components.testimonials')
        @include('livewire.components.contact')
        @include('livewire.components.footer')
    </main>
</div>
