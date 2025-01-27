<script setup lang="ts">
import { load } from "cheerio";
import DOMPurify from "dompurify";

interface Props {
  text: string;
}

const props = defineProps<Props>();

function addTailwindClasses(html: string): string {
  const $ = load(html);

  // Headings
  $("h1").addClass("text-3xl md:text-4xl font-bold mb-6 text-card-title");
  $("h2").addClass("text-2xl md:text-3xl font-semibold mb-5 text-card-title");
  $("h3").addClass("text-xl md:text-2xl font-medium mb-4 text-card-title");
  $("h4").addClass("text-lg md:text-xl font-medium mb-3 text-card-title");
  $("h5").addClass("text-base md:text-lg font-medium mb-2 text-card-title");
  $("h6").addClass("text-sm md:text-base font-medium mb-1 text-card-title");

  // Text elements
  $("p").addClass(
    "text-card-content text-sm md:text-base mb-6 leading-relaxed"
  );
  $("span").addClass(
    "text-card-content text-sm md:text-base mb-6 leading-relaxed"
  );
  $("figcaption").addClass(
    "text-card-content text-xs md:text-sm mb-6 leading-relaxed"
  );

  // Lists
  $("ul").addClass(
    "list-disc list-inside mb-6 text-card-content text-sm md:text-base"
  );
  $("ol").addClass(
    "list-decimal list-inside mb-6 text-card-content text-sm md:text-base"
  );
  $("li").addClass("text-card-content text-sm md:text-base mb-2");

  // Images
  $("img").addClass("w-full rounded-lg shadow-md mb-6");

  // Blockquotes and Footer
  $("blockquote").addClass(
    "border-l-2 border-card-link pl-4 italic text-card-title text-lg md:text-2xl font-[500px] my-8 md:my-12"
  );
  $("blockquote footer").addClass(
    "text-xs md:text-sm text-card-content mt-4 md:mt-8 not-italic"
  );
  $("footer").addClass(
    "text-xs md:text-sm text-card-content mt-4 md:mt-8 not-italic"
  );

  // Preformatted Text
  $("pre").addClass(
    "bg-gray-100 rounded-lg p-3 md:p-4 mb-6 overflow-x-auto text-xs md:text-sm text-gray-800"
  );
  $("code").addClass("bg-gray-100 px-1 rounded text-xs md:text-sm");

  // Horizontal Rules
  $("hr").addClass("my-6 md:my-8 border-gray-300");

  // Links
  $("a").addClass(
    "text-card-link underline hover:text-card-link-inactive text-sm md:text-base"
  );

  // Inline styles
  $("u").addClass("underline");
  $("br").addClass("my-2");

  return $.html();
}

const isRichText = /<[^>]+>/i.test(props.text);
const processedText = isRichText
  ? DOMPurify.sanitize(addTailwindClasses(props.text))
  : props.text;
</script>

<template>
  <!-- Render sanitized and styled HTML content -->
  <div class="prose prose-lg mx-auto" v-html="processedText"></div>
</template>
