<!-- Section Contact -->
<section id="contact" class="py-20 bg-neutral-50 dark:bg-neutral-900">
    <div class="container mx-auto px-6">
        <div
                x-data
                x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
                class="text-center mb-16 transition-all duration-1000 opacity-0 translate-y-8"
                id="contact-heading"
        >
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Discutons de votre projet</h2>
            <p class="text-xl text-neutral-700 dark:text-neutral-300 max-w-3xl mx-auto">
                Vous avez un projet en tête ? N'hésitez pas à me contacter pour en discuter.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Informations de contact -->
            <div
                    x-data
                    x-intersect:enter="$el.classList.add('opacity-100', 'translate-x-0'); $el.classList.remove('opacity-0', '-translate-x-8')"
                    class="transition-all duration-1000 opacity-0 -translate-x-8"
                    id="contact-info"
            >
                <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-8">
                    <h3 class="text-2xl font-bold mb-6">Mes coordonnées</h3>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-1">Email</h4>
                                <a href="mailto:contact@phikhi.com" class="text-blue-600 dark:text-blue-400 hover:underline">contact@phikhi.com</a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-1">Téléphone</h4>
                                <a href="tel:+33612345678" class="text-indigo-600 dark:text-indigo-400 hover:underline">+33
                                    6 12 34 56 78</a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-1">Localisation</h4>
                                <p class="text-neutral-700 dark:text-neutral-300">Paris, France</p>
                                <p class="text-neutral-600 dark:text-neutral-400 text-sm mt-1">Disponible pour des
                                    missions à distance ou sur site</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="text-lg font-semibold mb-4">Suivez-moi</h4>
                        <div class="flex space-x-4">
                            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-neutral-100 dark:bg-neutral-700 rounded-full flex items-center justify-center transition-colors hover:bg-blue-100 dark:hover:bg-blue-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                                </svg>
                            </a>
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-neutral-100 dark:bg-neutral-700 rounded-full flex items-center justify-center transition-colors hover:bg-blue-100 dark:hover:bg-blue-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-neutral-100 dark:bg-neutral-700 rounded-full flex items-center justify-center transition-colors hover:bg-neutral-200 dark:hover:bg-neutral-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-neutral-800 dark:text-neutral-200" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="https://medium.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-neutral-100 dark:bg-neutral-700 rounded-full flex items-center justify-center transition-colors hover:bg-neutral-200 dark:hover:bg-neutral-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-neutral-800 dark:text-neutral-200" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M0 0v24h24v-24h-24zm19.938 5.686l-1.32.786-1.572 7.534 3.511-7.534h-.619zm-14.99 15.142c-.615 0-1.11-.497-1.11-1.109 0-.612.495-1.109 1.11-1.109.614 0 1.112.497 1.112 1.109 0 .612-.498 1.109-1.112 1.109zm7.24-3.911c-3.211 0-5.816-2.61-5.816-5.823 0-3.213 2.605-5.823 5.816-5.823 3.211 0 5.818 2.61 5.818 5.823 0 3.213-2.607 5.823-5.818 5.823zm0-9.646c-2.11 0-3.822 1.714-3.822 3.823 0 2.11 1.712 3.824 3.822 3.824 2.11 0 3.824-1.714 3.824-3.824 0-2.109-1.714-3.823-3.824-3.823z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div
                    x-intersect:enter="$el.classList.add('opacity-100', 'translate-x-0'); $el.classList.remove('opacity-0', 'translate-x-8')"
                    class="transition-all duration-1000 opacity-0 translate-x-8"
                    id="contact-form-container"
            >
                <livewire:components.contact-form/>
            </div>
        </div>
    </div>
</section>
