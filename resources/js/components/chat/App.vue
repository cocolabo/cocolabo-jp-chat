<template>
  <div class="container-fluid h-100 py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card rounded-20">
          <div class="card-header lead">
            Chat App
          </div>
          <chat-list :user-id="userId" :chat-list="chatList" />
          <chat-form @parent-send="send" />
        </div>
      </div>
    </div>
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
      required: true,
    },
    userName: {
      type: String,
      required: true,
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
