<template>
  <div class="card-footer bg-transparent">
    <div class="input-group">
      <textarea
        ref="focusMessage"
        v-model.trim="message"
        class="form-control"
        placeholder="Type your message..."
        @keydown.shift.enter="send"
      ></textarea>
      <div class="input-group-append">
        <span class="input-group-text chats_index_send_btn" @click="send"><i class="fas fa-location-arrow"></i></span>
      </div>
    </div>
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
      if (this.message === null || this.message === '') {
        return
      }

      this.$emit('parent-send', this.message)

      this.message = null
      this.$refs.focusMessage.focus()
      event.preventDefault()
    },
  },
}
</script>

<style scoped></style>
