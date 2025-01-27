<script setup lang="ts">
import type { BlogPost } from "~/types";

const route = useRoute();
const toast = useToast();
const config = useRuntimeConfig();
const page_url = ref(config.public.baseURL + route.fullPath);

const { data, error } = useFetch<BlogPost>(
  `${config.public.apiURL}/${config.public.apiVersion}/blog-posts/${route.params.slug}`,
  {
    server: false,
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
  <article
    v-if="data"
    class="flex flex-col items-center py-10 md:py-24 md:px-6"
  >
    <!-- Title and Metadata -->
    <header
      class="max-w-[960px] text-center mb-section-mobile-gap md:mb-section-gap"
    >
      <p class="text-card-link text-sm font-semibold mb-meta-gap md:text-base">
        Published {{ formatDate(data.publishedDate) }}
      </p>
      <h1
        class="text-3xl font-semibold mb-header-gap text-card-title md:text-5xl"
      >
        {{ data.title }}
      </h1>
      <p
        class="text-base text-card-content mb-content-gap leading-relaxed md:text-xl"
      >
        {{ data.subtitle }}
      </p>
      <div class="flex flex-wrap gap-y-3 items-center justify-center gap-x-2">
        <Tag
          v-for="tag in data.tags"
          :key="tag.value"
          :icon="tag.icon"
          :value="tag.value"
          severity="secondary"
          rounded
          class="!text-xs !font-normal !md:text-sm"
        />
      </div>
    </header>

    <!-- Hero Image -->
    <div class="w-full h-72 mb-section-mobile-gap md:mb-section-gap md:h-auto">
      <NuxtImg
        src="/img/blog-image.png"
        alt="Hot air balloons"
        class="w-full h-full rounded object-cover"
      />
    </div>

    <!-- Content Section -->
    <section class="max-w-[720px]">
      <ClientOnly>
        <RichTextFormatter :text="data.contentHtml" />
      </ClientOnly>
    </section>

    <Divider layout="horizontal" class="max-w-[720px] !m-8" />

    <!-- Author Section -->
    <footer class="md:w-[720px]">
      <div
        class="flex flex-col gap-y-6 items-center justify-between md:flex-row"
      >
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
