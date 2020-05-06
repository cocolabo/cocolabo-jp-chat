<template>
  <div>
    <chat-list :chat-list="chatList" />
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
    userName: {
      type: String,
      require: true,
    },
  },
  data() {
    return {
      chatList: [],
    }
  },
  mounted() {
    window.Echo.channel('chat-public-event').listen('ChatPublicEvent', ({ user_id, user_name, message }) => {
      // 自分自身のメッセージなら追加しない
      if (this.userId === user_id) {
        return
      }

      this.chatList.push({ user_id, user_name, message })
    })
  },
  methods: {
    send(message) {
      const chat = { user_id: this.userId, user_name: this.userName, message }
      this.chatList.push(chat)
      apiChat.post(chat)
    },
  },
}
</script>

<style scoped></style>
