<script setup>

import {router, usePage, Link} from "@inertiajs/vue3";
import {ref} from "vue";

const page = usePage()
const locations = page.props.locations
const units = page.props.units
const headers = [
    {key: 'name', title: 'Tên Khu vực'},
    {key: 'phone', title: 'Điện thoại'},
    {key: 'address', title: 'Địa chỉ'},
    {key: 'img', title: 'Hình ảnh'},
    {key: 'region', title: 'Khóm'},
    {key: 'scope', title: 'Phạm vi'},
    {key: 'action', title: 'Action'},
]
const groupBy = ref([{key: 'unit.name', order: 'asc'}])
</script>

<template>
    <v-container>
        <v-card>
            <v-card-title>
                <v-btn color="primary" @click="router.visit('/locations/create')">Thêm mới</v-btn>
            </v-card-title>
            <v-card-text>
                <v-data-table :group-by="groupBy" :headers="headers" :items="locations" :items-per-page="50"
                              hide-default-footer>
                    <template v-slot:item.img="{ value }">
                        <v-img :src="'storage/' + value"></v-img>
                    </template>
                    <template v-slot:item.action="{  value, item }">
                        <v-btn color="warning" icon="mdi-pen" size="small" class="mr-2"
                               @click="router.visit('/locations/'+item.id)"></v-btn>
                        <v-btn color="error" icon="mdi-close" size="small"></v-btn>
                    </template>
                </v-data-table>
            </v-card-text>
        </v-card>
    </v-container>
</template>

<style scoped>

</style>
