<template>
  <div>
    <main-header />
    <hero-section />
    <property-gallery />
    <testimonials />
    <main-footer />
  </div>
</template>

<script setup>
import { defineAsyncComponent } from 'vue';

// Importar componentes de forma asíncrona para mejor diagnóstico
const MainHeader = defineAsyncComponent(() => import('./Header.vue'));
const HeroSection = defineAsyncComponent(() => import('./HeroSection.vue'));
const PropertyGallery = defineAsyncComponent(() => import('./PropertyGallery.vue'));
const Testimonials = defineAsyncComponent(() => import('./Testimonials.vue'));
const MainFooter = defineAsyncComponent(() => import('./Footer.vue'));
</script>