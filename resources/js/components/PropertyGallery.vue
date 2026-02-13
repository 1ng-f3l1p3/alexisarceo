<template>
  <section class="py-12 bg-[#F2EEE4]">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8 text-[#6C2F27]">Propiedades Destacadas</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <PropertyCard v-for="property in properties" :key="property.id" :property="property" />
      </div>
    </div>
  </section>
</template>

<script setup>
import PropertyCard from './PropertyCard.vue';

const properties = [
  {
    id: 1,
    title: 'Casa Moderna',
    location: 'Ciudad Jardín, Lima',
    price: '500,000',
    image: 'https://via.placeholder.com/400x300'
  },
  {
    id: 2,
    title: 'Apartamento de Lujo',
    location: 'Miraflores, Lima',
    price: '350,000',
    image: 'https://via.placeholder.com/400x300'
  },
  {
    id: 3,
    title: 'Terreno Urbano',
    location: 'San Isidro, Lima',
    price: '200,000',
    image: 'https://via.placeholder.com/400x300'
  }
];
</script>