<script setup>

import {router, usePage, Link} from "@inertiajs/vue3";
import {ref} from "vue";

const page = usePage()
const locations = page.props.locations
const units = page.props.units
const headers = [
    {key: 'name', title: 'Tên Khu vực'},
    {key: 'unit_id', title: 'Đơn vị bầu cử'},
    {key: 'phone', title: 'Điện thoại'},
    {key: 'address', title: 'Địa chỉ'},
    {key: 'img', title: 'Hình ảnh'},
    {key: 'region', title: 'Khóm'},
    {key: 'scope', title: 'Phạm vi'},
    {key: 'action', title: 'Action'},
]
const groupBy = ref([{ key: 'unit_id', order: 'asc' }])
</script>

<template>
    <v-container>
        <v-card>
            <v-card-title>
                <v-btn color="primary" @click="router.visit('/locations/create')">Thêm mới</v-btn>
            </v-card-title>
            <v-card-text>

                <v-data-table :headers="headers" :group-by="groupBy" :items="locations" >
                    <template v-slot:group-header="{ item, columns, toggleGroup, isGroupOpen }">
                        <tr>
                            <td
                                :colspan="columns.length"
                                class="cursor-pointer"
                                v-ripple
                                @click="toggleGroup(item)"
                            >
                            </td>
                        </tr>
                    </template>
                    <template v-slot:item.unit_id="{ value }">
                        {{units.find(e=>e.id===value).name}}
                    </template>
                    <template v-slot:item.action="{ value }">
                        <Link href="#" class="mr-2"><v-btn color="yellow" icon="mdi-pen" size="small"></v-btn></Link>
                        <Link href="#"><v-btn color="red" icon="mdi-close" size="small"></v-btn></Link>
                    </template>
                </v-data-table>
            </v-card-text>
        </v-card>
    </v-container>
</template>

<style scoped>

</style>
