<template>
    <div class="col">
        <div class="my-card py-3">
            <div class="my-card-container">
                <img :src="element.poster" alt="">
                <h5 class="my-card-song py-3">{{element.title}}</h5>
                <p class="my-card-name">{{element.author}}</p>
                <p class="my-card-year">{{element.year}}</p>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.my-card-container{
        background-color: $bg-card;
        text-align: center;
        padding: 20px;
        height: 450px;
        img{
            width: 100%;
            aspect-ratio: 1/1;
        }
        h5{
            color: $light;
            text-transform: uppercase;
            font-weight: bold;
        }
        p{ 
            margin: 0;
            color: $text-card;
        }
    }
</style>

<script>
export default {
    name: 'AuthorComponent',
    props:{
        element: Object,
    }
}
</script>