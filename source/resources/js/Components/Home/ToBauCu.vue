<script setup>
import img1 from '../../../images/tranh-bau-cu-phat-hanh/zip/1.jpg'
import img2 from '../../../images/tranh-bau-cu-phat-hanh/zip/3.jpg'
import img3 from '../../../images/tranh-bau-cu-phat-hanh/zip/9.jpg'
import img4 from '../../../images/tranh-bau-cu-phat-hanh/zip/22.jpg'
import img5 from '../../../images/tranh-bau-cu-phat-hanh/zip/35.jpg'
import img6 from '../../../images/tranh-bau-cu-phat-hanh/zip/32.jpg'
import img7 from '../../../images/tranh-bau-cu-phat-hanh/zip/11.jpg'
import img8 from '../../../images/tranh-bau-cu-phat-hanh/zip/16.jpg'
import img9 from '../../../images/tranh-bau-cu-phat-hanh/zip/20.jpg'
import img10 from '../../../images/tranh-bau-cu-phat-hanh/zip/4.jpg'
import {ref} from "vue";
import {Link, router} from "@inertiajs/vue3";

const imgItems = [img1, img2, img3, img4, img5, img6, img7, img8, img9, img10]

const props = defineProps({
    items: Object
})

</script>

<template>
    <v-container class="d-flex flex-column h-100 justify-center">
        <div class="header__title">
            <span>BAN BẦU CỬ HỘI ĐỒNG NHÂN DÂN PHƯỜNG SA ĐÉC</span>
        </div>
        <div class="header-content">
            <div class="header-content__item  header-content__item--left">
                <v-icon class="mr-2">mdi-home-map-marker</v-icon>
                <span><b class="text-orange-accent-4">10 </b>  Đơn vị bầu cử</span>
            </div>

            <div class="header-content__item header-content__item--right">
                <v-icon class="mr-2">mdi-map-marker-radius</v-icon>
                <span><b class="text-orange-accent-4">37 </b>Tổ bầu cử và Khu vực bỏ phiếu</span>
            </div>
        </div>

        <ul class="dvbc-list">
            <li class="pa-2" style="width: 20%" v-for="item of items">
                <v-card class="dvbc-item" color="transparent" variant="text">
                    <v-card-title class="text-center">
                        <span class="text-uppercase dvbp-title">{{ item.name }}</span>
                    </v-card-title>
                    <v-card-subtitle>
                        <p class="dvbp-subtitle">(Gồm các khóm {{ item.locations.map(x => x.region).join(', ') }})</p>
                    </v-card-subtitle>
                    <v-card-text class="d-flex flex-wrap justify-center align-stretch">
                        <div class="location-mini" v-for="location of item.locations"
                             @click="router.visit(`/don-vi-bau-cu/${item.slug}/#kvbp_${location.id}`)">
                            <v-img width="100%" height="100%"
                                   :src="'/images/kvbp/thanh-phan/kvbp_'+location.id + '.png'"></v-img>
                        </div>
                    </v-card-text>
                </v-card>
            </li>
        </ul>
    </v-container>
</template>

<style scoped>
.header__title {
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 5px solid var(--nav-color);
}

.header__title span {
    padding: 10px 15px;
    text-align: center;
    font-size: calc(1.2rem + 0.5vw);
    color: var(--nav-color);
    font-weight: bolder;
}

.header-content {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: calc(.8rem + 0.5vw);
    margin-bottom: calc(15px + 0.2vh);

}

.header-content__item {
    padding: 10px 15px;
    display: flex;
    align-items: center;
    color: white;
    border-bottom: 3px solid var(--root-color);
    text-shadow: 2px 0 5px #0d47a1;
    justify-content: center;
    background-color: var(--nav-color);

}

.header-content__item--right {
    border-bottom-right-radius: 40px;
}

.header-content__item--left {
    border-bottom-left-radius: 40px;
}

.dvbc-list {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    list-style-type: none;
}

.dvbc-item {
    background-image: url("../../../images/kvbp/dvbp-background.jpg");
    background-size: cover;
    background-position: center;

    padding: 10px;
    cursor: pointer;
    border-radius: 20px;
    border: 2px solid var(--nav-color);
}

.dvbp-title,
.dvbp-subtitle {
    color: var(--nav-color);
    font-weight: bolder;
}

.dvbp-subtitle {
    padding: 0 20px;
    text-wrap: wrap;
    text-align: center;
}

.dvbc-item:hover .dvbc-img {
    transform: scale(1);
    box-shadow: 2px 2px 5px #ccc;
}

.location-mini {
    width: 50%;
    transform: scale(.9);
    transition: all 0.3s ease-in-out;
}

.location-mini:hover {
    transform: scale(1);
}

.dvbc-img {
    width: 100%;
    border-radius: 10px;
    transform: scale(0.95);
    transition: all 0.3s ease-in-out;
}

li {
    color: var(--root-color);
}


.v-card h6 {
    font-size: calc(0.6rem + 0.4vw);
}

.content-tbc__img img {
    width: 100%;
}


@media (max-width: 768px) {
    .header-content {
        font-size: calc(1rem + 0.2vw);

    }

    .header-content__item {
        flex: 1;
        border-radius: 0;
    }

    .dvbc-item {
        width: 50%;
        padding: 5px;
    }

    .dvbc-item .dvbc-img {
        transform: scale(1);
        box-shadow: 2px 2px 5px #ccc;
    }
}

@media (max-width: 576px) {
    .header-content__item {
        font-size: 1rem;
        position: relative;
        display: flex;
        justify-content: center;

    }

    .header-content__item .v-icon {
        position: absolute;
        z-index: 0;
        color: green;
        left: 50%;
        transform: translateX(-50%);
        font-size: 3rem;
    }

    .header-content__item span {
        z-index: 1;
    }

    .dvbc-item {
        width: 75%;
        padding: 5px;
    }
}

@media (max-width: 425px) {
    .header-content__item {
        font-size: 0.7rem;
        padding: 20px 0 0 0;
    }

    .header-content__item .v-icon {
        font-size: 4rem;
        top: 5px;
    }

    .header-content__item b {
        display: flex;
        justify-content: center;
        font-size: 1.5rem;
        text-shadow: 0 0 10px white;
    }

    .dvbc-item {
        width: 90%;
    }
}
</style>
