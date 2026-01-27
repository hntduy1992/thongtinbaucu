<script setup>
import DefaultHeader from "./Default/DefaultHeader.vue";
import {onMounted, onUnmounted, ref} from "vue";
import DefaultFooter from "./Default/DefaultFooter.vue";

const isHidden = ref(false);

const handleScroll = () => {
    // Lấy giá trị cuộn trang (hỗ trợ đa trình duyệt)
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
    isHidden.value = scrollTop > 50;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <div class="d-flex flex-column">
        <DefaultHeader id="home"></DefaultHeader>
        <div class="flex-grow-1 main-content">
            <v-container class="pa-0">
                <slot></slot>
            </v-container>
        </div>
        <DefaultFooter></DefaultFooter>
    </div>

    <div class="go-home" :class="{'go-home__hide': isHidden}">
        <v-btn icon="mdi-home" color="primary" href="#home"></v-btn>
    </div>

</template>

<style scoped>
.main-content {
//background-image: url("../../images/TrongDong-bgcontent.png"); //background-size: contain; //background-position: top;
}

.go-home {
    display: none;
    position: fixed;
    bottom: 50px;
    right: 50px;
    z-index: 10;
}

.go-home.go-home__hide {
    display: block;
}
</style>
