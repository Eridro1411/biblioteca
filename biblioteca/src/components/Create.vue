<template>
    <div>
        Nuovo libro:
        <div v-for="(field,index) in newBookFields" :key="index">

            <label :for="field.code">
                {{field.label}}
            </label>
            <input type="text" :id="field.code" :placeholder="field.placeholder" v-model="newBook[field.code]">
        </div>
        <button @click="save()">
            Salva libro
        </button>
    </div>
</template>
<script>
import axios from "axios";

export default ({
    name: "Create",
    data() {
        return {
            newBook: {
                title:"",
                author:"",
                ISBN:"",
                poster:"",
                genre:"",
                valutation:5,
            },
            newBookFields: [
                {
                    code:"title",
                    label:"Titolo del libro:",
                    type:"text",
                    palceholder:"Inserisci il titolo",
                    required: true
                },
                {
                    code:"author",
                    label:"Nome dell'autore:",
                    type:"text",
                    palceholder:"Inserisci l'autore",
                    required: true
                },
                {
                    code:"ISBN",
                    label:"ISBN libro:",
                    type:"text",
                    palceholder:"Inserisci ISBN",
                    required: true
                },
                {
                    code:"poster",
                    label:"Copertina del libro:",
                    type:"text",
                    palceholder:"Inserisci la copertina",
                    required: true
                },
                {
                    code:"genre",
                    label:"Genere del libro:",
                    type:"text",
                    palceholder:"Inserisci il genere",
                    required: true
                },
                {
                    code:"valutation",
                    label:"Valutazione:",
                    type:"number",
                    palceholder:"Valutazione",
                    required: true
                },
            ]
        }
    },
    methods:{
        async save() {
            let response;

            response = await axios.post("http://127.0.0.1:8000/api/create", this.newBook);
            console.log(response.data);
            this.$router.push("/list")
        }
    }
})
</script>
