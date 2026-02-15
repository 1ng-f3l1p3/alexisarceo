<!-- Mission, Vision and Values Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">Nuestra <span class="text-blue-600">Misión, Visión y Valores</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Conoce los pilares que guían nuestro compromiso con la excelencia en el servicio inmobiliario</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Mission Card -->
            <div class="group bg-white rounded-2xl shadow-lg p-8 border border-gray-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-bullseye text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-center text-gray-800 mb-4">Misión</h3>
                <p class="text-gray-600 text-center">Conectar a las personas con su hogar ideal a través de un servicio inmobiliario excepcional, combinando tecnología innovadora con atención personalizada para hacer realidad sus sueños de vivienda.</p>
            </div>

            <!-- Vision Card -->
            <div class="group bg-white rounded-2xl shadow-lg p-8 border border-gray-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-eye text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-center text-gray-800 mb-4">Visión</h3>
                <p class="text-gray-600 text-center">Ser la empresa líder en el sector inmobiliario, reconocida por nuestra integridad, excelencia en el servicio y capacidad para transformar el proceso de compra y venta de propiedades en una experiencia satisfactoria.</p>
            </div>

            <!-- Values Card -->
            <div class="group bg-white rounded-2xl shadow-lg p-8 border border-gray-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-handshake text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-center text-gray-800 mb-4">Valores</h3>
                <p class="text-gray-600 text-center">Transparencia, integridad, compromiso con nuestros clientes, excelencia en el servicio y responsabilidad social, son los principios que guían cada una de nuestras acciones y decisiones.</p>
            </div>
        </div>

        <!-- Detailed Modal Button -->
        <div class="text-center mt-12">
            <button id="open-values-modal" class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-8 py-4 rounded-full hover:from-blue-700 hover:to-indigo-800 transition-all font-bold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
                Conoce más sobre nuestros valores
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div id="values-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-3xl font-bold text-gray-800">Nuestros Valores Detallados</h3>
                    <button id="close-modal-btn" class="text-gray-500 hover:text-gray-700 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-blue-500 pl-6 py-2">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Transparencia</h4>
                        <p class="text-gray-600">Operamos con total honestidad y claridad en todas nuestras transacciones, asegurando que nuestros clientes comprendan cada paso del proceso.</p>
                    </div>
                    
                    <div class="border-l-4 border-indigo-500 pl-6 py-2">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Integridad</h4>
                        <p class="text-gray-600">Mantenemos altos estándares éticos en todas nuestras relaciones, construyendo confianza a través de acciones consistentes con nuestros principios.</p>
                    </div>
                    
                    <div class="border-l-4 border-emerald-500 pl-6 py-2">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Compromiso con el Cliente</h4>
                        <p class="text-gray-600">Nos dedicamos a entender y satisfacer las necesidades únicas de cada cliente, proporcionando soluciones personalizadas y atención dedicada.</p>
                    </div>
                    
                    <div class="border-l-4 border-amber-500 pl-6 py-2">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Excelencia en el Servicio</h4>
                        <p class="text-gray-600">Buscamos la perfección en cada detalle, desde la atención inicial hasta el cierre de la transacción, garantizando resultados sobresalientes.</p>
                    </div>
                    
                    <div class="border-l-4 border-rose-500 pl-6 py-2">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Responsabilidad Social</h4>
                        <p class="text-gray-600">Contribuimos al desarrollo sostenible de nuestras comunidades y promovemos prácticas inmobiliarias responsables con el medio ambiente.</p>
                    </div>
                </div>
                
                <div class="mt-8 text-center">
                    <button id="close-modal-bottom" class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-8 py-3 rounded-lg hover:from-blue-700 hover:to-indigo-800 transition-all font-medium">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Modal -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('values-modal');
    const openModalBtn = document.getElementById('open-values-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const closeModalBottomBtn = document.getElementById('close-modal-bottom');
    
    // Abrir modal
    openModalBtn.addEventListener('click', function() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden'; // Evitar scroll del fondo
    });
    
    // Cerrar modal
    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = ''; // Restaurar scroll
    }
    
    if(closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
    if(closeModalBottomBtn) closeModalBottomBtn.addEventListener('click', closeModal);
    
    // Cerrar al hacer clic fuera del contenido del modal
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });
    
    // Cerrar con tecla Escape
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });
});
</script>