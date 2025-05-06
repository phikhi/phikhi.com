<!-- Section Témoignages -->
<section id="testimonials" class="py-20">
    <div class="container mx-auto px-6">
        <div 
            x-data
            x-intersect:enter="$el.classList.add('opacity-100', 'translate-y-0'); $el.classList.remove('opacity-0', 'translate-y-8')"
            class="text-center mb-16 transition-all duration-1000 opacity-0 translate-y-8"
        >
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ce qu'ils en disent</h2>
            <p class="text-xl text-neutral-700 dark:text-neutral-300 max-w-3xl mx-auto">
                Des clients satisfaits qui témoignent de la qualité de mes services.
            </p>
        </div>
        
        <div 
            x-data="{
                testimonials: [
                    {
                        name: 'Sophie Martin',
                        position: 'CEO, FinanceFlow',
                        image: 'https://randomuser.me/api/portraits/women/32.jpg',
                        content: 'Philippe a transformé notre vision en une feuille de route produit claire et réalisable. Sa compréhension approfondie des besoins utilisateurs et sa capacité à les aligner avec nos objectifs commerciaux ont été déterminantes pour notre succès.',
                        rating: 5
                    },
                    {
                        name: 'Thomas Dubois',
                        position: 'CTO, TechStart',
                        image: 'https://randomuser.me/api/portraits/men/45.jpg',
                        content: 'Travailler avec Philippe a été une expérience exceptionnelle. Sa méthodologie agile et sa vision stratégique ont permis à notre équipe de développer un produit qui répond parfaitement aux attentes de nos utilisateurs.',
                        rating: 5
                    },
                    {
                        name: 'Émilie Leclerc',
                        position: 'Fondatrice, EcoShop',
                        image: 'https://randomuser.me/api/portraits/women/65.jpg',
                        content: 'Philippe a su comprendre les enjeux spécifiques de notre startup et nous a guidés dans la création d\'une expérience utilisateur intuitive et engageante. Son expertise en UX/UI a été un atout majeur pour notre plateforme.',
                        rating: 5
                    },
                    {
                        name: 'Marc Leroy',
                        position: 'VP Product, MobilePay',
                        image: 'https://randomuser.me/api/portraits/men/22.jpg',
                        content: 'L\'approche data-driven de Philippe nous a permis d\'optimiser nos fonctionnalités et d\'augmenter significativement notre taux de conversion. Son expertise en fintech a été un véritable accélérateur pour notre croissance.',
                        rating: 4
                    }
                ],
                activeIndex: 0,
                autoplay: null,
                
                init() {
                    this.startAutoplay();
                    
                    this.$watch('activeIndex', () => {
                        this.resetAutoplay();
                    });
                },
                
                startAutoplay() {
                    this.autoplay = setInterval(() => {
                        this.next();
                    }, 5000);
                },
                
                resetAutoplay() {
                    clearInterval(this.autoplay);
                    this.startAutoplay();
                },
                
                next() {
                    this.activeIndex = (this.activeIndex + 1) % this.testimonials.length;
                },
                
                prev() {
                    this.activeIndex = (this.activeIndex - 1 + this.testimonials.length) % this.testimonials.length;
                }
            }"
            class="relative"
        >
            <!-- Carousel -->
            <div class="relative overflow-hidden">
                <div 
                    class="flex transition-transform duration-500 ease-in-out"
                    :style="{ transform: `translateX(-${activeIndex * 100}%)` }"
                >
                    <template x-for="(testimonial, index) in testimonials" :key="index">
                        <div class="w-full flex-shrink-0">
                            <div class="max-w-3xl mx-auto bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-8 md:p-10">
                                <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                                    <div class="flex-shrink-0">
                                        <img :src="testimonial.image" :alt="testimonial.name" class="w-20 h-20 rounded-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex mb-3">
                                            <template x-for="i in 5" :key="i">
                                                <svg xmlns="http://www.w3.org/2000/svg" :class="`h-5 w-5 ${i <= testimonial.rating ? 'text-yellow-400' : 'text-neutral-300 dark:text-neutral-600'}`" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </template>
                                        </div>
                                        <blockquote class="text-lg md:text-xl italic mb-4" x-text="testimonial.content"></blockquote>
                                        <div>
                                            <p class="font-bold text-lg" x-text="testimonial.name"></p>
                                            <p class="text-neutral-600 dark:text-neutral-400" x-text="testimonial.position"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            
            <!-- Controls -->
            <div class="flex justify-center mt-8 space-x-3">
                <button 
                    @click="prev"
                    class="w-10 h-10 rounded-full flex items-center justify-center bg-white dark:bg-neutral-800 shadow-sm hover:bg-neutral-100 dark:hover:bg-neutral-700 transition-colors"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <div class="flex items-center space-x-2">
                    <template x-for="(testimonial, index) in testimonials" :key="index">
                        <button 
                            @click="activeIndex = index"
                            :class="`w-2.5 h-2.5 rounded-full transition-colors ${activeIndex === index ? 'bg-blue-600 dark:bg-blue-500' : 'bg-neutral-300 dark:bg-neutral-600'}`"
                        ></button>
                    </template>
                </div>
                <button 
                    @click="next"
                    class="w-10 h-10 rounded-full flex items-center justify-center bg-white dark:bg-neutral-800 shadow-sm hover:bg-neutral-100 dark:hover:bg-neutral-700 transition-colors"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
