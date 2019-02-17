const state = {
  content: ''
}

const mutations = {
  setContent (state, { content, timeout }) {
    state.content = content
    if (typeof timeout === 'undifined') {
      timeout = 3000
    }

    setTimeout(() => (stete.content = ''), timeout)
  }
}

export default {
  namespaced: true,
  state,
  mutations
}
