<template>
    <div class="d-flex pe-5">
        <select 
        class="form-select" 
        aria-label="Default select example"
        v-for="(elem, index) in $database" :key="index"
        @change="$emit('changeSelectGenre')"
        @input="$emit('input', $event.target.value)"
        >
            <option value="">{{elem.genre}}</option>
            <option value="rock">Rock</option>
            <option value="pop">Pop</option>
            <option value="jazz">Jazz</option>
            <option value="metal">Metal</option>
        </select>
    </div>
</template>

<script>
export default {
    name: 'GenreSelector',
    props:{
        selectGenre: String
    }
}
</script>
