const app = new Vue({
    el: '#app',
    data:{
        albums: null,
        loading:true,
        error: "",
        selectedGenre: "",
        selectedAuthor: "",
        selectedA:"",
        selectedG:"",
    },
    mounted(){
        axios
        .get('./api/albums.php')
        .then(response =>{
            console.log(response)
            this.albums = response.data
            this.loading = false;
        }).catch(error =>{
            console.log(error)
        })
    },
    methods:{
        filterGenre() {
            this.selectedGenre = this.selectedG;
          },
          filterAuthor() {
            this.selectedAuthor = this.selectedA;
          
          },
    },
    computed: {
        getFilterGenres() {
          console.log(this.selectedGenre);
          if (this.selectedGenre == "" || this.selectedGenre == "all") {
            return this.albums;
          }
          const filtered = this.albums.filter((album) => {
            return album.genre == this.selectedGenre;
          });
          return filtered;
        },
        getFilterAuthors() {
          if (this.selectedAuthor == "") {
            return this.getFilterGenres;
          }
          console.log(this.getFilterGenres);
          const filteredAuthors = this.getFilterGenres.filter((getFilterGenre) => {
            return getFilterGenre.author == this.selectedAuthor;
          });
          return filteredAuthors;
        },
      },
})