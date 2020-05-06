<template>
  <ul>
    <li v-for="(message, index) in messages" :key="index">
      {{ message }}
    </li>
  </ul>
</template>

<script>
export default {
  name: 'ChatList',
  props: {
    messages: {
      type: Array,
      default: () => [],
    },
  },
}
</script>

<style scoped></style>
