import './bootstrap';
import { HSStaticMethods } from 'preline';

// Inicializar Preline después de que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar todos los componentes de Preline
    HSStaticMethods.autoInit();

    // Funcionalidad del menú móvil
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');

            // Actualizar el estado de aria-expanded
            const isExpanded = !mobileMenu.classList.contains('hidden');
            mobileMenuButton.setAttribute('aria-expanded', isExpanded.toString());

            // Cambiar el icono del botón si es necesario
            const icon = mobileMenuButton.querySelector('svg');
            if (icon) {
                const paths = icon.querySelectorAll('path');
                // Podríamos cambiar el icono entre hamburguesa y X aquí si queremos
            }
        });

        // Cerrar el menú móvil al hacer clic fuera de él
        document.addEventListener('click', function(event) {
            const isClickInsideButton = mobileMenuButton.contains(event.target);
            const isClickInsideMenu = mobileMenu.contains(event.target);

            if (!isClickInsideButton && !isClickInsideMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            }
        });
    }
    
    // Añadir desplazamiento suave para los enlaces de navegación
    const navigationLinks = document.querySelectorAll('nav a[href^="#"]');
    
    navigationLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                // Calcular el desplazamiento teniendo en cuenta el header fijo
                const offsetPosition = targetSection.offsetTop - 80; // 80px para compensar el header
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Cerrar el menú móvil al hacer clic en un enlace de navegación
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            }
        });
    });
});
