<script setup lang="ts">
import { ClientOnly } from "#components";

const htmlContent = `
<h1>Welcome to My Blog</h1>
<p>This is a <strong>sample</strong> paragraph with some <em>formatted</em> text.</p>
<ul>
  <li>List item 1</li>
  <li>List item 2</li>
</ul>
`;
</script>

<template>
  <ClientOnly>
    <RichTextFormatter :text="htmlContent" />
  </ClientOnly>
</template>
