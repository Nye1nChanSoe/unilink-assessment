<script setup lang="ts">
const totalCards = Array.from({ length: 10 }, (_, index) => ({
  id: index + 1,
  content: `Card ${index + 1}`,
}));

const rowsPerPage = ref(6); // 2 columns x 3 rows
const currentPage = ref(0);
const search = ref("");

// Compute filtered and paginated items
const filteredCards = computed(() => {
  if (!search.value.trim()) return totalCards;
  return totalCards.filter((card) =>
    card.content.toLowerCase().includes(search.value.toLowerCase())
  );
});

const paginatedCards = computed(() => {
  const start = currentPage.value * rowsPerPage.value;
  const end = start + rowsPerPage.value;
  return filteredCards.value.slice(start, end);
});

// Update the current page when the paginator changes
const onPageChange = (event: any) => {
  currentPage.value = event.page;
  rowsPerPage.value = event.rows;
};

const sortOptions = [
  { label: "Newest first", value: "newest" },
  { label: "Oldest first", value: "oldest" },
  { label: "Most popular", value: "popular" },
];

const selectedSort = ref({ label: "Newest first", value: "newest" });
</script>

<template>
  <section class="container mx-auto">
    <!-- Search and sort -->
    <div class="flex items-center justify-between my-9">
      <IconField>
        <InputIcon class="pi pi-search" />
        <InputText
          v-model="search"
          placeholder="Search"
          class="w-80 !text-sm"
        />
      </IconField>
      <Select
        v-model="selectedSort"
        :options="sortOptions"
        class="w-80 !text-sm"
        panelClass="!text-sm"
        placeholder="Newest first"
        optionLabel="label"
        appendTo="body"
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

    <!-- Contents -->
    <div class="grid grid-cols-2 grid-rows-3 gap-8">
      <BlogCard
        v-for="(item, index) in paginatedCards"
        :key="item.id"
        :data="item"
      />
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-10 mb-24">
      <Paginator
        :rows="rowsPerPage"
        :totalRecords="filteredCards.length"
        :rowsPerPageOptions="[6, 12, 18]"
        :page="currentPage"
        @page="onPageChange"
        class="text-sm font-normal"
      />
    </div>
  </section>
</template>
