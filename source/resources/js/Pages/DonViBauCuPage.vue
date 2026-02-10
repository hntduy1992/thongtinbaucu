<script setup>
import {usePage} from "@inertiajs/vue3";
import {ref} from "vue";

const page = usePage()

const unit = page.props.unit
const locations = page.props.locations

const showImage = ref(false)
const locationShow = ref(null)
const showImageHandler = (location) => {
    locationShow.value = location
    showImage.value = !showImage.value
}
</script>

<template>
    <v-container style="height: calc(100vh - 206px - 123px)">
        <h3 class="text-center text-uppercase">
            <a class="title-link" :href="'/'+unit.file" target="_blank"> {{ unit.name }}</a>
        </h3>

        <ul class="dvbc-list">
            <li class="dvbc-item " v-for="location of locations" @click.prevent="showImageHandler(location)">
                <v-img class="dvbc-img" style="width: 100%" :src="'/'+location.img" :alt="location.name"/>
            </li>
        </ul>
    </v-container>
    <v-dialog v-if="locationShow" v-model="showImage">
        <v-card color="transparent" class="image-preview">
            <v-toolbar color="transparent">
                <v-spacer></v-spacer>
                <v-btn color="red" variant="elevated" icon @click="showImage = false">
                    <v-icon>mdi-close</v-icon>
                </v-btn>
            </v-toolbar>
            <v-img
                :src="'/'+locationShow.img"
            ></v-img>
        </v-card>
    </v-dialog>
</template>

<style scoped>
.title-link{
    font-size: 2rem;
    text-decoration: none;
    color: var(--root-color);
    text-shadow: 1px 1px 5px rgba(0,0,0,.3);
}
.dvbc-list {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    list-style-type: none;
}

.dvbc-item {
    width: 20%;
    padding: 10px;
    cursor: pointer;
}

.dvbc-item:hover .dvbc-img {
    transform: scale(1);
    box-shadow: 2px 2px 5px #ccc;
}

.dvbc-img {
    width: 100%;
    border-radius: 10px;
    transform: scale(0.95);
    transition: all 0.3s ease-in-out;
}

.image-preview .v-toolbar {
    position: absolute;
    top: 0;
    z-index: 1;
}

.image-preview {
    height: 90vh;
}

.image-preview .v-img {
    height: inherit;
    width: unset;
}
</style>
