import './bootstrap';
import { HSStaticMethods } from 'preline';

// Inicializar Preline después de que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar todos los componentes de Preline
    HSStaticMethods.autoInit();
});
