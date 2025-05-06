<!-- Section Hero -->
<section id="hero" class="pt-32 pb-20">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
            <div class="lg:w-1/2">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Senior Product Manager <span class="text-primary-600 dark:text-primary-400">Freelance</span>
                </h1>
                <p class="text-xl md:text-2xl text-neutral-700 dark:text-neutral-300 mb-8">
                    Je transforme vos idées en produits numériques performants, centrés sur l'utilisateur et alignés avec vos objectifs business.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 dark:bg-primary-500 dark:hover:bg-primary-600 transition duration-300 ease-in-out transform hover:-translate-y-1">
                        Discuter de votre projet
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="#expertise" class="inline-flex items-center justify-center px-6 py-3 border border-neutral-300 dark:border-neutral-700 text-base font-medium rounded-md text-neutral-900 dark:text-white bg-white hover:bg-neutral-50 dark:bg-neutral-800 dark:hover:bg-neutral-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                        Découvrir mon expertise
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="relative">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-primary-200 dark:bg-primary-900 rounded-full opacity-70 blur-xl"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary-200 dark:bg-secondary-900 rounded-full opacity-70 blur-xl"></div>
                    <img 
                        src="{{ asset('images/profile.jpg') }}" 
                        alt="Philippe Khill - Product Manager" 
                        class="w-full h-auto rounded-2xl shadow-lg relative z-10"
                        onerror="this.src='https://via.placeholder.com/800x600?text=Photo+de+profil'"
                    >
                </div>
            </div>
        </div>
    </div>
</section>
