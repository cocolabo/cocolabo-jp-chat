<template>
  <div>
    <input v-model="message" type="text" />
    <button @click="send">></button>
  </div>
</template>

<script>
export default {
  name: 'ChatForm',
  data() {
    return {
      message: null,
    }
  },
  methods: {
    send() {
      this.$emit('parent-send', this.message)
      this.message = null
    },
  },
}
</script>

<style scoped></style>
