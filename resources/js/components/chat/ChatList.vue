<template>
  <ul>
    <li v-for="(chat, index) in chatList" :key="index">
      {{ chat.user_name }} : {{ chat.message }}
    </li>
  </ul>
</template>

<script>
export default {
  name: 'ChatList',
  props: {
    chatList: {
      type: Array,
      default: () => [],
    },
  },
}
</script>

<style scoped></style>
