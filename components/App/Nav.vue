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
  <nav>
    <head class="flex justify-between items-center px-24 py-2 gap-x-16 text-sm">
      <!-- logo -->
      <NuxtLink to="/">
        <NuxtImg
          src="img/logo-primary.png"
          alt="Unilinks Logo"
          class="w-44 h-10"
        />
      </NuxtLink>

      <!-- search bar -->
      <div class="flex-1">
        <IconField>
          <InputIcon class="pi pi-search" />
          <InputText v-model="search" placeholder="Search" class="w-full" />
        </IconField>
      </div>

      <!-- wishlist, i18n, profile -->
      <div class="flex items-center gap-x-2 font-semibold">
        <div class="flex gap-x-2 items-center px-4 py-2.5 text-text-slate">
          <i class="pi pi-heart" />
          <span>Wishlist</span>
        </div>
        <div class="flex items-center px-3.5 py-2">
          <i class="pi pi-globe" />
          <Divider layout="vertical" />
          <span>{{ lang }}</span>
        </div>
        <div class="flex items-center px-3.5 py-2">
          <Avatar
            image="/img/profile.png"
            class="mr-1.5 h-10 w-10"
            size="normal"
            shape="square"
          />
          <p>Ngu Wah Aung</p>
        </div>
      </div>
    </head>

    <!-- Navigations -->
    <section
      class="font-bold flex items-center gap-x-1 px-24 border-b-2 border-gray-200 text-sm"
    >
      <NuxtLink
        v-for="(item, index) in menuItems"
        :key="index"
        :to="item.link"
        :class="[
          'block px-4 py-3.5 hover:text-blue-600 transition-all duration-200',
          route.path === item.link
            ? 'text-blue-600 border-b-2 border-blue-600'
            : 'text-text-gray',
        ]"
      >
        {{ item.label }}
      </NuxtLink>
      <NuxtLink
        to="/invite"
        class="flex items-center gap-x-3 px-5 py-1 rounded-full bg-text-lightGray"
      >
        <NuxtImg src="/img/gift.png" alt="Gift" class="w-6 h-6" />
        Invite friend
      </NuxtLink>
    </section>
  </nav>
</template>
