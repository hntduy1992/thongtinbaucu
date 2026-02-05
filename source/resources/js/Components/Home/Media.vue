<script setup>

import {ref} from "vue";

const tab = ref('video');
</script>

<template>
    <aside>
        <v-container class="media-wrap">
            <div class="title-text">
                <span class="bg-teal">MULTIMEDIA</span>
            </div>
            <v-tabs class="tab-title" align-tabs="center" v-model="tab">
                <v-tab value="video">Video</v-tab>
                <v-tab value="image">Hình ảnh</v-tab>
                <v-tab value="info">Infographic</v-tab>
            </v-tabs>
            <v-tabs-window v-model="tab" >
                <v-tabs-window-item value="video">
                    <v-sheet class=" pa-5">
                        Video
                    </v-sheet>
                </v-tabs-window-item>
                <v-tabs-window-item value="image">
                    <v-sheet class="pa-5">Image</v-sheet>
                </v-tabs-window-item>
                <v-tabs-window-item value="info">
                    <v-sheet class="pa-5">Infographic</v-sheet>
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
    font-size: calc(1.6rem + 0.4vw);
    border-bottom: 5px solid teal;
    text-align: center;
}

.title-text span {
    padding: 10px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}
.video-list{
    display: flex;
}
.video-item:first-child{
    width: 50%;
}
.video-item{
    width: 25%;
}

@media (max-width: 768px) {

    .title-text{
        font-size: calc(1rem + 0.2vw);
    }
    .tab-title button{
        font-size: calc(0.5rem + 0.2vw);
    }
}
</style>
