const app = new Vue({
  el: '#app',

  data:{
    albums: [],
    apiURL: 'http://localhost/php/php-ajax-dischi/api.php',
  },

  mounted(){
    this.getApi();
  },

  methods: {
    getApi(){
      axios.get(this.apiURL)
      .then(r =>{
        this.albums = r.data;
        console.log(r.data)
      })
    }
  },
})