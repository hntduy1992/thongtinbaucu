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

        <p class="text-center">Gồm {{ locations.length }} Khu vực bỏ phiếu:
            <a class="mr-2 text-red" v-for="location of locations" :href="`#kvbp_${location.id}`">Khu vực bỏ phiếu {{ location.name }} </a>
        </p>


        <v-list>
            <v-list-item v-for="location of locations">
                <!--                @click.prevent="showImageHandler(location)"-->
                <v-card :id="'kvbp_'+ location.id">
                    <v-card-title class="location-title text-uppercase ">Khu vực bỏ phiếu {{
                            location.name
                        }}
                    </v-card-title>
                    <v-card-text class="location-section">
                        <v-row>
                            <v-col class="d-flex justify-center align-center">
                                <v-img class="location-image" :src="'/storage/'+location.info"
                                       :alt="location.name" @click.prevent="showImageHandler(location.info)"/>
                                <v-img class="location-image" :src="'/storage/'+location.img"
                                       :alt="location.name" @click.prevent="showImageHandler(location.img)"/>
                            </v-col>
                            <v-col class="align-content-center">
                                <v-card color="var(--root-color-opacity)">
                                    <v-card-title class="text-uppercase text-white"
                                                  style="background-color: var(--nav-color)">Tổ bầu cử
                                        {{ location.name }}
                                    </v-card-title>
                                    <v-card-text class="pa-5">
                                        <v-row>
                                            <v-col md="8">
                                                <ul class="info-location-list">
                                                    <li class="info-location-item ">Khóm: {{ location.region }}</li>
                                                    <li class="info-location-item">Địa bàn cử tri bỏ phiếu:
                                                        {{ location.scope }}
                                                    </li>
                                                    <li class="info-location-item">Điểm bỏ phiếu: {{
                                                            location.place
                                                        }}
                                                    </li>
                                                    <li class="info-location-item">Địa chỉ: {{ location.address }}</li>
                                                    <li class="info-location-item">Điện thoại: {{ location.phone }}</li>
                                                </ul>
                                            </v-col>
                                            <v-col>
                                                <div class="d-flex flex-column align-center">
                                                    <img class="border pa-2 bg-red rounded" style="width: 150px"
                                                         :src="'/storage/' + location.qr" alt="QR"/>
                                                    <a class="location-map"
                                                       :href="'https://maps.google.com/maps?q=' +location.latitude+ ','+ location.longitude"
                                                       target="_blank">
                                                        <v-icon>mdi-map-marker-radius-outline</v-icon>
                                                        Xem trên Google Maps</a>
                                                </div>
                                            </v-col>
                                        </v-row>


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
                :src="'/storage/'+locationShow"
            ></v-img>
        </v-card>
    </v-dialog>
</template>

<style scoped>
.location-title {
    font-size: 2rem;
    padding: 10px 15px;
    color: var(--nav-color);
    font-weight: bolder;
}

.location-section {
    border: 2px solid var(--nav-color);
    border-radius: 20px;
}

.info-location-item {

}

.title-text {
    font-size: 2rem;
    text-decoration: none;
    color: var(--root-color);
    text-shadow: 1px 1px 5px rgba(0, 0, 0, .3);
}

.title-link {
    font-size: .8rem;
}

.info-location-list {
    padding-left: 15px;
    list-style-type: square;
    font-size: calc(1rem + 0.2vw);
}

.location-image {
    margin: 30px;
}

.location-map {
    color: var(--nav-color);
    padding: 12px;
//background-color: var(--nav-color); text-decoration: none;
    border-radius: 10px;
    transition: all 0.3s ease-in-out;
}

.location-map:hover {
    color: green;
    transform: scale(1.1);
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
