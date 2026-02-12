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
    <v-container class="page-content">
        <h3 class="text-center text-uppercase d-flex flex-column">
            <span class="title-text">{{ unit.name }}</span>
            <a class="title-link" :href="'/'+unit.file" target="_blank">Quyết định thành lập</a>
        </h3>

        <p class="text-center">Gồm {{ locations.length }} Khu vực bỏ phiếu</p>


        <v-list>
            <v-list-item v-for="location of locations" >
                //@click.prevent="showImageHandler(location)"
                <v-card>
                    <v-card-title class="location-title">{{ location.name }}</v-card-title>
                    <v-card-text>
                        <v-row>
                            <v-col>
                                <v-img class="dvbc-img" style="width: 100%" :src="'/storage/'+location.img"
                                       :alt="location.name"/>
                            </v-col>
                            <v-col>
                                <v-card>
                                    <v-card-title>Tổ bầu cử số</v-card-title>
                                    <v-card-text>
                                        <ul>
                                            <li>Khóm: {{ location.region }}</li>
                                            <li>Địa bàn cử tri bỏ phiếu: {{ location.scope }}</li>
                                            <li>Điểm bỏ phiếu: {{ location.place }}</li>
                                            <li>Địa chỉ: {{ location.address }}</li>
                                            <li>Điện thoại: {{ location.phone }}</li>
                                        </ul>
                                        <div class="map">
                                            <a :href="'https://maps.google.com/maps?q=' +location.latitude+ ','+ location.longitude" target="_blank">Xem trên Google Maps</a>
                                            <img :src="'/storage/' + location.qr" alt="QR"/>
                                        </div>
                                    </v-card-text>
                                </v-card>
                            </v-col>
                        </v-row>
                    </v-card-text>
                </v-card>

            </v-list-item>
        </v-list>
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
                :src="'/storage/'+locationShow.img"
            ></v-img>
        </v-card>
    </v-dialog>
</template>

<style scoped>
.title-text {
    font-size: 2rem;
    text-decoration: none;
    color: var(--root-color);
    text-shadow: 1px 1px 5px rgba(0, 0, 0, .3);
}

.title-link {
    font-size: .8rem;
}

.dvbc-list {
    display: flex;
    flex-direction: column;
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

@media (max-width: 768px) {

    .dvbc-item {
        width: 50%;
    }
}

@media (max-width: 425px) {

}

@media (max-width: 375px) {
    .dvbc-item {
        width: 100%;
    }
}
</style>
