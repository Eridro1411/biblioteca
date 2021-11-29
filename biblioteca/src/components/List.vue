<template>
    <div class="">
        <div v-for="(book,index) in books" :key="index">
            <div @click="goToDetail(book)">
                <img :src="book.poster" alt="">
                <h1> {{book.title}} </h1>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";

export default ({
    name: "List",
    data() {
        return {
            books: [],
        };
    },
    async mounted() {
        let response = await axios.get("http://127.0.0.1:8000/api/list");
        this.books = response.data;
    },
    methods: {
        goToDetail(book) {
            this.$router.push("/detail/" + book.id);
        }
    }

})
</script>
