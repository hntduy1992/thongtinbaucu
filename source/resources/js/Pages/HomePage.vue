<script setup>

import CountDown from "../Components/Home/CountDown.vue";
import ToBauCu from "../Components/Home/ToBauCu.vue";
import NguoiUngCu from "../Components/Home/NguoiUngCu.vue";
import HoiDap from "../Components/Home/HoiDap.vue";
import HuongDan from "../Components/Home/HuongDan.vue";
import CustomElement from "../Components/CustomElement.vue";
</script>

<template>
    <CustomElement :top-aside="true">
        <CountDown></CountDown>
    </CustomElement>
    <CustomElement id="nguoi-ung-cu">
        <NguoiUngCu></NguoiUngCu>
    </CustomElement>
    <CustomElement id="to-bau-cu">
        <ToBauCu></ToBauCu>
    </CustomElement>
    <CustomElement id="huong-dan">
        <HuongDan></HuongDan>
    </CustomElement>
    <CustomElement id="hoi-dap">
        <HoiDap></HoiDap>
    </CustomElement>
</template>

<style scoped>

</style>
