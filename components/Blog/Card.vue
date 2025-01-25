<template>
  <article
    class="w-full rounded-lg border bg-white shadow-xs overflow-hidden transition-shadow duration-300 hover:shadow-md"
  >
    <!-- Image Section -->
    <figure class="relative">
      <NuxtImg
        src="/img/blog-image.png"
        alt="Hot air balloons"
        class="h-64 w-full object-cover"
      />
      <!-- Overlay -->
      <figcaption
        class="absolute bottom-0 flex w-full items-start justify-between bg-white/30 p-6 text-sm text-white backdrop-blur-md"
      >
        <div>
          <p class="font-semibold">Nguwah</p>
          <p>20 Jun 2024</p>
        </div>
        <p class="font-semibold">Design</p>
      </figcaption>
    </figure>

    <!-- Content Section -->
    <section class="px-6 py-8">
      <header>
        <h3 class="mb-3 text-xl font-semibold text-card-title">
          UX review presentations
        </h3>
      </header>
      <p class="mb-10 text-card-content">
        How do you create compelling presentations that wow your colleagues and
        impress your managers?
      </p>
      <!-- Read Post Link -->
      <footer>
        <NuxtLink
          to="#"
          class="flex items-center text-card-link hover:text-card-link-inactive"
        >
          Read post
          <i class="pi pi-arrow-up-right ml-2 text-sm"></i>
        </NuxtLink>
      </footer>
    </section>
  </article>
</template>
