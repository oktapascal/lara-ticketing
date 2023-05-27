<script setup>
import { ref, computed } from 'vue'
import { useForm } from '@inertiajs/vue3'
import Layout from '../../Layouts/Auth.vue'
import ImageLogin from '../../Components/Others/ImageLogin.vue'
import BasicInput from '../../Components/Inputs/InputBasic.vue'
import AppendInput from '../../Components/Inputs/InputAppend.vue'
import BasicButton from '../../Components/Buttons/BasicButton.vue';

defineProps({
    errors: Object
})

const modeSecret = ref(true)
const toggleSecret = () => modeSecret.value = !modeSecret.value

const modePassword = computed(() => {
    return modeSecret.value ? "password" : "text"
})

const form = useForm({
    username: '',
    password: ''
})

const onSignIn = () => {
    // noinspection JSUnresolvedReference
    form.post(route('ticket.login'))
}
</script>

<template>
    <Layout>
        <template #image-page>
            <ImageLogin />
        </template>
        <template #default>
            <div class="form-container">
                <div class="logo-container">
                    <img alt="logo-image" src="/image/logo/sai-logo-main.png" class="logo-image"/>
                </div>
                <div class="form-content">
                    <form @submit.prevent="onSignIn">
                        <BasicInput name="username" placeholder="Username..." id="username"
                                    labelInput="Username" v-model="form.username"
                                    :isError="!!errors['username']" :textError="errors['username'] && errors['username']['message'] || errors['username']" />
                        <AppendInput name="password" placeholder="Password..." id="password"
                                     labelInput="Password" :type="modePassword"
                                     @on-click-input-action="toggleSecret" v-model="form.password"
                                     :isError="!!errors['password']" :textError="errors['password'] && errors['password']['message'] || errors['password']">
                            <template #default>
                                <i v-if="modeSecret" class="bi bi-eye-fill bi-input" />
                                <i v-else class="bi bi-eye-slash-fill bi-input"></i>
                            </template>
                        </AppendInput>
                        <div class="forget-password-container">
                            <a href="#" class="forget-password">Lupa Password</a>
                        </div>
                        <BasicButton typeButton="submit" text="Login" className="btn-primary" :disabledButton="form.processing" />
                    </form>
                </div>
            </div>
        </template>
    </Layout>
</template>

<style scoped>
.form-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
    padding: 0 3rem;
}
.logo-container {
    align-self: center;
}
.logo-image {
    height: 48px;
    width: 96px;
}
.form-content {
    margin-top: 2rem;
}
.bi-input {
    font-size: 1.4rem;
    color: #000000;
}
.forget-password-container {
    padding: 0 0.2rem;
}
.forget-password {
    text-decoration: none;
    color: #858585;
    font-weight: 500;
    font-size: 0.875rem;
}
</style>
