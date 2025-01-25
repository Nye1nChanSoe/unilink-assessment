<script setup lang="ts">
const search = ref("");
const lang = ref("ENG");

const route = useRoute();

const menuItems = [
  { label: "Explore", link: "/explore" },
  { label: "All universities", link: "/universities" },
  { label: "Scholarship Program", link: "/scholarship-program" },
  { label: "Services", link: "/services" },
  { label: "Webinars", link: "/webinars" },
  { label: "Blogs", link: "/blogs" },
  { label: "Contact us", link: "/contact" },
];
</script>

<template>
  <header class="container mx-auto">
    <!-- Top Navigation -->
    <div
      class="flex justify-between items-center px-20 py-2 gap-x-[50px] text-sm"
    >
      <!-- Logo -->
      <NuxtLink to="/" class="block shrink-0">
        <NuxtImg
          src="img/logo-primary.png"
          alt="Unilinks Logo"
          class="w-40 h-10"
        />
      </NuxtLink>

      <!-- Search Bar -->
      <form class="flex-1" role="search" aria-label="Search">
        <IconField>
          <InputIcon class="pi pi-search" />
          <InputText v-model="search" placeholder="Search" class="w-full" />
        </IconField>
      </form>

      <!-- Wishlist, Language, Profile -->
      <nav
        class="flex items-center gap-x-2 font-semibold shrink-0"
        aria-label="User Actions"
      >
        <!-- Wishlist -->
        <button
          class="flex gap-x-2 cursor-pointer items-center px-3 py-2.5 text-wishlist"
          type="button"
          aria-label="Wishlist"
        >
          <i class="pi pi-heart" />
          <span>Wishlist</span>
        </button>

        <!-- Language Selector -->
        <div
          class="flex cursor-pointer items-center px-3 py-2"
          role="menu"
          aria-label="Language Selector"
        >
          <i class="pi pi-globe" />
          <Divider layout="vertical" class="!m-2.5" />
          <span>{{ lang }}</span>
        </div>

        <!-- Profile -->
        <button
          class="flex cursor-pointer items-center px-3 py-2"
          type="button"
          aria-label="Profile"
        >
          <Avatar
            image="/img/profile.png"
            class="mr-1.5 h-10 w-10"
            size="normal"
            shape="square"
          />
          <span>Ngu Wah Aung</span>
        </button>
      </nav>
    </div>

    <!-- Navigation Links -->
    <nav
      class="font-bold flex items-center gap-x-1 px-24 border-b-2 border-gift text-sm"
      aria-label="Main Navigation"
    >
      <NuxtLink
        v-for="(item, index) in menuItems"
        :key="index"
        :to="item.link"
        :class="[
          'block px-4 py-3.5 hover:text-nav-active transition-all duration-200',
          route.path === item.link
            ? 'text-nav-active border-b-2 border-nav-active'
            : 'text-nav-inactive',
        ]"
      >
        {{ item.label }}
      </NuxtLink>

      <!-- Invite Friend Button -->
      <NuxtLink
        to="/invite"
        class="flex items-center gap-x-3 px-5 py-1 rounded-full bg-gift transition-color duration-200 text-black hover:text-nav-active hover:bg-gray-50"
        aria-label="Invite a Friend"
      >
        <NuxtImg src="/img/gift.png" alt="Gift Icon" class="w-6 h-6" />
        <span>Invite friend</span>
      </NuxtLink>
    </nav>
  </header>
</template>
