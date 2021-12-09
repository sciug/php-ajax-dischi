const app = new Vue({
    el: '#app',
    data:{
        albums: null,
        loading:true
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
    }
})