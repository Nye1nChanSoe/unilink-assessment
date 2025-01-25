<template>
  <div class="bg-white border rounded-lg shadow-md overflow-hidden">
    <!-- Image Section -->
    <div class="relative">
      <img
        src="/img/blog-image.png"
        alt="Hot air balloons"
        class="w-full h-48 object-cover"
      />
      <!-- Overlay -->
      <div
        class="absolute inset-0 bg-black bg-opacity-30 flex justify-between items-end px-4 py-2 text-white text-sm"
      >
        <div>
          <p class="font-semibold">Nguwah</p>
          <p>20 Jun 2024</p>
        </div>
        <p class="font-semibold">Design</p>
      </div>
    </div>

    <!-- Content Section -->
    <div class="p-4">
      <h3 class="text-lg font-semibold mb-2">UX review presentations</h3>
      <p class="text-sm text-gray-600 mb-4">
        How do you create compelling presentations that wow your colleagues and
        impress your managers?
      </p>
      <!-- Read Post Link -->
      <a
        href="#"
        class="text-blue-600 text-sm font-semibold flex items-center hover:underline"
      >
        Read post
        <i class="pi pi-arrow-right ml-1"></i>
      </a>
    </div>
  </div>
</template>
