<template>
  <footer class="bg-[#6C2F27] text-[#F2EEE4] py-12">
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
      <p>&copy; {{ new Date().getFullYear() }} InmoLaravel. Todos los derechos reservados.</p>
    </div>
  </footer>
</template>