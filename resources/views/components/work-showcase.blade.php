<!-- Work Showcase Section -->
<section id="work-showcase" class="relative py-20 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
    <!-- Background elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/3 left-1/4 opacity-5 rotate-45">
            <img src="{{ asset('images/isotipo/Alexis_Arceo_isotipo_negro.png') }}" alt="Isotipo" class="w-64 h-64 object-contain">
        </div>
        <div class="absolute bottom-1/4 right-1/3 opacity-5 -rotate-45">
            <img src="{{ asset('images/isotipo/Alexis_Arceo_isotipo_negro.png') }}" alt="Isotipo" class="w-64 h-64 object-contain">
        </div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">Nuestros <span class="text-blue-600">Proyectos</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Descubre algunos de nuestros proyectos más emblemáticos y exitosos</p>
        </div>

        <!-- Filters -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="filter-btn active px-6 py-2 rounded-full bg-blue-600 text-white font-medium transition-colors" data-filter="all">Todos</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-white text-gray-600 hover:bg-blue-50 hover:text-blue-600 font-medium border border-gray-200 transition-colors" data-filter="residential">Residenciales</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-white text-gray-600 hover:bg-blue-50 hover:text-blue-600 font-medium border border-gray-200 transition-colors" data-filter="commercial">Comerciales</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-white text-gray-600 hover:bg-blue-50 hover:text-blue-600 font-medium border border-gray-200 transition-colors" data-filter="luxury">Lujo</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Project Card 1 -->
            <div class="group project-card" data-category="residential luxury">
                <div class="relative overflow-hidden rounded-2xl shadow-xl h-full">
                    <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=600&h=400&q=80" alt="Residencial Vista Hermosa" class="w-full h-100 object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <div class="bg-white/90 backdrop-blur-sm rounded-xl p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Residencial Vista Hermosa</h3>
                            <p class="text-gray-600 mb-4">Urbanización de lujo con amenities exclusivos y vistas panorámicas.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Desde $250,000</span>
                                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium flex items-center">
                                    Ver detalles <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="group project-card" data-category="commercial">
                <div class="relative overflow-hidden rounded-2xl shadow-xl h-full">
                    <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=600&h=400&q=80" alt="Centro Comercial Metrópolis" class="w-full h-100 object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <div class="bg-white/90 backdrop-blur-sm rounded-xl p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Centro Comercial Metrópolis</h3>
                            <p class="text-gray-600 mb-4">Complejo comercial con tiendas, restaurantes y entretenimiento.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Desde $450,000</span>
                                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium flex items-center">
                                    Ver detalles <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="group project-card" data-category="residential luxury">
                <div class="relative overflow-hidden rounded-2xl shadow-xl h-full">
                    <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=600&h=400&q=80" alt="Torres del Parque" class="w-full h-100 object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <div class="bg-white/90 backdrop-blur-sm rounded-xl p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Torres del Parque</h3>
                            <p class="text-gray-600 mb-4">Edificio de apartamentos de lujo con amenidades de primera clase.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Desde $180,000</span>
                                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium flex items-center">
                                    Ver detalles <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-16">
            <a href="#" class="inline-block bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-10 py-4 rounded-full hover:from-blue-700 hover:to-indigo-800 transition-all font-bold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-300">Ver Portafolio Completo</a>
        </div>
    </div>
</section>

<!-- Script para filtrado de proyectos -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remover clase active de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Añadir clase active al botón clickeado
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                
                if (filterValue === 'all' || category.includes(filterValue)) {
                    card.style.display = 'inline-block';
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>