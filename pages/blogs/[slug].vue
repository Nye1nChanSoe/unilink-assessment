<script setup lang="ts">
// Simulate server response
const blogPost = ref({
  title: "UX Review Presentations",
  publishedDate: "25 June 2022",
  subtitle:
    "How do you create compelling presentations that wow your colleagues and impress your managers?",
  tags: [
    { icon: "pi pi-graduation-cap", value: "Scholarship" },
    { icon: "pi pi-book", value: "New Intake" },
  ],
  heroImage: "/img/blog-image.png",
  author: {
    name: "Olivia Rhye",
    title: "Product Designer, UniLinks",
    image: "/img/profile.png",
  },
  contentHtml: `
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>

  <h2>Introduction</h2>
  <p>Mi tincidunt elit, id quisque ligula ac diam, amet. Vel etiam suspendisse morbi eleifend faucibus eget vestibulum felis. Dictum quis montes, sit sit. Tellus aliquam enim urna, etiam. Mauris posuere vulputate arcu amet, vitae nisi, tellus tincidunt. At feugiat sapien varius id. Eget quis mi enim, leo lacinia pharetra, semper.</p>
  <p>Eget in volutpat mollis at volutpat lectus velit, sed auctor. Porttitor fames arcu quis fusce augue enim. Quis at habitant diam at. Suscipit tristique risus, at donec. In turpis vel et quam imperdiet. Ipsum molestie aliquet sodales id est ac volutpat.</p>

  <figure>
    <img src="/img/blog-image.png" alt="Hot air balloons over Bagan" class="w-full object-contain" />
    <figcaption>Image courtesy of Laura Davidson via <a href="https://unsplash.com/" class="text-card-link underline hover:text-card-link-inactive">Unsplash</a></figcaption>
  </figure>

  <blockquote>
    “In a world older and more complete than ours they move finished and complete, gifted with extensions of the senses we have lost or never attained, living by voices we shall never hear.”
    <footer>— Olivia Rhye, Product Designer</footer>
  </blockquote>

  <p>Dolor enim eu tortor urna sed duis nulla. Aliquam vestibulum, nulla odio nisl vitae. In aliquet pellentesque aenean hac vestibulum turpis mi bibendum diam. Tempor integer aliquam in vitae malesuada fringilla.</p>
  <p>Elit nisi in eleifend sed nisi. Pulvinar at orci, proin imperdiet commodo consectetur convallis risus. Sed condimentum enim dignissim adipiscing faucibus consequat, urna. Viverra purus et erat auctor aliquam. Risus, volutpat vulputate posuere purus sit congue convallis aliquet. Arcu id augue ut feugiat donec porttitor neque. Mauris, neque ultricies eu vestibulum, bibendum quam lorem id. Dolor lacus, eget nunc lectus in tellus, pharetra, porttitor.</p>
  <p>Ipsum sit mattis nulla quam nulla. Gravida id gravida ac enim mauris id. Non pellentesque congue eget consectetur turpis. Sapien, dictum molestie sem tempor. Diam elit, orci, tincidunt aenean tempus. Quis velit eget ut tortor tellus. Sed vel, congue felis elit erat nam nibh orci.</p>

  <h2>Software and Tools</h2>
  <p>Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.</p>

  <h2>Other Resources</h2>
  <p>Sagittis et eu at elementum, quis in. Proin praesent volutpat egestas sociis sit lorem nunc nunc sit. Eget diam curabitur mi ac. Auctor rutrum lacus malesuada massa ornare et. Vulputate consectetur ac ultrices at diam dui eget fringilla tincidunt. Arcu sit dignissim massa erat cursus vulputate gravida id. Sed quis auctor vulputate hac elementum gravida cursus dis.</p>
  <ol>
    <li><span>Lectus id duis vitae porttitor enim <u>gravida morbi</u>.</span></li>
    <li><span>Eu turpis posuere semper feugiat volutpat elit, ultrices suspendisse. Auctor vel in <u>vitae placerat</u>.</span></li>
    <li><span>Suspendisse maecenas ac <u>donec scelerisque</u> diam sed est duis purus.</span></li>
  </ol>

  <h2>Conclusion</h2>
  <div class="p-8 rounded-2xl mb-12 bg-gray-50">
    <p>Morbi sed imperdiet in ipsum, adipiscing elit dui lectus. Tellus id scelerisque est ultricies ultricies. Duis est sit sed leo nisl, blandit elit sagittis. Quisque tristique consequat quam sed. Nisl at scelerisque amet nulla purus habitasse.</p>
    <p>Nunc sed faucibus bibendum feugiat sed interdum. Ipsum egestas condimentum mi massa. In tincidunt pharetra consectetur sed duis facilisis metus. Etiam egestas in nec sed et. Quis lobortis at sit dictum eget nibh tortor commodo cursus.</p>
    <p>Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet. Nam elementum urna nisi aliquet erat dolor enim. Ornare id morbi eget ipsum. Aliquam senectus neque ut id eget consectetur dictum. Donec posuere pharetra odio consequat scelerisque et, nunc tortor.</p>
    <p>Nulla adipiscing erat a erat. Condimentum lorem posuere gravida enim posuere cursus diam.</p>
  </div>
`,
});

