<script setup>
import {useForm, usePage} from "@inertiajs/vue3";
import {ref} from "vue";

const page = usePage()
const khoms = page.props.khoms
const selected = ref(null)
const formData = useForm({
    ten: '',
})
const updateFlag = ref(false)
const createNew = () => {
    formData.ten = ''
    updateFlag.value = false
}

const save = () => {

    if (updateFlag) {
        //update

    } else {
        console.log(updateFlag)
        //create
        formData.post('/khoms', {
            only: ['khoms', 'flash'],
            onSuccess: (res) => {
                console.log(res)
            },
            onError: (err) => {
                console.log(err)
            }
        })
    }
}
</script>

<template>
    <h3 class="text-center mt-2">QUẢN LÝ KHÓM</h3>
    <v-container>
        <v-sheet>
            <v-form>
                <v-text-field label="Tên khóm"
                              variant="outlined"
                              v-model="formData.ten"
                              :error-messages="formData.errors.ten"></v-text-field>
            </v-form>
            <div class="d-flex justify-end">
                <v-btn color="primary" class="mr-2" @click="createNew">Thêm mới</v-btn>
                <v-btn color="success" class="mr-2" @click="save">Lưu</v-btn>
                <v-btn>Tải lại</v-btn>
            </div>
        </v-sheet>

        <v-data-table
            :items="khoms"
            :headers="[{key:'ten',title:'Tên khóm'}]"
            v-model="selected"
            show-select
        ></v-data-table>
    </v-container>
</template>

<style scoped>

</style>
