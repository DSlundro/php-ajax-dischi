<template>
    <header>
        <div class="row m-0">
            <div class="col-2">
                <SiteLogo />
            </div>

            <div class="col-10 d-flex justify-content-end align-items-center pe-5">
                <GenreSelector v-model="selectGenre" @changeSelectGenre="changeStateGenre" />
                <AuthorSelector v-model="selectAuthor" @changeSelectAuthor="changeStateAuthor" />
            </div>
        </div>
    </header>
</template>

<script>
import SiteLogo from '@/components/LogoComponent.vue'
import GenreSelector from '@/components/GenreSelector.vue'
import AuthorSelector from '@/components/AuthorSelector.vue'
import state from '@/state.js'

export default{
    components:{
        SiteLogo,
        GenreSelector,
        AuthorSelector,
    },
    data(){
        return{
            selectGenre: '',
            selectAuthor: '',
            }
    },
    methods:{
        changeStateGenre(){
            state.selectGenre = this.selectGenre;
            console.log(this.selectGenre);
        },
        changeStateAuthor(){
            state.selectAuthor = this.selectAuthor;
            console.log(this.selectAuthor);
        },
    },
    computed: '',
}
</script>

<style lang="scss" scoped>
    header{
        background-color: $bg-header;
        }
</style>
