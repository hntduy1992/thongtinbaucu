<script setup>

import {router, usePage} from "@inertiajs/vue3";

const page = usePage()
const units = page.props.units
</script>

<template>
    <v-container>
        <v-card>
            <v-card-title><v-btn color="primary" @click="router.visit('/units/create')">Thêm mới</v-btn></v-card-title>
            <v-card-text>
                <v-data-table :items="units"></v-data-table>
            </v-card-text>
        </v-card>
    </v-container>
</template>

<style scoped>

</style>
