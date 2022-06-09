const app = new Vue({
  el: '#app',

  data:{
    albums: [],
    genere: '',
    apiURL: 'http://localhost/php/php-ajax-dischi/api.php?genere=',
  },

  mounted(){
    this.getApi();
  },

  methods: {
    getApi(){
      axios.get(this.apiURL + this.genere)
      .then(r =>{
        this.albums = r.data;
        // console.log(r.data);
      })
    }
  },
})