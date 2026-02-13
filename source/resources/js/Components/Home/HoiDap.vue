<script setup>
import {ref} from "vue";
import {usePage} from "@inertiajs/vue3";

const header = [
    {title: 'STT', key: 'index',},
    {title: 'Câu hỏi', key: 'question',},
]
const items = usePage().props.questions
const dataItems = ref(items)

const selected = ref(null)
const search = ref(null)
const searchHandler = () => {
    if (search.value === null) {
        dataItems.value = items
        return;
    }
    dataItems.value = items.filter(x => x.question.toLowerCase().includes(search.value.toLowerCase()))
}
</script>

<template>
    <aside>
        <v-container>
            <div class="d-none tablet-title">
                <span >Hỏi đáp về bầu cử</span>
                <v-text-field variant="outlined" density="compact" prepend-icon="mdi-magnify"
                              placeholder="Nhập để tìm câu hỏi có liên quan" hide-details
                              v-model="search" clearable @click:clear.prevent="searchHandler">
                    <template v-slot:append>
                        <v-btn color="info" @click.prevent="searchHandler">Tìm</v-btn>
                    </template>
                </v-text-field>
            </div>
            <div class="section-title">
                <span>HỎI ĐÁP VỀ BẦU CỬ</span>
            </div>
            <div class="hoidap-wrap">
                <v-container>
                    <v-text-field class="section-search" variant="outlined" density="compact" prepend-icon="mdi-magnify"
                                  placeholder="Nhập để tìm câu hỏi có liên quan" hide-details v-model="search" clearable
                                  @click:clear.prevent="searchHandler">

                        <template v-slot:append>
                            <v-btn color="info" @click.prevent="searchHandler">Tìm kiếm</v-btn>
                        </template>
                    </v-text-field>
                </v-container>
                <div class="section-content">
                    <v-expansion-panels class="list-items" v-model="selected">
                        <v-expansion-panel v-for="(item, index) of dataItems">
                            <template v-slot:title>Câu {{ item.sort }}. {{ item.question }}</template>
                            <template v-slot:text>
                                <span class="font-weight-bold">Trả lời:</span>
                                {{ item.answer }}
                            </template>
                        </v-expansion-panel>
                    </v-expansion-panels>
                </div>
            </div>
        </v-container>
    </aside>
</template>

<style scoped>
aside {
    width: 100%;
    height: 100%;
    padding: 25px 0;
}

.hoidap-wrap {
    width: inherit;
    height: inherit;
    border: 2px solid var(--root-color);
    border-radius: 10px;
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 50px 20px 20px 20px;
}

.section-title {
    font-size: calc(1.2rem + 0.5vw);
    text-align: center;
    border-bottom: 5px solid var(--nav-color);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
}

.section-title span {
    padding: 10px 15px;
    color:var(--nav-color);
    font-weight: bolder;
}

.section-content {
    padding: 10px;
    width: 100%;
    overflow: auto;
    height: 70vh;
}

@media (max-width: 768px) {
    .section-search {
        display: none;
    }

    aside {
        padding: 0;
    }

    .hoidap-wrap {
        padding: 15px;
    }

    .section-title {
        display: none;

    }

    .tablet-title {
        display: block !important;
    }

    .tablet-title span {
        display: block;
        padding: 10px;
        margin-bottom: 10px;
        text-align: center;
        font-size: calc(1rem + 0.2vw);
        border-bottom: 2px solid var(--root-color);
        background-color: var(--nav-color);
    }

    .hoidap-wrap {
        border: none;
        padding: 0;
    }
}
</style>
