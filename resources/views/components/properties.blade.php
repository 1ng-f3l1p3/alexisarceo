<!-- Properties Section -->
<section id="properties" class="relative py-20 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
    <!-- Background elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 opacity-5 rotate-12">
            <img src="{{ asset('images/isotipo/Alexis_Arceo_isotipo_negro.png') }}" alt="Isotipo" class="w-64 h-64 object-contain">
        </div>
        <div class="absolute bottom-1/4 right-1/3 opacity-5 -rotate-12">
            <img src="{{ asset('images/isotipo/Alexis_Arceo_isotipo_negro.png') }}" alt="Isotipo" class="w-64 h-64 object-contain">
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">Propiedades <span class="text-blue-600">Destacadas</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Descubre las mejores propiedades seleccionadas especialmente para ti</p>
        </div>

        <!-- Carousel Container -->
        <div class="relative max-w-4xl mx-auto">
            <div class="overflow-hidden rounded-3xl" id="property-carousel-container">
                <div class="carousel-track flex transition-transform duration-500 ease-in-out" id="property-carousel">
                    <!-- Property Slide 1 -->
                    <div class="carousel-slide w-full flex-shrink-0 px-4">
                        <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=600&h=400&q=80" alt="Casa Moderna" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" />
                                <div class="absolute top-4 left-4 bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-4 py-1.5 rounded-full text-sm font-medium">Destacada</div>
                                <div class="absolute top-4 right-4 w-12 h-12 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-heart text-gray-600"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-3">
                                    <h3 class="font-bold text-xl text-gray-800">Casa Moderna</h3>
                                    <span class="text-blue-600 font-bold text-xl">$500,000</span>
                                </div>
                                <p class="text-gray-600 mb-4 flex items-center">
                                    <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                                    Ciudad Caucel, Mérida
                                </p>
                                <div class="flex justify-between text-sm text-gray-600 mb-5">
                                    <span class="flex items-center"><i class="fas fa-bed mr-1"></i> 3 Habitaciones</span>
                                    <span class="flex items-center"><i class="fas fa-bath mr-1"></i> 2 Baños</span>
                                    <span class="flex items-center"><i class="fas fa-ruler-combined mr-1"></i> 150 m²</span>
                                </div>
                                <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 rounded-lg hover:from-blue-700 hover:to-indigo-800 transition-all font-medium shadow-md hover:shadow-lg">Ver Detalles</button>
                            </div>
                        </div>
                    </div>

                   

                    <!-- Property Slide 3 -->
                    <div class="carousel-slide w-full flex-shrink-0 px-4">
                        <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&h=400&q=80" alt="Terreno Urbano" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" />
                                <div class="absolute top-4 left-4 bg-gradient-to-r from-yellow-600 to-amber-700 text-white px-4 py-1.5 rounded-full text-sm font-medium">Oferta</div>
                                <div class="absolute top-4 right-4 w-12 h-12 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-heart text-gray-600"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-3">
                                    <h3 class="font-bold text-xl text-gray-800">Terreno Urbano</h3>
                                    <span class="text-blue-600 font-bold text-xl">$200,000</span>
                                </div>
                                <p class="text-gray-600 mb-4 flex items-center">
                                    <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                                    Norte, Mérida
                                </p>
                                <div class="flex justify-between text-sm text-gray-600 mb-5">
                                    <span class="flex items-center"><i class="fas fa-vector-square mr-1"></i> 500 m²</span>
                                    <span class="flex items-center"><i class="fas fa-city mr-1"></i> Urbano</span>
                                    <span class="flex items-center"><i class="fas fa-arrows-alt-h mr-1"></i> 20m</span>
                                </div>
                                <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 rounded-lg hover:from-blue-700 hover:to-indigo-800 transition-all font-medium shadow-md hover:shadow-lg">Ver Detalles</button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Slide 4 -->
                    <div class="carousel-slide w-full flex-shrink-0 px-4">
                        <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=600&h=400&q=80" alt="Villa de Lujo" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" />
                                <div class="absolute top-4 left-4 bg-gradient-to-r from-purple-600 to-fuchsia-700 text-white px-4 py-1.5 rounded-full text-sm font-medium">Premium</div>
                                <div class="absolute top-4 right-4 w-12 h-12 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-heart text-gray-600"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-3">
                                    <h3 class="font-bold text-xl text-gray-800">Villa de Lujo</h3>
                                    <span class="text-blue-600 font-bold text-xl">$750,000</span>
                                </div>
                                <p class="text-gray-600 mb-4 flex items-center">
                                    <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                                    Country Club, Mérida
                                </p>
                                <div class="flex justify-between text-sm text-gray-600 mb-5">
                                    <span class="flex items-center"><i class="fas fa-bed mr-1"></i> 5 Habitaciones</span>
                                    <span class="flex items-center"><i class="fas fa-bath mr-1"></i> 4 Baños</span>
                                    <span class="flex items-center"><i class="fas fa-ruler-combined mr-1"></i> 300 m²</span>
                                </div>
                                <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 rounded-lg hover:from-blue-700 hover:to-indigo-800 transition-all font-medium shadow-md hover:shadow-lg">Ver Detalles</button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Slide 5 -->
                    <div class="carousel-slide w-full flex-shrink-0 px-4">
                        <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=600&h=400&q=80" alt="Departamento Ejecutivo" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" />
                                <div class="absolute top-4 left-4 bg-gradient-to-r from-teal-600 to-cyan-700 text-white px-4 py-1.5 rounded-full text-sm font-medium">Recién</div>
                                <div class="absolute top-4 right-4 w-12 h-12 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-heart text-gray-600"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-3">
                                    <h3 class="font-bold text-xl text-gray-800">Departamento Ejecutivo</h3>
                                    <span class="text-blue-600 font-bold text-xl">$425,000</span>
                                </div>
                                <p class="text-gray-600 mb-4 flex items-center">
                                    <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                                    Zona Dorada, Mérida
                                </p>
                                <div class="flex justify-between text-sm text-gray-600 mb-5">
                                    <span class="flex items-center"><i class="fas fa-bed mr-1"></i> 3 Habitaciones</span>
                                    <span class="flex items-center"><i class="fas fa-bath mr-1"></i> 3 Baños</span>
                                    <span class="flex items-center"><i class="fas fa-ruler-combined mr-1"></i> 180 m²</span>
                                </div>
                                <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 rounded-lg hover:from-blue-700 hover:to-indigo-800 transition-all font-medium shadow-md hover:shadow-lg">Ver Detalles</button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Slide 6 -->
                    <div class="carousel-slide w-full flex-shrink-0 px-4">
                        <div class="group bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?auto=format&fit=crop&w=600&h=400&q=80" alt="Casa Colonial" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" />
                                <div class="absolute top-4 left-4 bg-gradient-to-r from-rose-600 to-pink-700 text-white px-4 py-1.5 rounded-full text-sm font-medium">Exclusiva</div>
                                <div class="absolute top-4 right-4 w-12 h-12 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-heart text-gray-600"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-3">
                                    <h3 class="font-bold text-xl text-gray-800">Casa Colonial</h3>
                                    <span class="text-blue-600 font-bold text-xl">$650,000</span>
                                </div>
                                <p class="text-gray-600 mb-4 flex items-center">
                                    <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>
                                    Centro Histórico, Mérida
                                </p>
                                <div class="flex justify-between text-sm text-gray-600 mb-5">
                                    <span class="flex items-center"><i class="fas fa-bed mr-1"></i> 4 Habitaciones</span>
                                    <span class="flex items-center"><i class="fas fa-bath mr-1"></i> 3 Baños</span>
                                    <span class="flex items-center"><i class="fas fa-ruler-combined mr-1"></i> 250 m²</span>
                                </div>
                                <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 rounded-lg hover:from-blue-700 hover:to-indigo-800 transition-all font-medium shadow-md hover:shadow-lg">Ver Detalles</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button id="carousel-prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-100 transition-colors z-20">
                <i class="fas fa-chevron-left text-gray-700"></i>
            </button>
            <button id="carousel-next" class="absolute top-1/2 right-4 transform -translate-y-1/2 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-100 transition-colors z-20">
                <i class="fas fa-chevron-right text-gray-700"></i>
            </button>

            <!-- Carousel Indicators -->
            <div class="flex justify-center mt-8 space-x-2" id="carousel-indicators">
            </div>
        </div>

        <div class="text-center mt-16">
            <a href="#" class="inline-block bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-10 py-4 rounded-full hover:from-blue-700 hover:to-indigo-800 transition-all font-bold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-300">Ver Portafolio Completo</a>
        </div>
    </div>
