<template>
  <div>
    <chat-list :messages="messages" />
    <chat-form @parent-send="send" />
  </div>
</template>

<script>
import apiChat from '@/apis/chat'
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
  mounted() {
    window.Echo.channel('chat-public-event').listen('ChatPublicEvent', ({ message }) => {
      this.messages.push(message)
    })
  },
  methods: {
    send(message) {
      apiChat.post({ message })
    },
  },
}
</script>

<style scoped></style>
