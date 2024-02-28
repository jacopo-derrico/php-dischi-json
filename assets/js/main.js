const { createApp } = Vue

createApp({
  data() {
    return {
      title: 'Hello Vue!',
      apiUrl: 'server.php',
      diskList: [],
    }
  },
  mounted() {
    this.callApi()
  },
  methods: {
    callApi() {
      axios.get(this.apiUrl)
        .then((response) => {
          this.diskList = response.data;
        })
    }
  },
}).mount('#app')