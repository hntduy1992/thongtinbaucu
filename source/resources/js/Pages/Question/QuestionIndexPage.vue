<script setup>

import {useForm, usePage} from "@inertiajs/vue3";
import {computed, onMounted, ref} from "vue";

const page = usePage()

const questionForm = useForm({
    id: null,
    sort: 0,
    question: '',
    answer: ''
})
const nextSort = computed(() => page.props.nextSort || 0)
const questions = computed(() => page.props.questions)
const update = ref(false)
const createQuestion = () => {
    questionForm.reset()
    questionForm.id = null;
    questionForm.sort = nextSort
    update.value = false
}

onMounted(() => {
    createQuestion()
})
const createHandler = () => {
    questionForm.post('/hoi-dap/create', {
        only: ['questions', 'flash', 'nextSort'],
        onSuccess: (res) => {
            questionForm.reset()
        },
        onError: (err) => {
            console.error(err)
        },
        onFinish: () => {
            console.log('end')
        }
    })
}
const updateForm = (item) => {
    questionForm.id = item.id
    questionForm.sort = item.sort
    questionForm.question = item.question
    questionForm.answer = item.answer
    update.value = true
}
const updateHandler = () => {
    questionForm.put('/hoi-dap/update', {
        only: ['questions', 'flash', 'nextSort'],
        onSuccess: (res) => {
            console.log(res)
        },
        onError: (err) => {
            console.error(err)
        },
        onFinish: () => {
            console.log('end')
        }
    })
}

</script>

<template>
    <v-container>
        <v-card>
            <v-card-title class="bg-red">
                <span>Quản lý hỏi đáp</span>
                <v-btn class="float-end" color="primary" @click="createQuestion">Thêm mới</v-btn>
            </v-card-title>
            <v-card-subtitle>
                <v-form class="pt-3">
                    <div class="d-flex">
                        <v-number-input class="mr-2" label="STT" variant="outlined" density="compact"
                                        control-variant="split"
                                        width="200" v-model="questionForm.sort"></v-number-input>
                        <v-text-field class="w-100" label="Câu hỏi" variant="outlined" density="compact"
                                      v-model="questionForm.question"
                                      :error-messages="questionForm.errors.question"></v-text-field>
                    </div>
                    <v-textarea label="Trả lời" variant="outlined" density="compact"
                                v-model="questionForm.answer" :error-messages="questionForm.errors.answer"></v-textarea>
                    <v-sheet class="pa-2 d-flex justify-center">
                        <v-btn v-if="update" class="mr-2" color="success" @click="updateHandler">Save</v-btn>
                        <v-btn v-else class="mr-2" color="success" @click="createHandler">Save new</v-btn>
                        <v-btn class="float-end">Hoàn tác</v-btn>
                    </v-sheet>
                </v-form>

            </v-card-subtitle>
            <v-card-text>
                <v-text-field label="Tìm kiếm" variant="outlined" placeholder="Nhập nội dung để tìm..."></v-text-field>
                <v-expansion-panels>
                    <v-expansion-panel v-for="question of questions">
                        <v-expansion-panel-title>
                            <span class="mr-2">Câu {{ question.sort }}: </span>
                            <p>{{ question.question }}</p>
                            <template v-slot:actions>
                                <v-btn prepend-icon="mdi-pen" color="warning" @click="updateForm(question)">Sửa</v-btn>
                            </template>
                        </v-expansion-panel-title>
                        <v-expansion-panel-text>
                            <span class="font-weight-bold text-decoration-underline">Trả lời:</span> <br>
                            {{ question.answer }}
                        </v-expansion-panel-text>
                    </v-expansion-panel>
                </v-expansion-panels>
            </v-card-text>
        </v-card>
    </v-container>
</template>

<style scoped>

</style>
