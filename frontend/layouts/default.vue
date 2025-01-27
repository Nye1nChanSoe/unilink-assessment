<script setup lang="ts"></script>

<template>
  <section class="font-inter">
    <AppNav />
    <main class="px-mobile-gap md:px-page-gap">
      <slot />
    </main>
    <AppFooter />
  </section>
</template>
