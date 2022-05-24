<template>
    <main>
        <div class="container py-5" v-if="!loading">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 min-vh-100">
                <SiteAuthor :element="element" v-for="(element, index) in filterGenre" :key="index" /> 
            </div>
        </div>
        <div v-else class="d-flex min-vh-100 justify-content-center align-items-center">
            <h1>Loading...</h1>
        </div>
    </main>
</template>

<script>
import axios from 'axios'
import SiteAuthor from '@/components/AuthorComponent.vue';
import state from '@/state.js'

export default {
    name: 'AuthorsListComponent',
    components:{
        SiteAuthor,
    },
    data(){
        return{
            API_URL: 'http://localhost/php/php-ajax-dischi/milestone2/src/assets/php/database.php',
            authors: null,
            loading: true,
            error: null,
            genre: null,
            author: null,
        };
    },
    methods:{
        callApi(){
            axios
            .get(this.API_URL)
            .then((response) => {
                this.authors = response.data;
            })
            .catch((error) => {
                console.error();
                error;
                this.error = 'Loading...'
            });
        },

        timer(){
            setTimeout(() => {
                this.loading = false;
            }, 2500);
        }
    },
    mounted(){
        this.callApi();
        this.timer();
    },
    computed: {
        filterGenre() {
            return this.authors.filter((author) => {
                let filteredGenre = true;
                let filteredAuthor = true;

                if (state.selectGenre.toLowerCase() !== "") {
                filteredGenre = author.genre
                    .toLowerCase()
                    .includes(state.selectGenre.toLowerCase());
                }
                
                if (state.selectAuthor.toLowerCase() !== "") {
                filteredAuthor = author.author
                .toLowerCase()
                .includes(state.selectAuthor.toLowerCase());
                }
                
                if (filteredGenre && filteredAuthor) {
                return author;
                }
            });
        },
    },
};
</script>


<style lang="scss" scoped>
main{
    background-color: $bg-main;
}
</style>