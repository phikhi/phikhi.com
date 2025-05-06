<!-- Section Expertise -->
<section id="expertise" class="py-20 bg-neutral-50 dark:bg-neutral-900">
    <div class="container mx-auto px-6">
        <div 
            x-data
            x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
            class="text-center mb-16 transition-all duration-1000 opacity-0 translate-y-8"
        >
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Mon expertise</h2>
            <p class="text-xl text-neutral-700 dark:text-neutral-300 max-w-3xl mx-auto">
                Fort de plus de 10 ans d'expérience dans la gestion de produits, j'apporte une expertise complète pour transformer vos idées en produits performants.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Expertise 1 -->
            <div 
                x-data
                x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
                class="bg-white dark:bg-neutral-800 rounded-xl p-8 shadow-sm transition-all duration-1000 opacity-0 translate-y-8"
                style="transition-delay: 100ms;"
            >
                <div class="w-14 h-14 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 dark:text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Stratégie produit</h3>
                <p class="text-neutral-700 dark:text-neutral-300 mb-4">
                    Définition de la vision, de la roadmap et des KPIs pour assurer l'alignement entre les objectifs business et les besoins utilisateurs.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 dark:text-primary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Vision produit
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 dark:text-primary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Roadmap stratégique
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 dark:text-primary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Analyse concurrentielle
                    </li>
                </ul>
            </div>
            
            <!-- Expertise 2 -->
            <div 
                x-data
                x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
                class="bg-white dark:bg-neutral-800 rounded-xl p-8 shadow-sm transition-all duration-1000 opacity-0 translate-y-8"
                style="transition-delay: 200ms;"
            >
                <div class="w-14 h-14 bg-secondary-100 dark:bg-secondary-900 rounded-lg flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary-600 dark:text-secondary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">UX/UI Design</h3>
                <p class="text-neutral-700 dark:text-neutral-300 mb-4">
                    Conception d'expériences utilisateur intuitives et d'interfaces élégantes qui répondent aux besoins des utilisateurs.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-600 dark:text-secondary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Recherche utilisateur
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-600 dark:text-secondary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Wireframing & Prototypage
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-600 dark:text-secondary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Tests utilisateurs
                    </li>
                </ul>
            </div>
            
            <!-- Expertise 3 -->
            <div 
                x-data
                x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
                class="bg-white dark:bg-neutral-800 rounded-xl p-8 shadow-sm transition-all duration-1000 opacity-0 translate-y-8"
                style="transition-delay: 300ms;"
            >
                <div class="w-14 h-14 bg-tertiary-100 dark:bg-tertiary-900 rounded-lg flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-tertiary-600 dark:text-tertiary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Gestion agile</h3>
                <p class="text-neutral-700 dark:text-neutral-300 mb-4">
                    Pilotage de projets avec les méthodologies agiles pour garantir une livraison efficace et itérative.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-tertiary-600 dark:text-tertiary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Scrum & Kanban
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-tertiary-600 dark:text-tertiary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Priorisation (RICE, MoSCoW)
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-tertiary-600 dark:text-tertiary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Gestion de backlog
                    </li>
                </ul>
            </div>
            
            <!-- Expertise 4 -->
            <div 
                x-data
                x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
                class="bg-white dark:bg-neutral-800 rounded-xl p-8 shadow-sm transition-all duration-1000 opacity-0 translate-y-8"
                style="transition-delay: 400ms;"
            >
                <div class="w-14 h-14 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600 dark:text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Data & Analytics</h3>
                <p class="text-neutral-700 dark:text-neutral-300 mb-4">
                    Utilisation des données pour prendre des décisions éclairées et mesurer l'impact des fonctionnalités.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 dark:text-primary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Définition de KPIs
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 dark:text-primary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        A/B Testing
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 dark:text-primary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Analyse comportementale
                    </li>
                </ul>
            </div>
            
            <!-- Expertise 5 -->
            <div 
                x-data
                x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
                class="bg-white dark:bg-neutral-800 rounded-xl p-8 shadow-sm transition-all duration-1000 opacity-0 translate-y-8"
                style="transition-delay: 500ms;"
            >
                <div class="w-14 h-14 bg-secondary-100 dark:bg-secondary-900 rounded-lg flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary-600 dark:text-secondary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Growth Hacking</h3>
                <p class="text-neutral-700 dark:text-neutral-300 mb-4">
                    Mise en place de stratégies innovantes pour accélérer la croissance et l'acquisition d'utilisateurs.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-600 dark:text-secondary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Acquisition & Rétention
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-600 dark:text-secondary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Optimisation de conversion
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-600 dark:text-secondary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Automatisation marketing
                    </li>
                </ul>
            </div>
            
            <!-- Expertise 6 -->
            <div 
                x-data
                x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
                class="bg-white dark:bg-neutral-800 rounded-xl p-8 shadow-sm transition-all duration-1000 opacity-0 translate-y-8"
                style="transition-delay: 600ms;"
            >
                <div class="w-14 h-14 bg-tertiary-100 dark:bg-tertiary-900 rounded-lg flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-tertiary-600 dark:text-tertiary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Leadership & Communication</h3>
                <p class="text-neutral-700 dark:text-neutral-300 mb-4">
                    Animation d'équipes pluridisciplinaires et communication efficace avec toutes les parties prenantes.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-tertiary-600 dark:text-tertiary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Gestion d'équipe
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-tertiary-600 dark:text-tertiary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Storytelling
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-tertiary-600 dark:text-tertiary-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Stakeholder management
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
