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
  props: {
    userId: {
      type: String,
      require: true,
    },
  },
  data() {
    return {
      messages: [],
    }
  },
  mounted() {
    window.Echo.channel('chat-public-event').listen('ChatPublicEvent', ({ user_id, message }) => {
      // 自分自身のメッセージなら追加しない
      if (this.userId === user_id) {
        return
      }

      this.messages.push(message)
    })
  },
  methods: {
    send(message) {
      this.messages.push(message)
      apiChat.post({ user_id: this.userId, message })
    },
  },
}
</script>

<style scoped></style>
