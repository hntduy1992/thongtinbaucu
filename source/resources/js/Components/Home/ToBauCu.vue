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
import {Link} from "@inertiajs/vue3";

const imgItems = [img1, img2, img3, img4, img5, img6, img7, img8, img9, img10]

const props = defineProps({
    items: Object
})

</script>

<template>
    <v-container class="d-flex flex-column h-100 justify-center">
        <div class="header-content" >
            <div class="header-content__item  header-content__item--left">
                <v-icon class="mr-2">mdi-home-map-marker</v-icon>
                <span><b class="text-orange-accent-4">10 </b> Đơn vị bầu cử</span>
            </div>

            <div class="header-content__item header-content__item--right">
                <v-icon class="mr-2">mdi-account-group-outline</v-icon>
                <span><b class="text-orange-accent-4">37 </b>Khu vực bỏ phiếu</span>
            </div>
        </div>

        <ul class="dvbc-list">
            <li class="dvbc-item" v-for="item of items">
                <Link :href="'don-vi-bau-cu/'+item.slug"><img class="dvbc-img" :src="item.img" :alt="item.name"></img>
                </Link>
            </li>
        </ul>
    </v-container>
</template>

<style scoped>
.header-content {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: calc(1.2rem + 0.5vw);
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
    border-radius: 0 50px 50px 0;
}

.header-content__item--left {
    border-radius: 50px 0 0 50px;
}

.dvbc-list {
    display: flex;
    justify-content: center;
    align-items: center;
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
