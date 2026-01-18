<script setup>

import UngCuView from "./UngCuView.vue";
</script>

<template>
    <div class="content">
        <v-carousel hide-delimiters class="bg-white">
            <v-carousel-item class="bg-red carousel-item">
                <v-container>
                    <UngCuView></UngCuView>
                </v-container>
            </v-carousel-item>
        </v-carousel>
    </div>

</template>

<style scoped>
.content{
    background-color: red;
    height: 100%;

}
.carousel-item{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto auto;
}
</style>
