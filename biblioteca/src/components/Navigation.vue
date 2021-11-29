<template>
    <div class="flex items-center justify-center">
        <button @click="goToList()">Lista</button>
        <button @click="goToCreate()">Crea</button>
    </div>
</template>
<script>

export default({
    name: "Navigation",
    data(){
        return {

        }
    },
    methods:{
        goToList(){
            this.$router.push("/list")
        },
        goToCreate(){
            this.$router.push("/create")
        }
    }
})
</script>
