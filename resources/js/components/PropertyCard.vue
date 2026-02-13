<template>
  <div class="bg-white rounded-lg shadow-md overflow-hidden border border-[#B2AB81]">
    <img :src="property.image" :alt="property.title" class="w-full h-48 object-cover" />
    <div class="p-4 bg-[#F2EEE4]">
      <h3 class="font-bold text-lg text-[#6C2F27]">{{ property.title }}</h3>
      <p class="text-[#4C4F3C]">{{ property.location }}</p>
      <div class="mt-2 flex justify-between items-center">
        <span class="text-[#A8673D] font-bold text-lg">${{ property.price }}</span>
        <button class="text-[#6C2F27] hover:text-[#A8673D] underline transition-colors">Ver detalles</button>
      </div>
    </div>
  </div>
</template>

<script setup>
defineProps({
  property: Object
});
</script>