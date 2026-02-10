<script setup>
import CountDown from "../Components/Home/CountDown.vue";
import ToBauCu from "../Components/Home/ToBauCu.vue";
import NguoiUngCu from "../Components/Home/NguoiUngCu.vue";
import HoiDap from "../Components/Home/HoiDap.vue";
import HuongDan from "../Components/Home/HuongDan.vue";
import CustomElement from "../Components/CustomElement.vue";
import Media from "../Components/Home/Media.vue";
import {usePage} from "@inertiajs/vue3";
import {computed} from "vue";

const page = usePage()
const units = computed(() => page.props.units || null)
const questions = page.props.questions
</script>

<template>
    <CustomElement :top-aside="true">
        <CountDown></CountDown>
    </CustomElement>
    <CustomElement id="to-bau-cu">
        <ToBauCu :items="units"></ToBauCu>
    </CustomElement>
    <CustomElement id="hoi-dap" class="bg-hoi-dap ">
        <HoiDap :items="questions"></HoiDap>
    </CustomElement>
    <CustomElement id="media">
        <Media></Media>
    </CustomElement>
</template>

<style scoped>
#to-bau-cu,
#media {
    background-color: var(--root-color-opacity);
}
</style>
