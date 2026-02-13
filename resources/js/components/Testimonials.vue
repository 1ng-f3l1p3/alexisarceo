<template>
  <section class="py-12 bg-[#4C4F3C] text-[#F2EEE4]">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8 text-[#B2AB81]">Lo que dicen nuestros clientes</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div v-for="testimonial in testimonials" :key="testimonial.id" class="bg-[#6C2F27] p-6 rounded-lg shadow-lg">
          <p class="italic text-[#F2EEE4]">"{{ testimonial.text }}"</p>
          <div class="mt-4 flex items-center">
            <img :src="testimonial.avatar" :alt="testimonial.author" class="w-10 h-10 rounded-full mr-3" />
            <span class="text-[#B2AB81]">{{ testimonial.author }}</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const testimonials = [
  {
    id: 1,
    text: 'Excelente servicio, encontré mi casa ideal en tiempo récord.',
    author: 'Juan Pérez',
    avatar: 'https://via.placeholder.com/40x40'
  },
  {
    id: 2,
    text: 'Muy profesionales y atentos a cada detalle.',
    author: 'María López',
    avatar: 'https://via.placeholder.com/40x40'
  },
  {
    id: 3,
    text: 'La plataforma es intuitiva y fácil de usar.',
    author: 'Carlos Rodríguez',
    avatar: 'https://via.placeholder.com/40x40'
  }
];
</script>