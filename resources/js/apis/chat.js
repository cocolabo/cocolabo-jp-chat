import client from './axios'

/**
 * イベント情報作成
 */
const post = data => {
  return client({
    url: '/chat',
    method: 'POST',
    data,
  })
}

export default { post }
