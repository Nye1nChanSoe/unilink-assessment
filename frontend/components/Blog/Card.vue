<script setup lang="ts">
import type { BlogPost } from "~/types";

interface Props {
  data: BlogPost;
}

defineProps<Props>();
</script>

<template>
  <article
    class="flex flex-col h-full w-full rounded-lg border bg-white shadow-xs overflow-hidden transition-shadow duration-300 hover:shadow-md"
  >
    <!-- Image Section -->
    <figure class="relative">
      <NuxtImg
        :src="'/img/blog-image.png'"
        :alt="data.title"
        class="h-64 w-full object-cover"
      />
      <!-- Overlay -->
      <figcaption
        class="absolute bottom-0 flex w-full items-start justify-between bg-white/30 p-6 text-sm text-white backdrop-blur-md"
      >
        <div>
          <p class="font-semibold">{{ data.author.name }}</p>
          <p class="mt-px">{{ formatDate(data.publishedDate) }}</p>
        </div>
        <p class="font-semibold">{{ data.author.title }}</p>
      </figcaption>
    </figure>

    <section class="flex flex-col flex-1 px-6 py-8">
      <header>
        <h3 class="mb-3 text-xl font-semibold text-card-title">
          {{ data.title }}
        </h3>
      </header>
      <!-- Wrap the main paragraph in a div with `flex-1` 
           so it takes up leftover space and pushes the footer down. -->
      <div class="flex-1 mb-8">
        <p class="text-card-content">
          {{ data.subtitle }}
        </p>
      </div>
      <!-- Footer sits at the bottom of the card -->
      <footer>
        <NuxtLink
          :to="`/blogs/${data.slug}`"
          class="flex items-center text-card-link hover:text-card-link-inactive"
        >
          Read post
          <i class="pi pi-arrow-up-right ml-2 text-sm"></i>
        </NuxtLink>
      </footer>
    </section>
  </article>
</template>
