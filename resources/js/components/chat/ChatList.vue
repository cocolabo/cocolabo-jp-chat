<template>
  <div ref="cardBody" class="card-body chats_index_card_body">
    <div v-for="(chat, index) in chatList" :key="index">
      <div v-if="isInterlocutor(chat)" class="chats_index_name">{{ chat.user_name }}</div>
      <div
        :class="{ 'justify-content-start': isInterlocutor(chat), 'justify-content-end': !isInterlocutor(chat) }"
        class="d-flex mb-4"
      >
        <div
          :class="{
            chats_index_container__left: isInterlocutor(chat),
            chats_index_container__right: !isInterlocutor(chat),
          }"
          class="chats_index_container mw-75"
        >
          <span style="white-space: pre-wrap;">{{ chat.message }}</span>
          <span
            :class="{ chats_index_time__left: isInterlocutor(chat), chats_index_time__right: !isInterlocutor(chat) }"
            class="chats_index_time"
          >
            8:40
          </span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ChatList',
  props: {
    userId: {
      type: String,
      required: true,
    },
    chatList: {
      type: Array,
      default: () => [],
    },
  },
  updated() {
    this.scrollToEnd()
  },
  methods: {
    isInterlocutor(chat) {
      return chat.user_id !== this.userId
    },
    scrollToEnd() {
      this.$nextTick(() => {
        const cardBody = this.$refs.cardBody
        if (!cardBody) return
        cardBody.scrollTop = cardBody.scrollHeight
      })
    },
  },
}
</script>

<style scoped></style>
