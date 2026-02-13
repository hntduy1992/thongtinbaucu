<script setup>

import {useForm, usePage, Link, router} from "@inertiajs/vue3";

const page = usePage()
const units = page.props.units
const location = page.props.location
const img = location.img
const file = '/sdsd'
const formData = useForm({
    name: location.name,
    unit_id: location.unit_id,
    file: null,
    img: null,
    latitude: location.latitude,
    longitude: location.longitude,
    phone: location.phone,
    address: location.address,
    region: location.region,
    scope: location.scope,
    place: location.place
})

const submit = () => {
    formData.put('/locations', {
        forceFormData: true,
        onSuccess: (res) => {
            console.log(res)
        },
        onError: (err) => {
            console.error(err)
        }
    })
}
console.log(location)
</script>

<template>
    <v-container>
        <v-card>
            <v-card-title>Cập nhật Khu vực bỏ phiếu</v-card-title>
            <v-list-item>
                <v-form class="d-flex flex-wrap pa-2" @submit.prevent="submit">
                    <v-select class="mr-2" variant="outlined" :items="units" item-value="id" item-title="name"
                              v-model="formData.unit_id" label="Đơn vị bầu cử"
                              :error-messages="formData.errors.unit_id" width="400" clearable></v-select>
                    <v-text-field class="mr-2" variant="outlined" v-model="formData.name" label="Tên khu vực"
                                  :error-messages="formData.errors.name" width="400" clearable>
                    </v-text-field>
                    <v-file-input filter-by-type="application/pdf" class="mr-2" variant="outlined"
                                  v-model="formData.file" :label="file || 'Quyết định'"
                                  :error-messages="formData.errors.file" width="400" clearable
                    >
                    </v-file-input>
                    <v-file-input filter-by-type="image/jpeg, image/png, image/jpg" class="mr-2" variant="outlined"
                                  v-model="formData.img" label="Hình"
                                  :error-messages="formData.errors.img" width="400" clearable>
                        <template v-slot:prepend-inner>
                            <img style="height: 30px" :src="'/storage/'+img">
                        </template>
                    </v-file-input>
                    <v-text-field class="mr-2" variant="outlined" v-model="formData.latitude" label="Kinh độ"
                                  :error-messages="formData.errors.latitude" width="400" clearable></v-text-field>
                    <v-text-field class="mr-2" variant="outlined" v-model="formData.longitude" label="Vĩ độ"
                                  :error-messages="formData.errors.longitude" width="400" clearable></v-text-field>
                    <v-text-field class="mr-2" variant="outlined" v-model="formData.phone" label="Điện thoại"
                                  :error-messages="formData.errors.phone" width="400" clearable></v-text-field>
                    <v-text-field class="mr-2" variant="outlined" v-model="formData.address" label="Địa chỉ"
                                  :error-messages="formData.errors.address" width="400" clearable></v-text-field>
                    <v-text-field class="mr-2" variant="outlined" v-model="formData.region" label="Khóm"
                                  :error-messages="formData.errors.region" width="400" clearable></v-text-field>
                    <v-text-field class="mr-2" variant="outlined" v-model="formData.scope" label="Phạm vi"
                                  :error-messages="formData.errors.scope" width="400" clearable></v-text-field>
                    <v-text-field class="mr-2" variant="outlined" v-model="formData.place" label="Điểm bỏ phiếu"
                                  :error-messages="formData.errors.scope" width="400" clearable></v-text-field>

                    <v-toolbar color="transparent">
                        <Link href="/locations" class="text-decoration-none">Quay lại danh sách</Link>
                        <v-spacer></v-spacer>
                        <v-btn color="success" class="mr-2" variant="elevated" type="submit">Save</v-btn>
                        <v-btn>Hoàn tác</v-btn>
                    </v-toolbar>
                </v-form>
            </v-list-item>
        </v-card>
    </v-container>
</template>

<style scoped>

</style>
