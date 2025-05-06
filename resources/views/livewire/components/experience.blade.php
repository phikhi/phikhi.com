<!-- Section Expérience -->
<section id="experience" class="py-20">
    <div class="container mx-auto px-6">
        <div
                x-data
                x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
                class="text-center mb-16 transition-all duration-1000 opacity-0 translate-y-8"
        >
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Mon parcours</h2>
            <p class="text-xl text-neutral-700 dark:text-neutral-300 max-w-3xl mx-auto">
                Une expérience riche et diversifiée au service de projets innovants.
            </p>
        </div>

        <div class="relative space-y-16">
            <!-- Ligne verticale de la timeline -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-neutral-200 dark:bg-neutral-700 hidden md:block"></div>

            <!-- Expérience 1 -->
            <div class="relative z-10">
                <div
                        x-data
                        x-intersect:enter="$el.classList.add('opacity-100', 'translate-x-0'); $el.classList.remove('opacity-0', '-translate-x-8')"
                        class="flex flex-col md:flex-row items-center transition-all duration-1000 opacity-0 -translate-x-8"
                >
                    <div class="w-full md:w-1/2 md:pr-12 md:text-right mb-0 flex justify-center md:justify-end">
                        <div class="bg-blue-50 dark:bg-neutral-800 dark:shadow-sm p-6 rounded-xl w-full md:w-auto relative pt-12 md:pt-6">
                            <!-- Icône en mode mobile -->
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 flex items-center justify-center w-14 h-14 rounded-full bg-white dark:bg-neutral-950 border-2 border-blue-600 dark:border-neutral-800 z-10 md:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600 dark:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-neutral-500 dark:text-neutral-400 block mb-1">2020 - Présent</span>
                            <h3 class="text-xl font-bold mb-2">Senior Product Manager Freelance</h3>
                            <p class="text-neutral-700 dark:text-neutral-300">
                                Accompagnement de startups et entreprises dans la définition et l'exécution de leur
                                stratégie produit.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs font-medium rounded-full">
                                    Fintech
                                </span>
                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs font-medium rounded-full">
                                    SaaS
                                </span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-xs font-medium rounded-full">
                                    E-commerce
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Icône en mode desktop -->
                    <div class="hidden md:flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-neutral-950 border-2 border-blue-600 dark:border-neutral-700 z-10 relative mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600 dark:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>
            </div>

            <!-- Expérience 2 -->
            <div class="relative z-10">
                <div
                        x-data
                        x-intersect:enter="$el.classList.add('opacity-100', 'translate-x-0'); $el.classList.remove('opacity-0', 'translate-x-8')"
                        class="flex flex-col md:flex-row items-center transition-all duration-1000 opacity-0 translate-x-8"
                >
                    <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                    <!-- Icône en mode desktop -->
                    <div class="hidden md:flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-neutral-950 border-2 border-indigo-600 dark:border-neutral-700 z-10 relative mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 dark:text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 md:text-left mt-0 flex justify-center md:justify-start">
                        <div class="bg-indigo-50 dark:bg-neutral-800 dark:shadow-sm p-6 rounded-xl w-full md:w-auto relative pt-12 md:pt-6">
                            <!-- Icône en mode mobile -->
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 flex items-center justify-center w-14 h-14 rounded-full bg-white dark:bg-neutral-950 border-2  border-indigo-600 dark:border-neutral-800 z-10 md:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-indigo-600 dark:text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-neutral-500 dark:text-neutral-400 block mb-1">2017 - 2020</span>
                            <h3 class="text-xl font-bold mb-2">Lead Product Manager @ Revolut</h3>
                            <p class="text-neutral-700 dark:text-neutral-300">
                                Direction de l'équipe produit pour la plateforme de trading et d'investissement.
                                Croissance de l'utilisation de 300% en 2 ans.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs font-medium rounded-full">
                                    Fintech
                                </span>
                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs font-medium rounded-full">
                                    Trading
                                </span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-xs font-medium rounded-full">
                                    Mobile App
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expérience 3 -->
            <div class="relative z-10">
                <div
                        x-data
                        x-intersect:enter="$el.classList.add('opacity-100', 'translate-x-0'); $el.classList.remove('opacity-0', '-translate-x-8')"
                        class="flex flex-col md:flex-row items-center transition-all duration-1000 opacity-0 -translate-x-8"
                >
                    <div class="w-full md:w-1/2 md:pr-12 md:text-right mb-0 flex justify-center md:justify-end">
                        <div class="bg-purple-50 dark:bg-neutral-800 dark:shadow-sm p-6 rounded-xl w-full md:w-auto relative pt-12 md:pt-6">
                            <!-- Icône en mode mobile -->
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 flex items-center justify-center w-14 h-14 rounded-full bg-white dark:bg-neutral-950 border-2  border-purple-600 dark:border-neutral-800 z-10 md:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-purple-600 dark:text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-neutral-500 dark:text-neutral-400 block mb-1">2014 - 2017</span>
                            <h3 class="text-xl font-bold mb-2">Senior Product Manager @ N26</h3>
                            <p class="text-neutral-700 dark:text-neutral-300">
                                Responsable des fonctionnalités de paiement et de transfert d'argent. Lancement de la
                                carte premium et des comptes partagés.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs font-medium rounded-full">
                                    Néobanque
                                </span>
                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs font-medium rounded-full">
                                    Paiements
                                </span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-xs font-medium rounded-full">
                                    UX Design
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Icône en mode desktop -->
                    <div class="hidden md:flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-neutral-950 border-2 border-purple-600 dark:border-neutral-700 z-10 relative mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600 dark:text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                    </div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>
            </div>

            <!-- Expérience 4 -->
            <div class="relative">
                <div
                        x-data
                        x-intersect:enter="$el.classList.add('opacity-100', 'translate-x-0'); $el.classList.remove('opacity-0', 'translate-x-8')"
                        class="flex flex-col md:flex-row items-center transition-all duration-1000 opacity-0 translate-x-8"
                >
                    <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                    <!-- Icône en mode desktop -->
                    <div class="hidden md:flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-neutral-950 border-2 border-blue-600 dark:border-neutral-700 z-10 relative mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600 dark:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div class="w-full md:w-1/2 md:pl-12 md:text-left mt-0 flex justify-center md:justify-start">
                        <div class="bg-blue-50 dark:bg-neutral-800 dark:shadow-sm p-6 rounded-xl w-full md:w-auto relative pt-12 md:pt-6">
                            <!-- Icône en mode mobile -->
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 flex items-center justify-center w-14 h-14 rounded-full bg-white dark:bg-neutral-950 border-2  border-blue-600 dark:border-neutral-800 z-10 md:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600 dark:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-neutral-500 dark:text-neutral-400 block mb-1">2011 - 2014</span>
                            <h3 class="text-xl font-bold mb-2">Product Manager @ BlaBlaCar</h3>
                            <p class="text-neutral-700 dark:text-neutral-300">
                                Développement des fonctionnalités de réservation et de paiement. Participation à
                                l'expansion internationale en Europe.
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs font-medium rounded-full">
                                    Mobilité
                                </span>
                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs font-medium rounded-full">
                                    Marketplace
                                </span>
                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-xs font-medium rounded-full">
                                    International
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