</section>

<!-- JavaScript for Carousel -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('property-carousel');
    const slides = document.querySelectorAll('.carousel-slide');
    const prevBtn = document.getElementById('carousel-prev');
    const nextBtn = document.getElementById('carousel-next');
    const indicatorsContainer = document.getElementById('carousel-indicators');
    
    let currentIndex = 0;
    const totalSlides = slides.length;
    
    // Create indicators
    for (let i = 0; i < totalSlides; i++) {
        const indicator = document.createElement('button');
        indicator.classList.add('indicator', 'w-3', 'h-3', 'bg-gray-300', 'rounded-full', 'hover:bg-blue-500', 'transition-colors');
        if (i === 0) indicator.classList.add('active', 'bg-blue-600');
        indicator.dataset.index = i;
        indicator.addEventListener('click', function() {
            currentIndex = parseInt(this.dataset.index);
            updateCarousel();
        });
        indicatorsContainer.appendChild(indicator);
    }
    
    const indicators = document.querySelectorAll('.indicator');
    
    function updateCarousel() {
        const slideWidth = 100; // 100% since we're showing one slide at a time
        carousel.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
        
        // Update indicators
        indicators.forEach((indicator, index) => {
            if (index === currentIndex) {
                indicator.classList.add('active', 'bg-blue-600');
                indicator.classList.remove('bg-gray-300');
            } else {
                indicator.classList.remove('active', 'bg-blue-600');
                indicator.classList.add('bg-gray-300');
            }
        });
    }
    
    function nextSlide() {
        if (currentIndex < totalSlides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Loop back to start
        }
        updateCarousel();
    }
    
    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - 1; // Loop to end
        }
        updateCarousel();
    }
    
    // Event listeners for buttons
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
    
    // Auto-advance carousel
    setInterval(nextSlide, 5000);
    
    updateCarousel(); // Initialize
});
</script>