<template>
  <div class="debug-border bg-red-100 p-4">
    <h2 class="text-xl font-bold">Componente de prueba</h2>
    <p>Este componente debería ser visible si Vue está funcionando correctamente</p>
  </div>
</template>

<script setup>
console.log('Componente de prueba cargado');
</script>

<style scoped>
.debug-border {
  border: 2px solid red;
}
</style>