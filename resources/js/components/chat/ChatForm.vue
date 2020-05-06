<template>
  <div>
    <input v-model="message" type="text" @keydown.enter="send" />
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
    send(event) {
      if (event.keyCode !== undefined && event.keyCode !== 13) {
        return
      }
      this.$emit('parent-send', this.message)
      this.message = null
    },
  },
}
</script>

<style scoped></style>
