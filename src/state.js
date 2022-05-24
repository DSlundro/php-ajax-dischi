import Vue from 'vue'
// crea un oggetto usando .observable
const state = Vue.observable({
    selectGenre: '',
    selectAuthor: '',
})
// esporta lo state
export default state