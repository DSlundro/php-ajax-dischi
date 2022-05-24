<template>
    <div class="d-flex pe-5">
        <select 
        class="form-select" 
        aria-label="Default select example"
        @change="$emit('changeSelectGenre')"
        @input="$emit('input', $event.target.value)"
        >
            <option value="">Select the Genre</option>
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
