<template>
  <div>
    <chat-list :messages="messages" />
    <chat-form @parent-send="send" />
  </div>
</template>

<script>
import ChatList from './ChatList'
import ChatForm from './ChatForm'

export default {
  name: 'App',
  components: {
    ChatList,
    ChatForm,
  },
  data() {
    return {
      messages: [],
    }
  },
  methods: {
    send(message) {
      console.log(message)
      this.messages.push(message)
    },
  },
}
</script>

<style scoped></style>
