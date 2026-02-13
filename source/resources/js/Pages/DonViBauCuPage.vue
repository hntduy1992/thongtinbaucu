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

        <p class="mt-2 d-flex flex-md-row flex-column align-center justify-center">
            <span >Gồm {{ locations.length }} Khu vực bỏ phiếu: </span>
            <a class="ml-2 text-red" v-for="location of locations" :href="`#kvbp_${location.id}`">Khu vực bỏ phiếu
                {{ location.name }}</a>
        </p>


        <v-list class="location-list">
            <v-list-item v-for="location of locations" class="location-list__item">
                <v-card :id="'kvbp_'+ location.id">
                    <div class="location-title text-uppercase ">Khu vực bỏ phiếu {{
                            location.name
                        }}
                    </div>
                    <v-card-text class="location-section" style="background-color: var(--root-color-opacity)">
                        <v-img class="location-image" :src="'/storage/'+location.img"
                               :alt="location.name" @click.prevent="showImageHandler(location.img)"/>
                        <div class="flex-fill pa-5 d-flex flex-column">
                            <div class="location-info-title">Tổ bầu cử
                                {{ location.name }}
                            </div>
                            <ul class="info-location-list">
                                <li class="info-location-item ">Khóm: {{ location.region }}</li>
                                <li class="info-location-item">Địa bàn cử tri bỏ phiếu:
                                    {{ location.scope }}
                                </li>
                                <li class="info-location-item">Điểm bỏ phiếu: {{
                                        location.place
                                    }}
                                </li>
                                <li class="info-location-item ">Địa chỉ: {{ location.address }}</li>
                                <li class="info-location-item">Điện thoại: {{ location.phone }}</li>
                            </ul>

                            <div class="flex-fill d-flex flex-column justify-center align-center">
                                <div class="location-qr">
                                    <img class="location-qr__qr"
                                         :src="'/storage/' + location.qr" alt="QR"/>
                                    <v-img class="d-none location-image location-image__sm "
                                           :src="'/storage/'+location.img"
                                           :alt="location.name" @click.prevent="showImageHandler(location.img)"/>
                                </div>
                                <a class="location-map"
                                   :href="'https://maps.google.com/maps?q=' +location.latitude+ ','+ location.longitude"
                                   target="_blank">
                                    <v-icon>mdi-map-marker-radius-outline</v-icon>
                                    Xem trên Google Maps</a>
                            </div>

                        </div>

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
    font-size: 1.5rem;
    color: var(--nav-color);
    font-weight: bolder;
    text-shadow: 2px 2px 3px #333;
}

.location-section {
    border: 2px solid var(--nav-color);
    border-radius: 20px;
    padding: 10px 10px 10px 10px;
    position: relative;
    display: flex;
}

.location-image {
    width: 400px;
    transform: scale(0.9);
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.location-list {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.location-list__item {
    width: 1000px;
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
    margin-bottom: 15px;
}

.location-info-title {
    font-size: 1.5rem;
    color: var(--nav-color);
    font-weight: bold;
    margin-bottom: 5px;
}


.location-image:hover {
    transform: scale(0.95);
}

.location-map {
    color: var(--nav-color);
    padding: 12px;
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

.location-qr .location-image {
    display: none;
}

.location-qr__qr {
    width: 150px;
    border-radius: 12px;
    border: 2px solid var(--nav-color);
}


@media (max-width: 768px) {
    .location-section {
        border-radius: 15px;
        padding: 10px;
    }

    .location-image {
        width: 250px;
    }

    .location-qr {
        width: 100px;
        border-radius: 12px;
        border: 2px solid var(--nav-color);
    }

    .info-location-list {
        padding-left: 5px;
        list-style-type: square;
        font-size: 1rem;
        margin-bottom: 15px;
    }

    .location-info-title {
        font-size: 1.5rem;
        color: var(--nav-color);
        font-weight: bold;
        margin-bottom: 5px;
    }
}

@media (max-width: 425px) {
    .location-section {
        border-radius: 15px;
        padding: 10px;
    }

    .location-image {
        display: none;
    }

    .location-qr {
        display: flex;
        width: 100%;
        border: none;
        padding-left: 50%;
        position: relative;
    }

    .location-qr .location-image {
        width: 100%;
    }

    .location-qr__qr {
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateX(25%) translateY(-50%);
        width: 100px;
        border-radius: 12px;
        border: 2px solid var(--nav-color);
    }

    .info-location-list {
        padding-left: 5px;
        list-style-type: square;
        font-size: 1rem;
        margin-bottom: 15px;
    }

    .location-info-title {
        font-size: 1.5rem;
        color: var(--nav-color);
        font-weight: bold;
        margin-bottom: 5px;
    }

    .location-image.location-image__sm {
        display: block !important;
        width: 100px;
    }
}

@media (max-width: 375px) {
    .dvbc-item {
        width: 100%;
    }
}
</style>
