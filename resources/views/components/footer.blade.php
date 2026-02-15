<!-- Footer Section -->
<footer class="relative bg-gradient-to-br from-gray-900 to-gray-800 text-white py-20 overflow-hidden">
    <!-- Background elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 opacity-5 rotate-45">
            <img src="{{ asset('images/isotipo/Alexis_Arceo_isotipo_negro.png') }}" alt="Isotipo" class="w-64 h-64 object-contain">
        </div>
        <div class="absolute bottom-1/4 right-1/3 opacity-5 -rotate-45">
            <img src="{{ asset('images/isotipo/Alexis_Arceo_isotipo_negro.png') }}" alt="Isotipo" class="w-64 h-64 object-contain">
        </div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Company Info -->
            <div>
                <div class="flex items-center mb-6">
                    <img src="{{ asset('images/logo/Alexis_Arceo_logo_blanco.png') }}" alt="Logo" class="h-20 mr-3">
                    
                </div>
                <p class="text-gray-400 mb-6">Encuentra tu hogar ideal con nuestro equipo de expertos en bienes raíces. Comprometidos con la excelencia y la satisfacción del cliente.</p>
                <div class="flex space-x-4">
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 text-white rounded-full flex items-center justify-center hover:from-blue-700 hover:to-blue-900 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 text-white rounded-full flex items-center justify-center hover:from-blue-500 hover:to-blue-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-pink-600 to-pink-800 text-white rounded-full flex items-center justify-center hover:from-pink-700 hover:to-pink-900 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-blue-700 to-blue-900 text-white rounded-full flex items-center justify-center hover:from-blue-800 hover:to-blue-950 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-bold mb-6 text-xl text-white border-b-2 border-blue-600 pb-2 inline-block">Enlaces Rápidos</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-400 hover:text-blue-300 transition-colors flex items-center group"><i class="fas fa-chevron-right mr-3 text-blue-500 group-hover:text-blue-300 transition-colors"></i> Inicio</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-300 transition-colors flex items-center group"><i class="fas fa-chevron-right mr-3 text-blue-500 group-hover:text-blue-300 transition-colors"></i> Propiedades</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-300 transition-colors flex items-center group"><i class="fas fa-chevron-right mr-3 text-blue-500 group-hover:text-blue-300 transition-colors"></i> Agentes</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-300 transition-colors flex items-center group"><i class="fas fa-chevron-right mr-3 text-blue-500 group-hover:text-blue-300 transition-colors"></i> Blog</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-300 transition-colors flex items-center group"><i class="fas fa-chevron-right mr-3 text-blue-500 group-hover:text-blue-300 transition-colors"></i> Contacto</a></li>
                </ul>
            </div>

            

            <!-- Contact Info -->
            <div>
                <h4 class="font-bold mb-6 text-xl text-white border-b-2 border-blue-600 pb-2 inline-block">Contacto</h4>
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center flex-shrink-0 shadow-md">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="ml-4">
                            <h5 class="font-medium text-white">Dirección</h5>
                            <p class="text-gray-400">Av. 1234, Norte, Merida</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-800 rounded-lg flex items-center justify-center flex-shrink-0 shadow-md">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="ml-4">
                            <h5 class="font-medium text-white">Teléfono</h5>
                            <p class="text-gray-400">+51 999 888 777</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-800 rounded-lg flex items-center justify-center flex-shrink-0 shadow-md">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="ml-4">
                            <h5 class="font-medium text-white">Email</h5>
                            <p class="text-gray-400">info@alexisaceo.com</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        

        <div class="border-t border-gray-800 pt-8 text-center">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">&copy; {{ date('Y') }} Alexis Arcea Real State. Todos los derechos reservados.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacidad</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Términos</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Mapa del Sitio</a>
                </div>
            </div>
        </div>
    </div>
</footer>