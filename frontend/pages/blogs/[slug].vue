<script setup lang="ts">
import type { BlogPost } from "~/types";

const route = useRoute();
const toast = useToast();
const config = useRuntimeConfig();
const page_url = ref(config.public.baseURL + route.fullPath);

const { data, error } = useFetch<BlogPost>(
  `${config.public.apiURL}/${config.public.apiVersion}/blog-posts/${route.params.slug}`,
  {
    server: true,
  }
);

function copyLink() {
  navigator.clipboard.writeText(page_url.value).then(
    () => {
      toast.add({
        severity: "success",
        summary: "Link Copied",
        detail: "Copied to your clipboard.",
        life: 3000,
      });
    },
    () => {
      toast.add({
        severity: "error",
        summary: "Copy Failed",
        detail: "Failed to copy the link to the clipboard.",
        life: 3000,
      });
    }
  );
}
</script>

<template>
  <article v-if="data" class="flex flex-col items-center py-24 px-6">
    <!-- Title and Metadata -->
    <header class="max-w-[960px] text-center mb-16">
      <p class="text-card-link font-semibold mb-3">
        Published {{ formatDate(data.publishedDate) }}
      </p>
      <h1 class="text-5xl font-semibold mb-6 text-card-title">
        {{ data.title }}
      </h1>
      <p class="text-xl text-card-content mb-10 leading-relaxed">
        {{ data.subtitle }}
      </p>
      <div class="flex items-center justify-center gap-x-2">
        <Tag
          v-for="tag in data.tags"
          :key="tag.value"
          :icon="tag.icon"
          :value="tag.value"
          severity="secondary"
          rounded
          class="!font-normal"
        />
      </div>
    </header>

    <!-- Hero Image -->
    <div class="mb-24">
      <img
        :src="`https://placehold.co/2000x800`"
        alt="Hero image"
        class="w-full rounded-lg shadow-md"
      />
    </div>

    <!-- Content Section -->
    <section class="max-w-[720px]">
      <ClientOnly>
        <RichTextFormatter :text="data.contentHtml" />
      </ClientOnly>
    </section>

    <!-- Author Section -->
    <footer class="border-t pt-8 w-[720px]">
      <div class="flex items-center justify-between mx-auto px-6 space-x-6">
        <!-- Author's Info -->
        <div class="flex items-center space-x-4">
          <img
            :src="`https://placehold.co/200x200`"
            alt="Author's profile picture"
            class="w-16 h-16 rounded-full"
          />
          <div>
            <p class="font-semibold text-card-title">
              {{ data.author.name }}
            </p>
            <p class="text-sm text-card-content">{{ data.author.title }}</p>
          </div>
        </div>
        <!-- Social Links -->
        <div class="flex space-x-3">
          <Toast position="bottom-right" />
          <Button
            icon="pi pi-clone"
            label="Copy link"
            variant="outlined"
            severity="secondary"
            class="!text-sm"
            @click="copyLink"
          />
          <a
            :href="`https://twitter.com/share?url=${page_url}`"
            target="_blank"
            rel="noopener noreferrer"
          >
            <Button
              icon="pi pi-twitter"
              severity="secondary"
              variant="outlined"
              class="!text-sm"
            />
          </a>
          <a
            :href="`https://www.facebook.com/sharer/sharer.php?u=${page_url}`"
            target="_blank"
            rel="noopener noreferrer"
          >
            <Button
              icon="pi pi-facebook"
              severity="secondary"
              variant="outlined"
              class="!text-sm"
            />
          </a>
          <a
            :href="`https://www.linkedin.com/sharing/share-offsite/?url=${page_url}`"
            target="_blank"
            rel="noopener noreferrer"
          >
            <Button
              icon="pi pi-linkedin"
              severity="secondary"
              variant="outlined"
              class="!text-sm"
            />
          </a>
        </div>
      </div>
    </footer>
  </article>
</template>
