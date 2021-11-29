<template>
    <div>
        <button @click="goToEdit()">Modifica</button>
        {{book.title}}
    </div>
</template>
<script>
import axios from "axios";

export default ({
    name: "Detail",
    data() {
        return {
            book:{}
        }
    },
    async mounted() {
        let bookId = this.$route.params.id;
        let response = await axios.get("http://127.0.0.1:8000/api/detail/" + bookId);
        this.book = response.data
    },
    methods:{
        goToEdit(book){
            this.$router.push("/edit/"+ book)
        }
    }
})
</script>
