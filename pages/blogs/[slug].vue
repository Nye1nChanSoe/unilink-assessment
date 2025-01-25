<script setup lang="ts">
const route = useRoute();
</script>

<template>
  <div>
    <h1>{{ route.params.slug }}</h1>
  </div>
</template>
  