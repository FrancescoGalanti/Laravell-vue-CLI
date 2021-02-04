<template>
  <div>
    <h3>{{ title }}</h3>
    <p>{{ content }}</p>
    <img :src="img" :alt="title">
  </div>
</template>

<script>
export default {
  name: "Card",
  props: ["title", "content", "img"]
}
</script>

<style>

</style>