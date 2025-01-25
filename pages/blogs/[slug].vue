<script setup lang="ts">
const route = useRoute();
</script>

<template>
  <article class="flex flex-col items-center py-24 px-6">
    <!-- Title and Metadata -->
    <header class="max-w-[960px] text-center mb-16">
      <p class="text-card-link font-semibold mb-3">Published 25 June 2022</p>
      <h1 class="text-5xl font-semibold mb-6 text-card-title">
        UX Review Presentations
      </h1>
      <p class="text-xl text-card-content mb-10 leading-relaxed">
        How do you create compelling presentations that wow your colleagues and
        impress your managers?
      </p>
      <div class="flex items-center justify-center gap-x-2">
        <Tag icon="pi pi-user" value="Scholarship" rounded />
        <Tag icon="pi pi-user" value="New Intake" rounded />
      </div>
    </header>

    <!-- Hero Image -->
    <div class="mb-24">
      <img
        src="/img/blog-image.png"
        alt="Hot air balloons over Bagan"
        class="w-full rounded-lg shadow-md"
      />
    </div>

    <!-- Content Section -->
    <section class="max-w-[720px]">
      <p class="text-card-content mb-8 leading-relaxed">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
        ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa.
        Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non
        massa enim vitae duis mattis. Vel in ultricies vel fringilla.
      </p>

      <!-- Subheading -->
      <div class="py-12">
        <h2 class="text-2xl font-semibold mb-6 text-card-title">
          Introduction
        </h2>
        <p class="text-card-content mb-6 leading-relaxed">
          Mi tincidunt elit, id quisque ligula ac diam, amet. Vel etiam
          suspendisse morbi eleifend faucibus eget vestibulum felis. Dictum quis
          montes, sit sit. Tellus aliquam enim urna, etiam. Mauris posuere
          vulputate arcu amet, vitae nisi, tellus tincidunt. At feugiat sapien
          varius id. Eget quis mi enim, leo lacinia pharetra, semper.
        </p>
        <p class="text-card-content leading-relaxed">
          Eget in volutpat mollis at volutpat lectus velit, sed auctor.
          Porttitor fames arcu quis fusce augue enim. Quis at habitant diam at.
          Suscipit tristique risus, at donec. In turpis vel et quam imperdiet.
          Ipsum molestie aliquet sodales id est ac volutpat.
        </p>
      </div>

      <!-- Embedded Image -->
      <div class="mb-12">
        <img
          src="/img/blog-image.png"
          alt="Hot air balloons over Bagan"
          class="w-full object-contain"
        />
        <p class="text-card-content text-sm mt-4">
          Image courtesy of Laura Davidson via
          <a
            href="https://unsplash.com/"
            class="text-card-link underline hover:text-card-link-inactive"
            >Unsplash</a
          >
        </p>
      </div>

      <!-- Quote -->
      <blockquote
        class="border-l-2 border-card-link pl-4 italic text-card-title text-2xl font-[500px] my-12"
      >
        “In a world older and more complete than ours they move finished and
        complete, gifted with extensions of the senses we have lost or never
        attained, living by voices we shall never hear.”
        <footer class="text-sm text-card-content mt-8 not-italic">
          — Olivia Rhye, Product Designer
        </footer>
      </blockquote>

      <p class="text-card-content leading-relaxed mb-6">
        Dolor enim eu tortor urna sed duis nulla. Aliquam vestibulum, nulla odio
        nisl vitae. In aliquet pellentesque aenean hac vestibulum turpis mi
        bibendum diam. Tempor integer aliquam in vitae malesuada fringilla.
      </p>
      <p class="text-card-content leading-relaxed mb-6">
        Elit nisi in eleifend sed nisi. Pulvinar at orci, proin imperdiet
        commodo consectetur convallis risus. Sed condimentum enim dignissim
        adipiscing faucibus consequat, urna. Viverra purus et erat auctor
        aliquam. Risus, volutpat vulputate posuere purus sit congue convallis
        aliquet. Arcu id augue ut feugiat donec porttitor neque. Mauris, neque
        ultricies eu vestibulum, bibendum quam lorem id. Dolor lacus, eget nunc
        lectus in tellus, pharetra, porttitor.
      </p>
      <p class="text-card-content leading-relaxed mb-12">
        Ipsum sit mattis nulla quam nulla. Gravida id gravida ac enim mauris id.
        Non pellentesque congue eget consectetur turpis. Sapien, dictum molestie
        sem tempor. Diam elit, orci, tincidunt aenean tempus. Quis velit eget ut
        tortor tellus. Sed vel, congue felis elit erat nam nibh orci.
      </p>

      <!-- Subheading -->
      <h2 class="text-2xl font-semibold mb-6 text-card-title">
        Software and Tools
      </h2>
      <p class="text-card-content mb-12 leading-relaxed">
        Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis
        aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget
        a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
      </p>

      <!-- Resources Section -->
      <h2 class="text-2xl font-semibold mb-6 text-card-title">
        Other Resources
      </h2>
      <p>
        Sagittis et eu at elementum, quis in. Proin praesent volutpat egestas
        sociis sit lorem nunc nunc sit. Eget diam curabitur mi ac. Auctor rutrum
        lacus malesuada massa ornare et. Vulputate consectetur ac ultrices at
        diam dui eget fringilla tincidunt. Arcu sit dignissim massa erat cursus
        vulputate gravida id. Sed quis auctor vulputate hac elementum gravida
        cursus dis.
      </p>
      <ul class="list-disc list-inside space-y-4 text-card-content mb-12">
        <li>
          <a href="#" class="text-card-link">Resource 1</a> - Short description
          of the resource.
        </li>
        <li>
          <a href="#" class="text-card-link">Resource 2</a> - Short description
          of the resource.
        </li>
        <li>
          <a href="#" class="text-card-link">Resource 3</a> - Short description
          of the resource.
        </li>
      </ul>

      <!-- Conclusion -->
      <div class="p-8 rounded-2xl bg-gray-50 mb-12">
        <h2 class="text-2xl font-semibold mb-6 text-card-title">Conclusion</h2>
        <p class="text-card-content mb-12 leading-relaxed">
          Morbi sed imperdiet in ipsum, adipiscing elit dui lectus. Tellus id
          scelerisque est ultricies ultricies. Duis est sit sed leo nisl,
          blandit elit sagittis. Quisque tristique consequat quam sed. Nisl at
          scelerisque amet nulla purus habitasse. Nunc sed faucibus bibendum
          feugiat sed interdum. Ipsum egestas condimentum mi massa. In tincidunt
          pharetra consectetur sed duis facilisis metus. Etiam egestas in nec
          sed et. Quis lobortis at sit dictum eget nibh tortor commodo cursus.
          Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet.
          Nam elementum urna nisi aliquet erat dolor enim. Ornare id morbi eget
          ipsum. Aliquam senectus neque ut id eget consectetur dictum. Donec
          posuere pharetra odio consequat scelerisque et, nunc tortor. Nulla
          adipiscing erat a erat. Condimentum lorem posuere gravida enim posuere
          cursus diam.
        </p>
      </div>
    </section>

    <!-- Author Section -->
    <footer class="border-t pt-8">
      <div class="flex items-center space-x-6">
        <img
          src="/img/blog-image.png"
          alt="Author's profile picture"
          class="w-16 h-16 rounded-full"
        />
        <div>
          <p class="font-semibold text-card-title">Jane Doe</p>
          <p class="text-sm text-card-content">Product Designer</p>
        </div>
      </div>
    </footer>
  </article>
</template>
