<template>
  <div class="bg-white rounded-lg shadow-md overflow-hidden text-center p-6">
    <img :src="agent.avatar" :alt="agent.name" class="w-24 h-24 rounded-full mx-auto mb-4" />
    <h3 class="font-bold text-lg">{{ agent.name }}</h3>
    <p class="text-gray-600">{{ agent.role }}</p>
    <button class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg">Contactar</button>
  </div>
</template>

<script setup>
defineProps({
  agent: Object
});
</script>