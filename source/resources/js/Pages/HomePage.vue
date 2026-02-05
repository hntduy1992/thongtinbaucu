<script setup>

import CountDown from "../Components/Home/CountDown.vue";
import ToBauCu from "../Components/Home/ToBauCu.vue";
import NguoiUngCu from "../Components/Home/NguoiUngCu.vue";
import HoiDap from "../Components/Home/HoiDap.vue";
import HuongDan from "../Components/Home/HuongDan.vue";
import CustomElement from "../Components/CustomElement.vue";
import Media from "../Components/Home/Media.vue";
</script>

<template>
    <CustomElement :top-aside="true">
        <CountDown></CountDown>
    </CustomElement>
    <CustomElement id="to-bau-cu">
        <ToBauCu></ToBauCu>
    </CustomElement>
    <CustomElement id="hoi-dap" class="bg-hoi-dap ">
        <HoiDap></HoiDap>
    </CustomElement>
    <CustomElement id="media">
        <Media></Media>
    </CustomElement>
</template>

<style scoped>
#to-bau-cu,
#media{
    background-color: var(--root-color-opacity);
}
</style>
