<script setup lang="ts">
import type { BlogPost } from "~/types";
import { ref, computed } from "vue";

const config = useRuntimeConfig();
const { data: blogPosts, error } = useFetch<BlogPost[]>(
  `${config.public.apiURL}/${config.public.apiVersion}/blog-posts`,
  { server: false }
);

// Pagination and filtering state
const rowsPerPage = ref(6); // 2 columns x 3 rows
const currentPage = ref(0);
const search = ref("");

const sortOptions = [
  { label: "Newest first", value: "newest" },
  { label: "Oldest first", value: "oldest" },
  { label: "Most popular", value: "popular" },
];
const selectedSort = ref(sortOptions[0]);

const sortedPosts = computed(() => {
  const posts = blogPosts.value || [];
  const sorted = [...posts];

  switch (selectedSort.value.value) {
    case "newest":
      sorted.sort(
        (a, b) =>
          new Date(b.publishedDate).getTime() -
          new Date(a.publishedDate).getTime()
      );
      break;
    case "oldest":
      sorted.sort(
        (a, b) =>
          new Date(a.publishedDate).getTime() -
          new Date(b.publishedDate).getTime()
      );
      break;
    case "popular":
      // TODO: popular sorting logic
      break;
  }

  return sorted;
});

const filteredPosts = computed(() => {
  if (!search.value.trim()) return sortedPosts.value;

  const term = search.value.toLowerCase();
  return sortedPosts.value.filter((post) =>
    post.title.toLowerCase().includes(term)
  );
});

const paginatedPosts = computed(() => {
  const start = currentPage.value * rowsPerPage.value;
  const end = start + rowsPerPage.value;
  return filteredPosts.value.slice(start, end);
});

const onPageChange = (event: any) => {
  currentPage.value = event.page;
  rowsPerPage.value = event.rows;
};
</script>

<template>
  <section class="container mx-auto">
    <!-- Search & Sort -->
    <div
      class="flex flex-col gap-y-2 items-center justify-between my-9 md:flex-row"
    >
      <!-- Search -->
      <IconField class="w-full !text-sm md:w-80">
        <InputIcon class="pi pi-search" />
        <InputText
          v-model="search"
          placeholder="Search"
          class="w-full !text-sm md:w-80"
        />
      </IconField>
      <!-- Sort Dropdown -->
      <Select
        v-model="selectedSort"
        :options="sortOptions"
        panelClass="!text-sm"
        optionLabel="label"
        placeholder="Newest first"
        appendTo="body"
        class="w-full !text-sm md:w-80"
      >
        <!-- Selected Value Display -->
        <template #value>
          <i class="pi pi-arrow-down mr-3 text-gray-400 text-sm"></i>
          <span class="text-card-title">{{ selectedSort.label }}</span>
        </template>

        <!-- Right Icon -->
        <template #dropdownicon>
          <i class="pi pi-chevron-down text-gray-400"></i>
        </template>
      </Select>
    </div>

    <!-- Blog Cards (use paginatedPosts) -->
    <div
      class="grid grid-col-1 grid-rows-6 gap-4 md:grid-cols-2 md:grid-rows-3 md:gap-8"
    >
      <BlogCard v-for="post in paginatedPosts" :key="post.id" :data="post" />
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-10 mb-24">
      <Paginator
        :template="{
          '640px': 'PageLinks',
          default:
            'FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink JumpToPageDropdown',
        }"
        :rows="rowsPerPage"
        :totalRecords="filteredPosts.length"
        :rowsPerPageOptions="[6, 12, 18]"
        :page="currentPage"
        class="text-xs font-normal md:text-sm"
        @page="onPageChange"
      />
    </div>
  </section>
</template>
