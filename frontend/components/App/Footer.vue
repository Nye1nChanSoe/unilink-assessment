<script setup lang="ts">
const sections = [
  {
    title: "Home",
    links: [
      { label: "All university", href: "/universities" },
      { label: "Scholarship", href: "/scholarships" },
      { label: "Study abroad", href: "/study-abroad" },
    ],
  },
  {
    title: "Service",
    links: [
      { label: "Admission counseling", href: "/admission-counseling" },
      { label: "Visa service", href: "/visa-services" },
      { label: "Health cover", href: "/health-cover" },
      { label: "Accommodation option", href: "/accommodation" },
    ],
  },
  {
    title: "Resources",
    links: [
      { label: "Guide", href: "/guide" },
      { label: "Webinars", href: "/webinars" },
      { label: "Blog", href: "/blog" },
    ],
  },
];

const contactInfo = [
  {
    icon: "pi pi-phone",
    label: "+959 123 456 789",
    href: "tel:+959123456789",
  },
  {
    icon: "pi pi-envelope",
    label: "unilinks123@gmail.com",
    href: "mailto:unilinks123@gmail.com",
  },
];

const socialLinks = [
  { icon: "pi pi-facebook", href: "#" },
  { icon: "pi pi-instagram", href: "#" },
  { icon: "pi pi-twitter", href: "#" },
  { icon: "pi pi-linkedin", href: "#" },
];
</script>

<template>
  <footer
    class="bg-primary text-white py-8 px-mobile-gap md:px-page-gap md:py-10"
  >
    <div
      class="container mx-auto flex flex-col gap-10 md:flex-row md:justify-between md:items-start"
    >
      <!-- Logo Section -->
      <div class="flex justify-center md:justify-start">
        <NuxtLink to="/">
          <NuxtImg
            src="img/logo-primary.png"
            alt="Unilinks Logo"
            class="w-32 h-auto md:w-40"
          />
        </NuxtLink>
      </div>

      <!-- Navigation Links -->
      <nav
        class="flex flex-col gap-y-10 items-center md:flex-row md:gap-y-0 md:gap-x-16"
      >
        <div
          v-for="(section, index) in sections"
          :key="index"
          class="text-center md:text-left"
        >
          <h2 class="font-bold text-lg mb-4">{{ section.title }}</h2>
          <ul
            class="space-y-2 text-gray-300 text-sm md:space-y-4 md:text-white"
          >
            <li v-for="(link, linkIndex) in section.links" :key="linkIndex">
              <NuxtLink :to="link.href" class="hover:text-footer-active">
                {{ link.label }}
              </NuxtLink>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Contact Section -->
      <section class="text-center md:text-left">
        <h2 class="font-bold text-lg mb-4">Contact us</h2>
        <ul
          class="space-y-2 text-sm text-gray-300 md:text-space-y-2 md:text-white"
        >
          <li
            v-for="(contact, contactIndex) in contactInfo"
            :key="contactIndex"
            class="flex items-center justify-center md:justify-start gap-x-4"
          >
            <i :class="contact.icon"></i>
            <a :href="contact.href" class="hover:text-footer-active">
              {{ contact.label }}
            </a>
          </li>
        </ul>

        <!-- Social Links -->
        <div
          class="flex justify-center items-center gap-x-4 mt-10 md:justify-start md:mt-6"
        >
          <NuxtLink
            v-for="(social, socialIndex) in socialLinks"
            :key="socialIndex"
            :to="social.href"
            class="hover:text-footer-active"
          >
            <i :class="social.icon"></i>
          </NuxtLink>
        </div>
      </section>
    </div>

    <!-- Copyright -->
    <div class="text-xs text-copyright mt-10 text-center md:mt-24 md:text-sm">
      <p>
        Copyright © 2010-{{ new Date().getFullYear() }} Uni Link S.L. All rights
        reserved.
      </p>
    </div>
  </footer>
</template>
