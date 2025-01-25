<template>
  <footer class="bg-primary text-white px-28 py-10">
    <div class="flex justify-between items-start">
      <!-- Logo Section -->
      <section>
        <NuxtLink to="/">
          <NuxtImg
            src="img/logo-primary.png"
            alt="Unilinks Logo"
            class="h-10"
          />
        </NuxtLink>
      </section>

      <!-- Navigation Links -->
      <section class="flex gap-x-16">
        <div>
          <h2 class="font-bold text-lg mb-4">Home</h2>
          <ul class="space-y-4 text-sm">
            <li>
              <NuxtLink to="/universities" class="hover:text-blue-400"
                >All university</NuxtLink
              >
            </li>
            <li>
              <NuxtLink to="/scholarships" class="hover:text-blue-400"
                >Scholarship</NuxtLink
              >
            </li>
            <li>
              <NuxtLink to="/study-abroad" class="hover:text-blue-400"
                >Study abroad</NuxtLink
              >
            </li>
          </ul>
        </div>

        <!-- Service Links -->
        <div>
          <h2 class="font-bold text-lg mb-4">Service</h2>
          <ul class="space-y-4 text-sm">
            <li>
              <NuxtLink to="/admission-counseling" class="hover:text-blue-400"
                >Admission counseling</NuxtLink
              >
            </li>
            <li>
              <NuxtLink to="/visa-services" class="hover:text-blue-400"
                >Visa service</NuxtLink
              >
            </li>
            <li>
              <NuxtLink to="/health-cover" class="hover:text-blue-400"
                >Health cover</NuxtLink
              >
            </li>
            <li>
              <NuxtLink to="/accommodation" class="hover:text-blue-400"
                >Accommodation option</NuxtLink
              >
            </li>
          </ul>
        </div>

        <!-- Resources Links -->
        <div>
          <h2 class="font-bold text-lg mb-4">Resources</h2>
          <ul class="space-y-4 text-sm">
            <li>
              <NuxtLink to="/guide" class="hover:text-blue-400">Guide</NuxtLink>
            </li>
            <li>
              <NuxtLink to="/webinars" class="hover:text-blue-400"
                >Webinars</NuxtLink
              >
            </li>
            <li>
              <NuxtLink to="/blog" class="hover:text-blue-400">Blog</NuxtLink>
            </li>
          </ul>
        </div>
      </section>

      <!-- Contact Section -->
      <section>
        <h2 class="font-bold text-lg mb-4">Contact us</h2>
        <ul class="space-y-4 text-sm">
          <li class="flex items-center gap-x-4">
            <i class="pi pi-phone"></i>
            <a href="tel:+959123456789" class="hover:text-blue-400">
              +959 123 456 789
            </a>
          </li>
          <li class="flex items-center gap-x-4">
            <i class="pi pi-envelope"></i>
            <a href="mailto:unilinks123@gmail.com" class="hover:text-blue-400">
              unilinks123@gmail.com
            </a>
          </li>
        </ul>

        <!-- Social Links -->
        <div class="flex items-center gap-x-4 mt-4">
          <NuxtLink to="#" class="hover:text-blue-400"
            ><i class="pi pi-facebook"></i
          ></NuxtLink>
          <NuxtLink to="#" class="hover:text-blue-400"
            ><i class="pi pi-instagram"></i
          ></NuxtLink>
          <NuxtLink to="#" class="hover:text-blue-400"
            ><i class="pi pi-twitter"></i
          ></NuxtLink>
          <NuxtLink to="#" class="hover:text-blue-400"
            ><i class="pi pi-linkedin"></i
          ></NuxtLink>
        </div>
      </section>
    </div>
    <div class="text-sm text-text-light mt-24 text-center">
      <p>
        Copyright © 2010-{{ new Date().getFullYear() }} Uni Link S.L. All rights
        reserved.
      </p>
    </div>
  </footer>
</template>
