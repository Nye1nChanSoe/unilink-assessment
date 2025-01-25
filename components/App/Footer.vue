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
  <footer class="bg-primary text-white px-28 py-10">
    <div class="container mx-auto flex justify-between items-start">
      <!-- Logo Section -->
      <div>
        <NuxtLink to="/">
          <NuxtImg
            src="img/logo-primary.png"
            alt="Unilinks Logo"
            class="h-10"
          />
        </NuxtLink>
      </div>

      <!-- Navigation Links -->
      <nav class="flex gap-x-16">
        <div v-for="(section, index) in sections" :key="index">
          <h2 class="font-bold text-lg mb-4">{{ section.title }}</h2>
          <ul class="space-y-4 text-sm">
            <li v-for="(link, linkIndex) in section.links" :key="linkIndex">
              <NuxtLink :to="link.href" class="hover:text-blue-400">
                {{ link.label }}
              </NuxtLink>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Contact Section -->
      <section>
        <h2 class="font-bold text-lg mb-4">Contact us</h2>
        <ul class="space-y-4 text-sm">
          <li
            v-for="(contact, contactIndex) in contactInfo"
            :key="contactIndex"
            class="flex items-center gap-x-4"
          >
            <i :class="contact.icon"></i>
            <a :href="contact.href" class="hover:text-blue-400">
              {{ contact.label }}
            </a>
          </li>
        </ul>

        <!-- Social Links -->
        <div class="flex items-center gap-x-4 mt-4">
          <NuxtLink
            v-for="(social, socialIndex) in socialLinks"
            :key="socialIndex"
            :to="social.href"
            class="hover:text-blue-400"
          >
            <i :class="social.icon"></i>
          </NuxtLink>
        </div>
      </section>
    </div>

    <!-- Copyright -->
    <div class="container mx-auto text-sm text-text-light mt-24 text-center">
      <p>
        Copyright © 2010-{{ new Date().getFullYear() }} Uni Link S.L. All rights
        reserved.
      </p>
    </div>
  </footer>
</template>
