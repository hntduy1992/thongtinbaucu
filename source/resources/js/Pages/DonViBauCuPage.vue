<script setup>
import {usePage} from "@inertiajs/vue3";

const page = usePage()

const unit = page.props.unit
const locations = page.props.locations
</script>

<template>
    <v-container>
        <h3>{{ unit.name }}</h3>
        <p>Quyết định thành lập <a :href="'/'+unit.file" target="_blank">{{ unit.file }}</a></p>
        <ul class="d-flex">
            <li v-for="location of locations" style="width: 25%">{
                <v-img style="width: 100%" :src="'/'+location.img" :alt="location.name"/>
            </li>
        </ul>
    </v-container>
</template>

<style scoped>

</style>
