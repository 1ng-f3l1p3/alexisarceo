<template>
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
</template>