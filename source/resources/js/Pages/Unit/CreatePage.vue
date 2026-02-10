<script setup>

import {useForm, Link} from "@inertiajs/vue3";

const formData = useForm({
    name: '',
    file: null,
    img: null
})
const submit = () => {
    formData.post('/units', {
        forceFormData: true,
        onSuccess: (res) => {
            console.log(res)
            formData.reset()
        },
        onError: (err) => {
            console.log(err)
        }
    })
}
</script>

<template>
    <v-container style="min-height: 100vh">

        <v-card>
            <v-card-title>
                <h1>Units create page</h1>
            </v-card-title>
            <v-card-text>
                <v-form @submit.prevent="submit">
                    <v-text-field v-model="formData.name" variant="outlined" label="Tên"></v-text-field>
                    <v-file-input v-model="formData.file" variant="outlined" label="File"></v-file-input>
                    <v-file-input v-model="formData.img" variant="outlined" label="Image"></v-file-input>

                    <v-btn type="submit" color="success">Submit</v-btn>
                </v-form>
            </v-card-text>
            <v-card-actions>
                <Link href="/units" class="pa-2 text-decoration-none text-red bg-primary">Trở lại</Link>
            </v-card-actions>
        </v-card>

    </v-container>

</template>

<style scoped>

</style>
