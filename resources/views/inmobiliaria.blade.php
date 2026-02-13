<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InmoLaravel - Encuentra tu hogar ideal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F2EEE4]">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-[#F2EEE4] shadow-md py-3">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="text-xl font-bold text-[#6C2F27]">InmoLaravel</div>
                <nav>
                    <ul class="flex space-x-6">
                        <li><a href="#" class="text-[#4C4F3C] hover:text-[#A8673D] transition-colors">Inicio</a></li>
                        <li><a href="#" class="text-[#4C4F3C] hover:text-[#A8673D] transition-colors">Propiedades</a></li>
                        <li><a href="#" class="text-[#4C4F3C] hover:text-[#A8673D] transition-colors">Agentes</a></li>
                        <li><a href="#" class="text-[#4C4F3C] hover:text-[#A8673D] transition-colors">Blog</a></li>
                        <li><a href="#" class="text-[#4C4F3C] hover:text-[#A8673D] transition-colors">Contacto</a></li>
                    </ul>
                </nav>
                <button class="bg-[#6C2F27] text-white px-4 py-2 rounded-lg hover:bg-[#4C4F3C] transition-colors">Iniciar Sesión</button>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-[#6C2F27] to-[#A8673D] text-[#F2EEE4] py-20">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl font-bold mb-4">Encuentra tu hogar ideal</h1>
                <p class="text-xl mb-8">Explora miles de propiedades disponibles para comprar o alquilar.</p>
                <form class="max-w-2xl mx-auto bg-[#F2EEE4] text-[#4C4F3C] rounded-lg shadow-lg p-4 grid grid-cols-1 md:grid-cols-4 gap-4">
                    <input type="text" placeholder="Ubicación" class="col-span-2 p-3 rounded border border-[#B2AB81]" />
                    <select class="p-3 rounded border border-[#B2AB81]">
                        <option>Tipo de propiedad</option>
                        <option>Casa</option>
                        <option>Apartamento</option>
                        <option>Terreno</option>
                    </select>
                    <button class="bg-[#6C2F27] text-white p-3 rounded-lg hover:bg-[#4C4F3C] transition-colors">Buscar</button>
                </form>
            </div>
        </section>

        <!-- Property Gallery -->
        <section class="py-12 bg-[#F2EEE4]">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-8 text-[#6C2F27]">Propiedades Destacadas</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Property Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden border border-[#B2AB81]">
                        <img src="https://via.placeholder.com/400x300" alt="Casa Moderna" class="w-full h-48 object-cover" />
                        <div class="p-4 bg-[#F2EEE4]">
                            <h3 class="font-bold text-lg text-[#6C2F27]">Casa Moderna</h3>
                            <p class="text-[#4C4F3C]">Ciudad Jardín, Lima</p>
                            <div class="mt-2 flex justify-between items-center">
                                <span class="text-[#A8673D] font-bold text-lg">$500,000</span>
                                <button class="text-[#6C2F27] hover:text-[#A8673D] underline transition-colors">Ver detalles</button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden border border-[#B2AB81]">
                        <img src="https://via.placeholder.com/400x300" alt="Apartamento de Lujo" class="w-full h-48 object-cover" />
                        <div class="p-4 bg-[#F2EEE4]">
                            <h3 class="font-bold text-lg text-[#6C2F27]">Apartamento de Lujo</h3>
                            <p class="text-[#4C4F3C]">Miraflores, Lima</p>
                            <div class="mt-2 flex justify-between items-center">
                                <span class="text-[#A8673D] font-bold text-lg">$350,000</span>
                                <button class="text-[#6C2F27] hover:text-[#A8673D] underline transition-colors">Ver detalles</button>
                            </div>
                        </div>
                    </div>

                    <!-- Property Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden border border-[#B2AB81]">
                        <img src="https://via.placeholder.com/400x300" alt="Terreno Urbano" class="w-full h-48 object-cover" />
                        <div class="p-4 bg-[#F2EEE4]">
                            <h3 class="font-bold text-lg text-[#6C2F27]">Terreno Urbano</h3>
                            <p class="text-[#4C4F3C]">San Isidro, Lima</p>
                            <div class="mt-2 flex justify-between items-center">
                                <span class="text-[#A8673D] font-bold text-lg">$200,000</span>
                                <button class="text-[#6C2F27] hover:text-[#A8673D] underline transition-colors">Ver detalles</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-12 bg-[#4C4F3C] text-[#F2EEE4]">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-8 text-[#B2AB81]">Lo que dicen nuestros clientes</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-[#6C2F27] p-6 rounded-lg shadow-lg">
                        <p class="italic text-[#F2EEE4]">"Excelente servicio, encontré mi casa ideal en tiempo récord."</p>
                        <div class="mt-4 flex items-center">
                            <img src="https://via.placeholder.com/40x40" alt="Juan Pérez" class="w-10 h-10 rounded-full mr-3" />
                            <span class="text-[#B2AB81]">Juan Pérez</span>
                        </div>
                    </div>
                    <div class="bg-[#6C2F27] p-6 rounded-lg shadow-lg">
                        <p class="italic text-[#F2EEE4]">"Muy profesionales y atentos a cada detalle."</p>
                        <div class="mt-4 flex items-center">
                            <img src="https://via.placeholder.com/40x40" alt="María López" class="w-10 h-10 rounded-full mr-3" />
                            <span class="text-[#B2AB81]">María López</span>
                        </div>
                    </div>
                    <div class="bg-[#6C2F27] p-6 rounded-lg shadow-lg">
                        <p class="italic text-[#F2EEE4]">"La plataforma es intuitiva y fácil de usar."</p>
                        <div class="mt-4 flex items-center">
                            <img src="https://via.placeholder.com/40x40" alt="Carlos Rodríguez" class="w-10 h-10 rounded-full mr-3" />
                            <span class="text-[#B2AB81]">Carlos Rodríguez</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-[#6C2F27] text-[#F2EEE4] py-12 mt-auto">
            <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-[#B2AB81]">InmoLaravel</h3>
                    <p>Encuentra tu hogar ideal con nosotros.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4 text-[#B2AB81]">Enlaces</h4>
                    <ul>
                        <li><a href="#" class="hover:text-[#A8673D] transition-colors">Inicio</a></li>
                        <li><a href="#" class="hover:text-[#A8673D] transition-colors">Propiedades</a></li>
                        <li><a href="#" class="hover:text-[#A8673D] transition-colors">Agentes</a></li>
                        <li><a href="#" class="hover:text-[#A8673D] transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4 text-[#B2AB81]">Contacto</h4>
                    <p>Email: info@inmolaravel.com</p>
                    <p>Teléfono: +51 999 888 777</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4 text-[#B2AB81]">Redes Sociales</h4>
                    <ul>
                        <li><a href="#" class="hover:text-[#A8673D] transition-colors">Facebook</a></li>
                        <li><a href="#" class="hover:text-[#A8673D] transition-colors">Instagram</a></li>
                        <li><a href="#" class="hover:text-[#A8673D] transition-colors">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-[#B2AB81] mt-8 pt-8 text-center">
                <p>&copy; {{ date('Y') }} InmoLaravel. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</body>
</html>