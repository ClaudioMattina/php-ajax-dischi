/* setap base di vue (nel caso guarda appunti) */
const app = new Vue({
    el: '#app',
    data:{
        /* array vuoto che verrà popolato dalla chiamata axios */
        albums: [],
    },
    /* chiamata axios in created */
    created(){
        axios.get('http://localhost:8888/php-ajax-dischi-/server/controller.php')
        .then( 
            (res) => {
                this.albums = res.data.result;
            }
            );
    }
})