<script setup>

import {ref} from "vue";

const tab = ref('video');

const videos = [
    {
        image: 'images/videos/img1.png',
        src: 'https://youtu.be/Cl_HHQdqEeM?si=gNrJA3i7c3PtOGIN',
        title: 'Quyền và trách nhiệm của Đại biểu Hội đồng nhân dân'
    },
    {
        image: 'images/videos/img2.png',
        src: 'https://youtu.be/bbqCDfLbdLU?si=LzhsUy2NjxjEAhph',
        title: 'Tiêu chuẩn của Đại biểu Quốc hội và HĐND'
    },
    {
        image: 'images/videos/img3.png',
        src: 'https://youtu.be/gXi0OjefU4U?si=hwF5U03twQyDMiCV',
        title: 'Ý nghĩa cuộc bầu cử Đại biểu Quốc hội khóa XVI và HĐND các cấp'
    },
]
</script>

<template>
    <aside>
        <v-container class="media-wrap">
            <div class="title-text">
                <span>MULTIMEDIA</span>
            </div>
            <v-tabs class="tab-title" align-tabs="center" v-model="tab">
                <v-tab value="image">Hình ảnh</v-tab>
                <v-tab value="video">Video</v-tab>
                <v-tab value="info">Infographic</v-tab>
            </v-tabs>
            <v-tabs-window v-model="tab">
                <v-tabs-window-item value="video">
                    <v-sheet class=" pa-5 ">
                        <v-list class="video-list">
                            <v-list-item class="video-item" v-for="video of videos">
                                <a class="video_link" :href="video.src" target="_blank">
                                    <v-img :src="video.image"></v-img>
                                    <p class="text-center text-overflow-ellipsis">{{ video.title }}</p>
                                </a>
                            </v-list-item>
                        </v-list>
                    </v-sheet>
                </v-tabs-window-item>
                <v-tabs-window-item value="image">
                    <v-sheet class="pa-5">
                        <v-carousel>
                            <v-carousel-item v-for="img of 41"
                                             :src="'/images/tranh-bau-cu/'+ img +'.jpg'"></v-carousel-item>
                        </v-carousel>
                    </v-sheet>
                </v-tabs-window-item>
                <v-tabs-window-item value="info" class="d-flex">
                    <v-list class="w-100 d-flex ">
                        <v-list-item class="info-parent" style="background-image: url('/images/info/media/media-parent.jpg')">
                            <span class="info-parent__title">BẦU CỬ ĐẠI HỘI ĐẠI BIỂU QUỐC HỘI KHÓA XVI VÀ ĐẠI BIỂU HĐND CÁC CẤP, NHIỆM KỲ 2026 - 2031</span>
                        </v-list-item>
                        <v-list-item class="info-parent">
                            <v-list class="w-100 d-flex flex-wrap info-child-list">
                                <v-list-item class="info-child"  style="background-image: url('/images/info/media/media-child-1.jpg')">
                                    <span class="info-child__title">CÁC ĐƠN VỊ BẦU CỬ ĐẠI BIỂU HĐND PHƯỜNG SA ĐÉC</span>
                                </v-list-item>
                                <v-list-item class="info-child"  style="background-image: url('/images/info/media/media-child-2.jpg')">
                                    <span class="info-child__title">28 BAN BẦU CỬ ĐAI BIỂU HĐND TỈNH ĐỒNG THÁP 2026 - 2031</span>
                                </v-list-item>
                                <v-list-item class="info-child"  style="background-image: url('/images/info/media/media-child-3.jpg')">
                                    <span class="info-child__title">ĐỒNG THÁP: 06 BAN BẦU CỬ ĐẠI BIỂU QUỐC HỘI KHÓA XVI</span>
                                </v-list-item>
                                <v-list-item class="info-child"  style="background-image: url('/images/info/media/media-child-4.jpg')">
                                    <span class="info-child__title">ĐỒNG THÁP CÓ 06 ĐƠN VỊ BẦU CỬ, BẦU 18 ĐẠI BIỂU QUỐC HỘI</span>
                                </v-list-item>
                            </v-list>
                        </v-list-item>
                    </v-list>
                    <a href="">Xem thêm</a>
                </v-tabs-window-item>
            </v-tabs-window>
        </v-container>
    </aside>
</template>

<style scoped>
aside {
    width: 100%;
    height: 100%;
}

.media-wrap {
    width: inherit;
    height: inherit;
}

.title-text {
    font-size: calc(1.2rem + 0.5vw);
    text-align: center;
    border-bottom: 5px solid var(--nav-color);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
}

.title-text span {
    padding: 10px 15px;
    color: var(--nav-color);
    font-weight: bolder;
}

.video-list {
    display: flex;
    justify-content: center;
    align-items: start;
}

.video-item {
    width: 33.33%;
    transform: scale(0.9);
    transition: transform .2s ease-in-out;
}

.video-item:hover {
    transform: scale(1);
}

.video_link {
    text-decoration: none;
    color: inherit;
}
.info-parent,.info-child{
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: end;
    transform: scale(0.95);
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}
.info-parent:hover,.info-child:hover{
    transform: scale(1);
}

.info-parent{
    width: 50%;
    height: 600px;
    background-size: cover;

}
.info-parent__title,
.info-child__title{
    display: block;
    width: 100%;
    background-color: yellow;
    padding: 10px 20px;
    font-weight: bold;
    color: white;
    font-size: 2rem;
    text-align: center;
}

.info-child{
    width: 50%;
    height: 300px;
    background-size: cover;
}
.info-child__title{
    font-size: .8rem;
}
.info-child img{
    width: 100%;
}
@media (max-width: 768px) {

    .title-text {
        font-size: calc(1rem + 0.2vw);
    }

    .tab-title button {
        font-size: calc(0.5rem + 0.2vw);
    }
}
</style>
