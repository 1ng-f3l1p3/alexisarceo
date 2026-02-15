<!-- Contact Section -->
<section id="contact" class="relative py-20 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
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
            <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">¿Listo para <span class="text-blue-600">comenzar</span> tu proyecto?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Contáctanos hoy mismo y descubre cómo podemos ayudarte a encontrar la propiedad perfecta o vender tu inmueble al mejor precio</p>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Contact Information -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-8">Información de Contacto</h3>

                        <div class="space-y-8">
                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                </div>
                                <div class="ml-6">
                                    <h4 class="font-bold text-gray-800 text-lg mb-2">Dirección</h4>
                                    <p class="text-gray-600 text-lg">Av.  1234, Oficina 501<br>Norte, Merida, Yucata</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone-alt text-white text-xl"></i>
                                </div>
                                <div class="ml-6">
                                    <h4 class="font-bold text-gray-800 text-lg mb-2">Teléfono</h4>
                                    <p class="text-gray-600 text-lg">+51 999 888 777<br>Lunes a Viernes, 9:00 AM - 6:00 PM</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-white text-xl"></i>
                                </div>
                                <div class="ml-6">
                                    <h4 class="font-bold text-gray-800 text-lg mb-2">Email</h4>
                                    <p class="text-gray-600 text-lg">contacto@alexisarceo.com<br>ventas@alexisarceo.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-clock text-white text-xl"></i>
                                </div>
                                <div class="ml-6">
                                    <h4 class="font-bold text-gray-800 text-lg mb-2">Horario</h4>
                                    <p class="text-gray-600 text-lg">Lunes a Viernes: 9:00 AM - 6:00 PM<br>Sábados: 10:00 AM - 2:00 PM</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-12">
                            <h4 class="font-bold text-gray-800 text-lg mb-6">Síguenos en redes sociales:</h4>
                            <div class="flex space-x-6">
                                <a href="#" class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors shadow-md hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-pink-600 text-white rounded-full flex items-center justify-center hover:bg-pink-700 transition-colors shadow-md hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition-colors shadow-md hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Map or Call to Action -->
                    <div class="flex flex-col justify-center items-center">
                        <div class="text-center mb-10">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">¿Prefieres una visita personalizada?</h3>
                            <p class="text-gray-600 mb-8">Visita nuestra oficina principal o agenda una reunión con uno de nuestros agentes especializados</p>
                            
                            <div class="space-y-4">
                                <a href="#" class="block bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-8 py-4 rounded-xl hover:from-blue-700 hover:to-indigo-800 transition-all font-bold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
                                    <i class="fas fa-calendar-check mr-2"></i> Agendar Reunión
                                </a>
                                <a href="#" class="block border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-xl hover:bg-blue-600 hover:text-white transition-colors font-bold text-lg">
                                    <i class="fas fa-map-marker-alt mr-2"></i> Ver Ubicación
                                </a>
                            </div>
                        </div>
                        
                        <!-- Placeholder for map -->
                        <div class="w-full h-64 bg-gray-200 rounded-2xl flex items-center justify-center border-2 border-dashed border-gray-300">
                            <div class="text-center">
                                <i class="fas fa-map-marked-alt text-blue-600 text-4xl mb-3"></i>
                                <p class="text-gray-600 font-medium">Ubicación de nuestra oficina</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>