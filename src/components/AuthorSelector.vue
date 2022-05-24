<template>
    <div class="d-flex pe-5">
        <select 
        class="form-select" 
        aria-label="Default select example"
        @change="$emit('changeSelectAuthor')"
        @input="$emit('input', $event.target.value)"
        >
            <option value="">Select the Author</option>
            <option value="Bon Jovi">Bon Jovi</option>
            <option value="Queen">Queen</option>
            <option value="Sting">Sting</option>
            <option value="Steve Gadd Band">Steve Gadd Band</option>
            <option value="Iron Maiden">Iron Maiden</option>
            <option value="Eric Clapton">Eric Clapton</option>
            <option value="Deep Purple">Deep Purple</option>
            <option value="Metallica">Metallica</option>
            <option value="Dave Weckl">Dave Weckl</option>
            <option value="Michael Jacjson">Michael Jackson</option>
        </select>
    </div>
</template>

<script>
export default {
    name: 'AuthorSelector',
    props:{
        selectAuthor: String
    }
}
</script>