const route = useRoute();
const toast = useToast();
const config = useRuntimeConfig();
const page_url = ref(config.public.domainURL + route.fullPath);

function copyLink() {
  navigator.clipboard.writeText(page_url.value).then(
    () => {
      toast.add({
        severity: "success",
        summary: "Link Copied",
        detail: "Copied to your clipboard.",
        life: 3000,
      });
    },
    () => {
      toast.add({
        severity: "error",
        summary: "Copy Failed",
        detail: "Failed to copy the link to the clipboard.",
        life: 3000,
      });
    }
  );
}
</script>

<template>
  <article class="flex flex-col items-center py-24 px-6">
    <!-- Title and Metadata -->
    <header class="max-w-[960px] text-center mb-16">
      <p class="text-card-link font-semibold mb-3">
        Published {{ blogPost.publishedDate }}
      </p>
      <h1 class="text-5xl font-semibold mb-6 text-card-title">
        {{ blogPost.title }}
      </h1>
      <p class="text-xl text-card-content mb-10 leading-relaxed">
        {{ blogPost.subtitle }}
      </p>
      <div class="flex items-center justify-center gap-x-2">
        <Tag
          v-for="tag in blogPost.tags"
          :key="tag.value"
          :icon="tag.icon"
          :value="tag.value"
          severity="secondary"
          rounded
          class="!font-normal"
        />
      </div>
    </header>

    <!-- Hero Image -->
    <div class="mb-24">
      <img
        :src="blogPost.heroImage"
        alt="Hero image"
        class="w-full rounded-lg shadow-md"
      />
    </div>

    <!-- Content Section -->
    <section class="max-w-[720px]">
      <ClientOnly>
        <RichTextFormatter :text="blogPost.contentHtml" />
      </ClientOnly>
    </section>

    <!-- Author Section -->
    <footer class="border-t pt-8 w-[720px]">
      <div class="flex items-center justify-between mx-auto px-6 space-x-6">
        <!-- Author's Info -->
        <div class="flex items-center space-x-4">
          <img
            :src="blogPost.author.image"
            alt="Author's profile picture"
            class="w-16 h-16 rounded-full"
          />
          <div>
            <p class="font-semibold text-card-title">
              {{ blogPost.author.name }}
            </p>
            <p class="text-sm text-card-content">{{ blogPost.author.title }}</p>
          </div>
        </div>
        <!-- Social Links -->
        <div class="flex space-x-3">
          <Toast position="bottom-right" />
          <Button
            icon="pi pi-clone"
            label="Copy link"
            variant="outlined"
            severity="secondary"
            class="!text-sm"
            @click="copyLink"
          />
          <a
            :href="`https://twitter.com/share?url=${page_url}`"
            target="_blank"
            rel="noopener noreferrer"
          >
            <Button
              icon="pi pi-twitter"
              severity="secondary"
              variant="outlined"
              class="!text-sm"
            />
          </a>
          <a
            :href="`https://www.facebook.com/sharer/sharer.php?u=${page_url}`"
            target="_blank"
            rel="noopener noreferrer"
          >
            <Button
              icon="pi pi-facebook"
              severity="secondary"
              variant="outlined"
              class="!text-sm"
            />
          </a>
          <a
            :href="`https://www.linkedin.com/sharing/share-offsite/?url=${page_url}`"
            target="_blank"
            rel="noopener noreferrer"
          >
            <Button
              icon="pi pi-linkedin"
              severity="secondary"
              variant="outlined"
              class="!text-sm"
            />
          </a>
        </div>
      </div>
    </footer>
  </article>
</template>
