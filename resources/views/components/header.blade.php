<header class="bg-white shadow-md py-3 sticky top-0 z-50">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('images/logo/Alexis_Arceo_logo_negro.png') }}" alt="Alexis arceo" class="h-12">
        </div>
        <nav class="hidden md:block" aria-label="Menú principal">
            <ul class="flex space-x-8">
                <li><a href="#hero" class="text-gray-600 hover:text-blue-500 transition-colors font-medium">Inicio</a></li>
                <li><a href="#services" class="text-gray-600 hover:text-blue-500 transition-colors font-medium">Servicios</a></li>
                <li><a href="#properties" class="text-gray-600 hover:text-blue-500 transition-colors font-medium">Propiedades</a></li>
                <li><a href="#work-showcase" class="text-gray-600 hover:text-blue-500 transition-colors font-medium">Proyectos</a></li>
                <li>
                    <div class="hs-dropdown [--auto-close:inside] relative inline-flex">
                        <button type="button" class="hs-dropdown-toggle text-gray-600 hover:text-blue-500 transition-colors font-medium" aria-expanded="false" aria-haspopup="true" aria-label="Menú adicional">
                            Más <i class="fas fa-chevron-down ml-1 transform group-open:rotate-180 transition-transform fa-fw"></i>
                        </button>
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-40 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-label="Menú desplegable">
                            <div class="p-1 space-y-0.5">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#stats" role="menuitem">Estadísticas</a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#testimonials" role="menuitem">Testimonios</a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#contact" role="menuitem">Contacto</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="flex items-center space-x-4">
            <button id="mobile-menu-button" class="md:hidden text-gray-600" aria-label="Abrir menú móvil" aria-expanded="false">
                <i class="fa-solid fa-bars fa-fade"></i>
            </button>
        </div>
    </div>
    <!-- Menú móvil -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg rounded-lg absolute left-4 right-4 mt-2 py-4 px-6 z-50">
        <nav aria-label="Menú móvil">
            <ul class="space-y-4">
                <li><a href="#hero" class="block text-gray-600 hover:text-blue-500 transition-colors font-medium py-2">Inicio</a></li>
                <li><a href="#services" class="block text-gray-600 hover:text-blue-500 transition-colors font-medium py-2">Servicios</a></li>
                <li><a href="#properties" class="block text-gray-600 hover:text-blue-500 transition-colors font-medium py-2">Propiedades</a></li>
                <li><a href="#work-showcase" class="block text-gray-600 hover:text-blue-500 transition-colors font-medium py-2">Proyectos</a></li>
                <li>
                    <details class="group">
                        <summary class="flex justify-between items-center text-gray-600 hover:text-blue-500 transition-colors font-medium py-2 cursor-pointer">
                            <span>Más</span>
                            <i class="fas fa-chevron-down ml-1 transform group-open:rotate-180 transition-transform fa-fw"></i>
                        </summary>
                        <div class="mt-2 pl-4 space-y-2">
                            <a href="#stats" class="block text-gray-600 hover:text-blue-500 transition-colors font-medium py-1">Estadísticas</a>
                            <a href="#testimonials" class="block text-gray-600 hover:text-blue-500 transition-colors font-medium py-1">Testimonios</a>
                            <a href="#contact" class="block text-gray-600 hover:text-blue-500 transition-colors font-medium py-1">Contacto</a>
                        </div>
                    </details>
                </li>
            </ul>
        </nav>
    </div>
</header>