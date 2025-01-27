<script setup lang="ts">
import type { Author, BlogPost } from "~/types";

const config = useRuntimeConfig();
const endpoint = "blog-posts";
const { data, error } = await useFetch<BlogPost[]>(
  `${config.public.apiURL}/${config.public.apiVersion}/${endpoint}`,
  {
    server: false,
  }
);
</script>

<template>
  <div v-if="error">
    <p>Error fetching data: {{ error.message }}</p>
  </div>
  <div v-else>
    <p>Data: {{ data?.at(0)?.author.name }}</p>
  </div>
</template>
